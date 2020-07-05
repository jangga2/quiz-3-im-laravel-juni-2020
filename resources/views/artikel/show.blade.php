@extends('layouts.master')

@section('content')

    <div class="ml-3 mt-3">
        <h3>Jawaban</h3>
        @foreach($artikel as $a => $article)
            <p>{{$article->judul}}</p>
            <p>{{$article->isi}}</p>
            <p>{{str_replace(" ", "-", $article->judul)}}</p>
            <p>{{$article->tag}}</p>
        @endforeach
@endsection