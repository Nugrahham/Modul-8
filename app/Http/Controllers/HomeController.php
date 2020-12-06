<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\dosen\Dosen as DosenDosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

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
        return view('detail');
    }
    public function detail()
    {
        return view ('detail');
    }
    public function dosen()
    {
        $dosen = Dosen::all();
        // dd($dosen);
        return view ('dosen', compact('dosen'));
    }
    public function list()
    {
        $mahasiswa = Mahasiswa::all();
        // dd($mahasiswa);
        return view ('list', compact('mahasiswa'));
    }
}
