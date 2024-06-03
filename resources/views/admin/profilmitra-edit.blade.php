@extends('layouts-admin.master')
@section('content')

<div class="card">
    <div class="card-header bg-primary">
        <h6 class="mb-0 text-white">Edit Profil Mitra - {{$data->name}}
            <a href="{{url('admin/profilmitra')}}" class="btn btn-sm float-end btn-light">Kembali</a>
        </h6>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{url('admin/profilmitra/'.$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Nama lengkap</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$data->name}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{$data->username}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Ahli Waris</label>
                            <input type="text" class="form-control @error('ahli_waris') is-invalid @enderror" name="ahli_waris" value="{{$data->ahli_waris}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">NIK</label>
                            <input type="number" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{$data->nik}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Alamat</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{$data->alamat}}">
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{$data->tempat_lahir}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" value="{{$data->tgl_lahir}}">
                        </div>
                    </div>
                  
                </div>
                <div class="row">
                <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="form-label">email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$data->email}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="form-label">Kode Pos</label>
                            <input type="number" class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos" value="{{$data->kode_pos}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="form-label">No. HP</label>
                            <input type="number" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{$data->no_hp}}">
                        </div>
                    </div>
                </div>



                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Nama Rekening</label>
                            <input type="text" class="form-control @error('nama_rekening') is-invalid @enderror" name="nama_rekening" value="{{$data->nama_rekening}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Nomor Rekening</label>
                            <input type="number" class="form-control @error('no_rekening') is-invalid @enderror" name="no_rekening" value="{{$data->no_rekening}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                <center>
                        <img src="{{url('public/ktp/'.$data->foto_ktp)}}" alt="" style="width: 50%;">

                    </center>
                    <div class="form-group">
                        <label for="" class="form-label">Foto KTP</label>
                        <input type="file" class="form-control" name="foto_ktp" accept="image/*">
                    </div>
                </div>



                <button type="submit" class="btn btn-primary float-end mt-3">Update</button>

            </form>
        </div>
    </div>

</div>

@endsection