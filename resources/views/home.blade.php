@extends('layout')
@section('title')
Home
@endsection
@section('six')
@foreach($weather as $city => $celcius)
<div>
    <p class="text-info">{{$city}}</p>
    <p class="text-warning">{{$celcius}}c</p>
</div>
@endforeach
@endsection