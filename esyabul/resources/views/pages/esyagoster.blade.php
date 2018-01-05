@extends('welcome')
@section('content')
@foreach($esyabul as $esya)
               <br/>
        esya ismi :{{$esya->name}}<br/>


            esya baslıgı :{{$esya->baslik}}<br/>


        esya ozellikleri :{{$esya->ozellik}}<br/>



    @endforeach
@foreach($esyaresim as $resim)
    esya resmi :<img src="{{url('esyabul/storage/app/$resim->filename')}}">
    @endforeach
    @stop
