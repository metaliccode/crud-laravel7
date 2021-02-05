@extends('layout.main')

@section('title', 'Form Ubah Data Mahasiswa')
    
@section('container')    
<div class="container">
    <div class="row">
        <div class="col-10">
            <div class="mt-3">
                <h1>Form Ubah Data Mahasiswa</h1>
                <form class="col-6" method="POST" action="/students/{{$student->id}}" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <div class="d-flex justify-content-start mb-2">
                            <img src="{{url($student->photo)}}" alt="" width="auto" height="40">
                        </div>
                        <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" value="{{$student->photo}}">
                        @error('photo')
                          <div id="validationServer03Feedback" class="invalid-feedback">
                              {{$message}}
                          </div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{$student->nama}}">
                      @error('nama')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" placeholder="Masukan NIP" name="nip" value="{{$student->nip}}">
                        @error('nip')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email" name="email" value="{{$student->email}}">
                        @error('email')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukan Jurusan" name="jurusan" value="{{$student->jurusan}}">
                        @error('jurusan')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                </form>   
            </div>
        </div>
    </div>
</div>
@endsection