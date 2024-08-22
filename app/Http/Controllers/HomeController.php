<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Web;
use App\Models\Setting;
use Carbon\Carbon;




class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $req_search = $request->query('search');
        $web = Web::first();
        $setting = Setting::first();
        $dt = Carbon::now()->format('Y-m-d H:i:s');

        // $student = Student::query()->where('no_exam', $req_search)->get();
        // $studentCheck =  $student->count();

        // if (isset($req_search)) {

        //     if ($studentCheck > 0) {
        //         return view('frontend.index', [
        //             'web' => $web,
        //             'student' => $student,
        //             'setting' => $setting,
        //             'req_search' => $req_search,
        //             'dt' => $dt,
        //         ]);
        //     } else {
        //         return view('frontend.not-found', [
        //             'web' => $web,
        //         ]);
        //     }
        // } else {
        return view('frontend.null', [
            'web' => $web,
            'setting' => $setting,
            'req_search' => $req_search,
            'dt' => $dt,

        ]);
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function check_kelulusan(Request $request)
    {
        $request->validate(['nim' => 'required|string']);
    
        $student = Student::where('nim', $request->nim)->first();

        if (!$student) {
            // Jika NIM tidak ditemukan, kembalikan ke tampilan null dengan pesan error
            return redirect()->route('home')->with('error', 'NIM tidak ditemukan. Silakan periksa kembali NIM yang Anda masukkan.');
        }
    
        if ($student) {
            if ($student->status == '1') {
                return view('frontend.check_kelulusan.lulus', [
                    'web' => Web::first(),
                    'setting' => Setting::first(),
                    'req_search' => $request->nim,
                    'dt' => Carbon::now()->format('Y-m-d H:i:s'),
                    'student' => $student, // Menambahkan data siswa
                ]); // Menggunakan view lulus
            } else {
                return view('frontend.check_kelulusan.tdk_lulus', [
                    'web' => Web::first(),
                    'setting' => Setting::first(),
                    'req_search' => $request->nim,
                    'dt' => Carbon::now()->format('Y-m-d H:i:s'),
                    'student' => $student, // Menambahkan data siswa
                ]); // Menggunakan view tidak lulus
            }
        }
    
        return response()->json(['redirect' => '/error']); // Ganti dengan route halaman error jika NIM tidak ditemukan
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
