@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
    
@foreach ($events as $events)
    <p>{{$event->title}} -- {{$event->description}}</p>    
@endforeach
        
@endsection
