@extends('layouts.master')

@section('content')



<div class="ml-3 mt-3">
    <h1>Daftar Artikel</h1>
    <a href="/artikel/create" class="btn btn-primary">
            Buat Artikel baru
    </a>

        <table class="table table-bordered">
        @csrf
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Slug</th>
                        <th>Tag</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($artikel as $a => $article)
                    <tr>
                    <td>{{$a+1}}</td>
                    <td>{{$article->judul}}</td>
                    <td>{{$article->isi}}</td>
                    <td>{{str_replace(" ", "-", $article->judul)}}</td>
                    <td>{{$article->tag}}</td>
                    <td><a href="artikel/{{$article->artikelId}}" class="fa fa-search-plus"></a>
                        <a href="artikel/{{$article->artikelId}}/edit" class="fa fa-edit"></a>
                        <a href="" class="fa fa-trash"></a>
                    </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
</div>

@endsection