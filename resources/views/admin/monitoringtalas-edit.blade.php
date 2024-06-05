@extends('layouts-admin.master')
@section('content')

<div class="card">
    <div class="card-header bg-primary">
        <h6 class="mb-0 text-white">Edit Monitoring Talas
            <a href="{{url('admin/monitoring-talas')}}" class="btn btn-sm float-end btn-light">Kembali</a>
        </h6>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{url('admin/monitoring-talas/'.$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
             
                <div class="form-group">
                    <label for="" class="form-label">Judul</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{$data->judul}}">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Tanggal</label>
                    <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{$data->tanggal}}">
                </div>

                <div class="form-group">
                <label for="" class="form-label">Foto</label>
                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" accept="image/*">
            </div>
            <div class="form-group">
                    <label for="" class="form-label">Foto 2</label>
                    <input type="file" class="form-control @error('foto2') is-invalid @enderror" name="foto2" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Foto 3</label>
                    <input type="file" class="form-control @error('foto3') is-invalid @enderror" name="foto3" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Foto 4</label>
                    <input type="file" class="form-control @error('foto4') is-invalid @enderror" name="foto4" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Foto 5</label>
                    <input type="file" class="form-control @error('foto5') is-invalid @enderror" name="foto5" accept="image/*">
                </div>


                <button type="submit" class="btn btn-primary float-end mt-3">Update</button>

            </form>
        </div>
    </div>

</div>

@endsection