@extends('master')

@section('content')
  <h4>Selamat Datang <b>{{Auth::user()->first_name}}</b>.</h4>
@endsection
