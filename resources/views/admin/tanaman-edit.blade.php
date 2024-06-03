@extends('layouts-admin.master')
@section('content')

<div class="card">
    <div class="card-header bg-primary">
        <h6 class="mb-0 text-white">Edit Tanaman
            <a href="{{url('admin/tanaman')}}" class="btn btn-sm float-end btn-light">Kembali</a>
        </h6>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{url('admin/tanaman/'.$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="" class="form-label">Nama Mitra</label>
                    <input type="text" disabled class="form-control @error('nama_tanaman') is-invalid @enderror" name="nama_tanaman" value="{{$data->name}}">
                </div>

                <div class="form-group">
                    <label for="" class="form-label">Nama Tanaman</label>
                    <input type="text" class="form-control @error('nama_tanaman') is-invalid @enderror" name="nama_tanaman" value="{{$data->nama_tanaman}}">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Nomor Sertifikat</label>
                            <input type="number" class="form-control @error('no_sertifikat') is-invalid @enderror" name="no_sertifikat" value="{{$data->no_sertifikat}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Nomor Registrasi</label>
                            <input type="number" class="form-control @error('no_registrasi') is-invalid @enderror" name="no_registrasi" value="{{$data->no_registrasi}}">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Nomor ID Pemilik</label>
                            <input type="text" class="form-control @error('no_id_pemilik') is-invalid @enderror" name="no_id_pemilik" value="{{$data->no_id_pemilik}}">
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="" class="form-label">Nomor Approval</label>
                            <input type="text" class="form-control @error('no_approval') is-invalid @enderror" name="no_approval" value="{{$data->no_approval}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Kode Area</label>
                            <input type="number" class="form-control @error('kode_area') is-invalid @enderror" name="kode_area" value="{{$data->kode_area}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Luas Lahan (ha)</label>
                            <input type="number" class="form-control @error('luas_lahan') is-invalid @enderror" name="luas_lahan" value="{{$data->luas_lahan}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Jumlah Bibit</label>
                            <input type="number" class="form-control @error('jumlah_bibit') is-invalid @enderror" name="jumlah_bibit" value="{{$data->jumlah_bibit}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Kemitraan </label>
                            <input type="number" class="form-control @error('kemitraan') is-invalid @enderror" name="kemitraan" value="{{$data->kemitraan}}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="form-label">Alamat Cluster</label>
                    <input type="text" class="form-control @error('alamat_cluster') is-invalid @enderror" name="alamat_cluster" value="{{$data->alamat_cluster}}">
                </div>

                <div class="row">

                    <center>
                        <img src="{{url('public/bukti_transfer/'.$data->bukti_transfer)}}" alt="" style="width: 50%;">

                    </center>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="form-label">Bukti Transfer </label>
                            <input type="file" class="form-control @error('bukti_transfer') is-invalid @enderror" name="bukti_transfer" accept="*\image">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary float-end mt-3">Update</button>

            </form>
        </div>
    </div>

</div>

@endsection