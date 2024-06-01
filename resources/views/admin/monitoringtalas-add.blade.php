@extends('layouts-admin.master')
@section('content')

<div class="card">
    <div class="card-header bg-primary">
        <h6 class="mb-0 text-white">Add Monitoring Talas
            <a href="{{url('admin/monitoring-talas')}}" class="btn btn-sm float-end btn-light">Kembali</a>
        </h6>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{url('admin/monitoring-talas')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="" class="form-label">Nama Mitra</label>
                    <select name="user_id" class="form-control">
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <label for="" class="form-label">Judul</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Tanggal</label>
                    <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal">
                </div>


                <div class="form-group">
                <label for="" class="form-label">Foto</label>
                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" accept="image/*">
            </div>

                <button type="submit" class="btn btn-primary float-end mt-3">Tambah</button>

            </form>
        </div>
    </div>

</div>

@endsection