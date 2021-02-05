@extends('layout.main')

@section('title', 'Daftar Mahasiswa')
    
@section('container')    
<div class="container">
    <div class="row">
        <div class="col-10">
            <div class="mt-3">
                <h1>Form Tambah Data Mahasiswa</h1>
                <form class="col-6" method="POST" action="/students" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{old('nama')}}">
                      @error('nama')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" placeholder="Masukan photo" name="photo" value="{{old('photo')}}">
                        @error('photo')
                          <div id="validationServer03Feedback" class="invalid-feedback">
                              {{$message}}
                          </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" placeholder="Masukan NIP" name="nip" value="{{old('nip')}}">
                        @error('nip')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email" name="email" value="{{old('email')}}">
                        @error('email')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukan Jurusan" name="jurusan" value="{{old('jurusan')}}">
                        @error('jurusan')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>   
            </div>
        </div>
    </div>
</div>
@endsection