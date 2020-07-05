@extends('layouts.master')

@section('content')


            <div class="card card-primary ml-3 mt-3">
              <div class="card-header">
                <h3 class="card-title">Buat Artikel Baru/h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/artikel" method="post">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul artikel">
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" name="isi" id="isi" placeholder="Masukkan isi artikel">
                  </div>
                  <div class="form-group">
                    <label for="tag">Tag</label>
                    <input type="text" class="form-control" name="tag" id="tag" placeholder="Masukkan tag artikel">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

@endsection