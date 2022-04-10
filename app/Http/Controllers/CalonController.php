<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Mail;

use App\Models\Calon;

use PDF;
use QrCode;
class CalonController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'no_reg' => 'required',
            'name' => 'required',
            'kelas' => 'required',
            'jk' => 'required',
            'jenjang' => 'required',
            'telepon' => 'required',
            'email' => 'required',
        ]);

        $sekolah = $request->jenjang.'IT Nurul Fikri Boarding School - Bogor';
        $calon = $request->only('no_reg', 'name', 'kelas', 'jk', 'jenjang', 'telepon', 'email', 'alamat') + [
            'no_order' => now()->format('ymdHis'),
            'sekolah' => $sekolah,
            'atasan' => 'S',
            'bawahan' => 'S',
            'step' => 1,
            'aktif' => 1,
            'lunas' => 0,
            'status' => 'order'
        ];
        $calon = Calon::create($calon);

        $no_order = $calon->no_order;
        // return view('step.1', compact('no_order'));
        return redirect()->route('calons.edit', compact('calon'));
    }

    public function edit($id)
    {
        $calon = Calon::find($id)->append('lewat');
        $order = $calon->no_order;
        $jk = $calon->jk;
        $jenjang = $calon->jenjang;
        $step = $calon->step;

        if($step === 3 || $step === '3') {
            view()->share('calon',$calon->append('qrcode'));
            $pdf = PDF::loadView('pdf.invoice', $calon);
            $content = $pdf->download()->getOriginalContent();
            Storage::disk('order')->put($calon->no_order.'.pdf',$content);

            $data = $calon->toArray();
            Mail::send('emails.order', $data, function($message)use($data, $pdf) {
                $message->to($data["email"], $data["name"])
                ->subject('Invoice - '.$data['no_order'])
                ->attachData($pdf->output(), "invoice.pdf");
                });

            return view('step.'.$step, compact('order', 'jk', 'calon'));
        }
        return view('step.'.$step, compact('order', 'jk', 'jenjang'));
    }

    public function update($order, Request $request)
    {
        $this->validate($request, [
            'size_option' => 'required',
        ]);

        $calon = Calon::where('no_order', $order)->first();

        if($request->step === '2') {
            $ukuran = $request->size_option;
            $calon->update(['bawahan' => $ukuran, 'step' => 3]);

            if($ukuran === 'custom') {
                $calon->update(['bawahan' => $ukuran, 'step' => 3, 'ket_bawah' => $request->keterangan]);
            }

        }

        if($request->step === '1') {
            $ukuran = $request->size_option;
            $calon->update(['atasan' => $ukuran, 'step' => 2]);

            if($ukuran === 'datang') {
                $calon->update(['atasan' => $ukuran, 'bawahan' => $ukuran, 'step' => 3]);
            }
            if($ukuran === 'custom') {
                $calon->update(['atasan' => $ukuran, 'step' => 2, 'ket_atas' => $request->keterangan]);
            }
        }

        return redirect()->route('calons.edit', compact('calon'));
    }

    public function createPDF(Request $request) {
        $path = storage_path('order/'.$request->order.'.pdf');

        if (!File::exists($path)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }

}
