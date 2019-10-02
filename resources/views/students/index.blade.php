@extends('layout/main')

@section('title', 'Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2">Daftar Mahasiswa</h1>

            @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif
            <a href="/mahasiswa/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>


            <ul class="list-group">
                @foreach($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$student->nama}}
                    <a href="/mahasiswa/{{$student->id}}" class="badge badge-primary">detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>


@endsection