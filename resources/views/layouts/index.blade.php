@extends('layouts.app')

@section('content')
@section('content')

@foreach ($phones as $ph)
    <h3 >{{$ph->phone}}</h3>
    <br>
    <a href="{{route('phones.edit', $ph->id)}}">edit</a>
    {{-- <a href="{{route('phones.destroy ', $ph->id)}}">delete</a> --}}
    <br>

@endforeach
@endsection
