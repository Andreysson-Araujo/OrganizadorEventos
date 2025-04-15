@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
    

        <h1>Algum titulo</h1>
        <img src="/img/bannersa.jpeg" alt="Banner" srcset="">
        @if(10 > 5)
            <p>A condição é true</p>
        @endif
        <p>{{$nome}}</p>
        @for($i = 0; $i < count($arr); $i++)
            <p>{{$arr[$i]}} - {{$i}}</p>
            @if($i == 2)
                <p>o i é 2</p>
            @endif
        @endfor

        @foreach ($arrnomes as $arrnome)
            <p>{{$loop -> index}}</p>
            <p>{{$arrnome}}</p>    
        @endforeach

        @php
            $name = "A";
            echo $name;
        @endphp
        
@endsection
