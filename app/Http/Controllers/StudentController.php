<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Imports\StudentImport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Exception;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $student = Student::all();
        return view('admin.student.index', [
            'student' => $student,
        ]);
    }

    // public function truncate()
    // {
    //     // $deleted = DB::table('students')->truncate();
    //     // return $deleted;

    //     // DB::table('students')->truncate();
    //     Student::query()->truncate();
    // }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function upload()
    {
        return view('admin.student.upload');
    }

    public function create()
    {
        //
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

    public function import_excel(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('files/excel', $nama_file);

        // import data
        Excel::import(new StudentImport, 'files/excel/' . $nama_file);


        // alihkan halaman kembali
        return redirect('/student');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('admin.student.edit', compact('student'));
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
        // Validasi input
        $request->validate([
            'status' => 'required|int', // Validasi status
            // Tambahkan validasi lain jika diperlukan
        ]);

        // Mencari siswa berdasarkan ID
        $student = Student::findOrFail($id);

        // Mengupdate data siswa
        $student->status = $request->input('status');
        // Jika Anda ingin mengupdate field lain, tambahkan di sini
        // $student->nim = $request->input('nim'); // Contoh jika ingin mengupdate NIM
        // $student->nama = $request->input('nama'); // Contoh jika ingin mengupdate Nama
        // $student->kelas = $request->input('kelas'); // Contoh jika ingin mengupdate Kelas
        // $student->gen = $request->input('gen'); // Contoh jika ingin mengupdate Gen
        // $student->message = $request->input('message'); // Contoh jika ingin mengupdate Message

        // Simpan perubahan ke database
        $student->save();

        // Redirect atau return response sesuai kebutuhan
        return redirect('/student')->with('success', 'Data siswa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        try {
            $student->delete();
            return [
                'message' => 'data has been deleted',
                'error' => false,
                'code' => 200,
            ];
        } catch (Exception $e) {
            return [
                'message' => 'internal error',
                'error' => true,
                'code' => 500,
                'errors' => $e,
            ];
        }
    }
}
