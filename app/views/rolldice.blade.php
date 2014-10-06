@extends('layouts.master')
@section('top-script')
<style>
.container{
    text-align:center;
}
#number{
    font-weight:bold;
    font-size:50px;
}
</style>
@stop
@section('content')
    <div class="container"><h1>Roll Dice</h1>
    <p>Your number is:<br> <span id="number">{{{$answer}}}</span> </p></div>
@stop
