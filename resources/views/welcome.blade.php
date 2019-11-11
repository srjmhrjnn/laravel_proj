@extends('layout')
{!! $foo !!}

@section('content')
        <?php
        
        echo 'Welcome to Home Page';?>
        <ul>
        @foreach($task as $t) 
           <li> {{ $t }} </li>
        @endforeach
        </ul>
@endsection
