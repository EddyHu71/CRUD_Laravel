@extends('layout.main')

@section('title', 'Detail Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Detail Siswa</h1>
            <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$student->nama}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$student->nrp}}</h6>
                        <p class="card-text">{{$student->email}}</p>
                        <p class="card-text">{{$student->jurusan}}</p>
                        <!--<button type="submit" class="btn btn-primary">Edit</button> -->
                        <a href="/students/{{$student->id}}/edit" class="btn btn-primary">Edit</a>
                        <!--<button type="submit" class="btn btn-danger">Delete</button> -->
                        <form action="/students/{{$student->id}}" method="POST" class="d-inline">
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

@endsection