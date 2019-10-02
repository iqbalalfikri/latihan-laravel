@extends('layout/main')

@section('title', 'Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2">Detail Mahasiswa</h1>

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$student->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$student->nim}}</h6>
                    <p class="card-text">{{$student->email}}</p>
                    <p class="card-text">{{$student->jurusan}}</p>

                    <a href="{{$student->id}}/edit" class="btn btn-success">Edit</a>
                    <form action="{{ $student->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/mahasiswa" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection