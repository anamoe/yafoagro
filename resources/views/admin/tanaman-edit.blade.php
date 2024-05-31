@extends('layouts-admin.master')
@section('content')

<div class="card">
    <div class="card-header bg-primary">
        <h6 class="mb-0 text-white">Edit  Tanaman
            <a href="{{url('admin/tanaman')}}" class="btn btn-sm float-end btn-light">Kembali</a>
        </h6>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{url('admin/tanaman/'.$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')

                <div class="form-group">
                    <label for="" class="form-label">Nama Tanaman</label>
                    <input type="text" class="form-control @error('nama_tanaman') is-invalid @enderror" name="nama_tanaman" value="{{$data->nama_tanaman}}">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Nomor Sertifikat</label>
                    <input type="number" class="form-control @error('no_sertifikat') is-invalid @enderror" name="no_sertifikat" value="{{$data->no_sertifikat}}">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Nomor Registrasi</label>
                    <input type="number" class="form-control @error('no_registrasi') is-invalid @enderror" name="no_registrasi" value="{{$data->no_registrasi}}">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Kode Area</label>
                    <input type="number" class="form-control @error('kode_area') is-invalid @enderror" name="kode_area" value="{{$data->kode_area}}">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Jumlah Bibit</label>
                    <input type="number" class="form-control @error('jumlah_bibit') is-invalid @enderror" name="jumlah_bibit" value="{{$data->jumlah_bibit}}">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Alamat Cluster</label>
                    <input type="text" class="form-control @error('alamat_cluster') is-invalid @enderror" name="alamat_cluster" value="{{$data->alamat_cluster}}">
                </div>


                <button type="submit" class="btn btn-primary float-end mt-3">Update</button>

            </form>
        </div>
    </div>

</div>

@endsection