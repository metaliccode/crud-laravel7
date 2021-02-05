<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = Student::all();
        // return view('student.index', ['students' => $students]); bisa diganti dengan commpact
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insert dengan cara ci manual
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->nip = $request->nip;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;

        // $student->save();

        // menggunakan method model create
        // Student::create([
        //     'nama' => $request->nama,
        //     'nip' => $request->nip,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan
        // ]);

        $request->validate([
            'nama' => 'required',
            'nip' => 'required|size:10',
            'email' => 'required',
            'jurusan' => 'required',
            'photo' => 'required|image',
        ]);

        // untuk photo 
        $data = $request->all();
        $data['photo'] = $request->file('photo')->store(
            'assets/student',
            'public'
        );

        // hanya mngambill yang ada di fillable saja
        // Student::create($request->all());
        Student::create($data);
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {

        $request->validate([
            'nama' => 'required',
            'nip' => 'required|size:10',
            'email' => 'required',
            'jurusan' => 'required',
            // 'photo' => 'required'
        ]);

        // untuk photo 
        $data = $request->all();
        $data['photo'] = $request->file('photo')->store(
            'assets/student',
            'public'
        );

        Student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'nip' => $request->nip,
                'email' => $request->email,
                'jurusan' => $request->jurusan,
                'photo' => $data['photo']
            ]);

        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Diubah!');


        // return $student; --> data lama
        // return $request; --> data baru 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil dihapus!');
    }
}
