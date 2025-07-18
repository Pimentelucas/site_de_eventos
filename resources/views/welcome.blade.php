@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
    <h1>algum título</h1>
    <img src="/img/banner.jpg" alt="Banner">
    <p>{{ $nome }}</p>
    @for($i = 0; $i < count($arr); $i ++)
        <p>{{ $arr[$i] }} - {{ $i }} </p>
    @endfor
@endsection