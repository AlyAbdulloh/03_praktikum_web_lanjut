@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
    <h1>Profile</h1>
@endsection

@section('content')
    <ul>
        <li>NIM  : {{ $nim }}</li>
        <li>Nama        : Achmad Aly Abdulloh</li>
        <li>kelas      : TI-2E</li>
    </ul>
@endsection

@section('footer')
    <p class="text-center">
        2141720039 | <a class="text-body" href="https://github.com/AlyAbdulloh">Achmad Aly Abdulloh</a>
    </p>
@endsection