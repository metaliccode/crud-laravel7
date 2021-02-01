@extends('layout.main')

@section('title', 'Daftar Mahasiswa')
    
@section('container')    
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="mt-3">
                <h1>Data Mahasiswa</h1>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{$student->nama}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{$student->nip}}</h6>
                      <p class="card-text">{{$student->jurusan}}</p>
                      <p class="card-text">{{$student->email}}</p>

                      <a href="{{ $student->id}}/edit" class="btn btn-primary">Edit</a>
                        <form action="{{$student->id}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      <a href="/students" class="card-link">Kembali</a>
                     
                    </div>
                </div>          
            </div>
        </div>
    </div>
</div>
@endsection