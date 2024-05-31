@extends('layouts-admin.master')
@section('content')

<div class="card">
    <div class="card-header bg-primary">
        <h6 class="mb-0 text-white">Add  Berita Artikel
            <a href="{{url('admin/berita')}}" class="btn btn-sm float-end btn-light">Kembali</a>
        </h6>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{url('admin/berita')}}" method="post" enctype="multipart/form-data">
                @csrf


                <div class="form-group">
                    <label for="" class="form-label">Judul Berita Artikel</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Link Berita Artikel</label>
                    <input type="text" class="form-control @error('link') is-invalid @enderror" name="link">
                </div>
                <div class="form-group">
                <label for="" class="form-label">Foto Berita Artikel</label>
                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" accept="image/*">
            </div>


                <button type="submit" class="btn btn-primary float-end mt-3">Tambah</button>

            </form>
        </div>
    </div>

</div>

@endsection