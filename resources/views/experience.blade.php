@extends('adminlte::page')

@section('title', 'Experience')

@section('content_header')
    <h1>Pengalaman Kuliah</h1>
@endsection

@section('content')
    <p>
        @foreach ($dataUser as $data)
            {{ $data->pengalaman_kuliah }}
        @endforeach
    </p>
@endsection

@section('footer')
    <p class="text-center">
        2141720039 | <a class="text-body" href="https://github.com/AlyAbdulloh/03_praktikum_web_lanjut">Achmad Aly Abdulloh</a>
    </p>
@endsection