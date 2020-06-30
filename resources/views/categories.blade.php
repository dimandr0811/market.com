@extends('layouts.master')

@section('title', 'Все категории')

@section('content')
<div class="container">
    <div class="starter-template">
        @foreach($categories as $category)
            <div class="panel">
                <a href="{{route('category', $category->code)}}">
                    <img src="{{Storage::url($category->image)}}" height="255px">
                    <h2>{{$category->name}}</h2>
                </a>
                <p>
                    {{$category->description}}
                </p>
            </div>
        @endforeach
    </div>
@endsection
