<?php

namespace App\Http\Controllers;
use App\Models\Web;

use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    public function index()
    {
        $web = Web::first(); // Ambil data web
        return view('frontend.check_kelulusan.komponen_penilaian', compact('web')); // Kirim variabel ke tampilan
    }
}

?>