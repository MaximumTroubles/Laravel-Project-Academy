@extends('layouts.main')
@section('title',$title)
    
@section('content')
    <h3>Home Page</h3>
    <h4>Категории:</h4>
    @foreach ($categories as $category)
        <p>  {{ $category->name }}</p>
        
    @endforeach
@endsection

