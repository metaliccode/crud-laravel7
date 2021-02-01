@extends('layout.main')

@section('title', 'Daftar Mahasiswa')
    
@section('container')    
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="mt-3">
                <h1>Data Mahasiswa</h1>
                <a href="/students/create" class="btn btn-primary mb-3">Tambah Data</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <ul class="list-group">
                    @foreach ($students as $student)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $student -> nama}}
                      <a href="/students/{{$student->id}}" class="badge badge-primary badge-pill">Detail</a>
                    </li>
                    @endforeach

                  </ul>
                
            </div>
        </div>
    </div>
</div>
@endsection