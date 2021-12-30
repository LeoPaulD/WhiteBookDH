@extends('layouts.app')
@section('title')
<title> WhiteBookDH </title>
@show
@section('content')
<div style="height: 80px"></div>
<div id="app">
    <div class="d-flex flex-wrap justify-content-around">
        <div class="col-md-9 col-lg-8 shadow-sm">
            <info-component :id="{{$id}}" imprimable="true"></info-component>
        </div>
    </div>
    
 </div>
 @endsection
