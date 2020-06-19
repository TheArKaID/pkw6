<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', [
            'students' => $students
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("students.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect('/students') ->with ('status', 'Data mahasiswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        // dd($student);
        return view('students.show', compact ('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:4'
        ]);

        Student::where('id', $student->id)->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ]);
        
        return redirect('/students') ->with ('status', 'Data Mahasiswa Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        if(Student::destroy($student->id)==1)
            return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Dihapus');
        else
            return redirect()->back()->withErrors('Gagal Mengapus Data');
    }

    public function search(Request $request)
    {
        $cari = $request->search;
        $post = DB::table('students')
            ->where('nama','like',"%".$cari."%")
            ->paginate();
            
        return view('students.index',['students' => $post]);
    }

    public function print_all()
    {
        $students = Student::all();
        $pdf = PDF::loadview('students.print_all',['students' => $students]);
        // return $pdf->download('laporan-pegawai-pdf');
        return $pdf->stream();
    }
}
