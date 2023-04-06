@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
    <h1>Profile</h1>
@endsection

@section('content')
    <ul>
        @foreach ($dataUser as $data)
            <li>ID Prodi : {{ $data->prodi_id }}</li>
            <li>NIM : {{ $data->NIM }}</li>
            <li>Nama : {{ $data->name }}</li>
            <li>Kelas : {{ $data->kelas }}</li>    
        @endforeach
    </ul>
@endsection

@section('footer')
    <p class="text-center">
        2141720039 | <a class="text-body" href="https://github.com/AlyAbdulloh">Achmad Aly Abdulloh</a>
    </p>
@endsection