@extends('layout.main')

@section('title', 'Daftar Mahasiswa')
    
@section('container')    
<div class="container">
    <div class="row">
        <div class="col-10">
            <div class="mt-3">
                <h1>Data Mahasiswa</h1>
                <table class="table table-light">
                    <thead class="thead-dark">
                        <tr class="scope">
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{--  <?php foreach($mhs as $mhs) ?>  --}}
                        @foreach ($mahasiswa as $mhs)
                            
                        <tr>
                            <td scope="row">{{$loop->iteration}}</td>
                            {{--  array object pake ->  --}}
                            <td>{{$mhs->nama}}</td>
                            <td>{{$mhs->nip}}</td>
                            <td>{{$mhs->email}}</td>
                            <td>{{$mhs->jurusan}}</td>
                            <td>
                                <a href="#" class="badge badge-success">Edit</a>
                                <a href="#" class="badge badge-danger">Hapus</a>
                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection