<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Calon;
class CalonController extends Controller
{
    public function store(Request $request)
    {
        $calon = $request->only('name', 'kelas', 'jk', 'jenjang', 'telepon', 'alamat') + ['no_order' => now()->format('ymdHis'), 'atasan' => 'S', 'bawahan' => 'S', 'step' => 1, 'aktif' => 1, 'lunas' => 0, 'status' => 'order'];
        $calon = Calon::create($calon);

        $no_order = $calon->no_order;
        // return view('step.1', compact('no_order'));
        return redirect()->route('calons.edit', compact('calon'));
    }

    public function edit($id)
    {
        $calon = Calon::find($id);
        $order = $calon->no_order;
        $jk = $calon->jk;

        if($calon->step === 3) {
            return view('step.'.$calon->step, compact('order', 'jk', 'calon'));
        }
        return view('step.'.$calon->step, compact('order', 'jk'));
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
        }

        if($request->step === '1') {
            $ukuran = $request->size_option;
            $calon->update(['atasan' => $ukuran, 'step' => 2]);
        }

        return redirect()->route('calons.edit', compact('calon'));
    }

}
