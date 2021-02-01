<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
// query builder
use Illuminate\Support\Facades\DB;

use App\Student;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //memakai query builder
        // $mahasiswa = DB::table('students')->get();
        // dump($mahasiswa);
        // var_dump($mahasiswa);

        // memakai model dan eloquent untuk mengambil data mahasiswa
        // $mahasiswa = \App\Student::all(); -> gk pek namspace
        $mahasiswa = Student::all();
        // membuat model sesuai dengan nama tabel sendiri
        // $mahasiswa = Mahasiswa::all();

        return view('mahasiswa.index', ['mahasiswa' => $mahasiswa]);
        // return view('mahasiswa.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
