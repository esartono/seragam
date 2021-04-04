<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $smp = array();
        $sma = array();
        $lsmp = 0;
        $bsmp = 0;
        $lsma = 0;
        $bsma = 0;

        $calons = Calon::where('aktif', 1)->orderBy('jenjang', 'desc')->orderBy('no_reg', 'asc')->orderBy('id', 'desc')->paginate(10);

        $lsmp = Calon::where('aktif', 1)->where('jenjang', 'SMP')->where('lunas', 1)->count();
        $bsmp = Calon::where('aktif', 1)->where('jenjang', 'SMP')->where('lunas', 0)->count();

        $smp = [
            't' => Calon::where('aktif', 1)->where('jenjang', 'SMP')->count(),
            'l' => Calon::where('aktif', 1)->where('jenjang', 'SMP')->where('lunas', 1)->count(),
            'lunas' => ($lsmp/($lsmp+$bsmp))*100,
            'ss_a' => Calon::where('aktif', 1)->where('jenjang', 'SMP')->where('atasan', 'SS')->count(),
            's_a' => Calon::where('aktif', 1)->where('jenjang', 'SMP')->where('atasan', 'S')->count(),
            'm_a' => Calon::where('aktif', 1)->where('jenjang', 'SMP')->where('atasan', 'M')->count(),
            'l_a' => Calon::where('aktif', 1)->where('jenjang', 'SMP')->where('atasan', 'L')->count(),
            'xl_a' => Calon::where('aktif', 1)->where('jenjang', 'SMP')->where('atasan', 'XL')->count(),
            'xxl_a' => Calon::where('aktif', 1)->where('jenjang', 'SMP')->where('atasan', 'XXL')->count(),
            'ss_b' => Calon::where('aktif', 1)->where('jenjang', 'SMP')->where('bawahan', 'SS')->count(),
            's_b' => Calon::where('aktif', 1)->where('jenjang', 'SMP')->where('bawahan', 'S')->count(),
            'm_b' => Calon::where('aktif', 1)->where('jenjang', 'SMP')->where('bawahan', 'M')->count(),
            'l_b' => Calon::where('aktif', 1)->where('jenjang', 'SMP')->where('bawahan', 'L')->count(),
            'xl_b' => Calon::where('aktif', 1)->where('jenjang', 'SMP')->where('bawahan', 'XL')->count(),
            'xxl_b' => Calon::where('aktif', 1)->where('jenjang', 'SMP')->where('bawahan', 'XXL')->count(),
        ];

        $lsma = Calon::where('aktif', 1)->where('jenjang', 'SMA')->where('lunas', 1)->count();
        $bsma = Calon::where('aktif', 1)->where('jenjang', 'SMA')->where('lunas', 0)->count();
        $sma = [
            't' => Calon::where('aktif', 1)->where('jenjang', 'SMA')->count(),
            'l' => Calon::where('aktif', 1)->where('jenjang', 'SMA')->where('lunas', 1)->count(),
            'lunas' => ($lsma/($lsma+$bsma))*100,
            'ss_a' => Calon::where('aktif', 1)->where('jenjang', 'SMA')->where('atasan', 'SS')->count(),
            's_a' => Calon::where('aktif', 1)->where('jenjang', 'SMA')->where('atasan', 'S')->count(),
            'm_a' => Calon::where('aktif', 1)->where('jenjang', 'SMA')->where('atasan', 'M')->count(),
            'l_a' => Calon::where('aktif', 1)->where('jenjang', 'SMA')->where('atasan', 'L')->count(),
            'xl_a' => Calon::where('aktif', 1)->where('jenjang', 'SMA')->where('atasan', 'XL')->count(),
            'xxl_a' => Calon::where('aktif', 1)->where('jenjang', 'SMA')->where('atasan', 'XXL')->count(),
            'ss_b' => Calon::where('aktif', 1)->where('jenjang', 'SMA')->where('bawahan', 'SS')->count(),
            's_b' => Calon::where('aktif', 1)->where('jenjang', 'SMA')->where('bawahan', 'S')->count(),
            'm_b' => Calon::where('aktif', 1)->where('jenjang', 'SMA')->where('bawahan', 'M')->count(),
            'l_b' => Calon::where('aktif', 1)->where('jenjang', 'SMA')->where('bawahan', 'L')->count(),
            'xl_b' => Calon::where('aktif', 1)->where('jenjang', 'SMA')->where('bawahan', 'XL')->count(),
            'xxl_b' => Calon::where('aktif', 1)->where('jenjang', 'SMA')->where('bawahan', 'XXL')->count(),
        ];
        return view('home', compact('calons', 'smp', 'sma'));
    }

    public function lunas(Request $request)
    {
        $calon = Calon::where('no_reg',$request->reg)->first();
        $calon->update(['lunas' => true]);

        return redirect()->route('home', ['page' => $request->page]);
    }

    public function hapus(Request $request)
    {
        $calon = Calon::where('id',$request->id)->first();
        if($calon->lunas == 0){
            $calon->update(['aktif' => false]);
        }

        return redirect()->route('home', ['page' => $request->page]);
    }

    public function eksport()
    {
        $calons = Calon::where('aktif', 1)->orderBy('jenjang', 'desc')->orderBy('no_reg', 'asc')->orderBy('id', 'desc')->get();

        return view('eksport', compact('calons'));
    }
}
