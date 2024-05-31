@extends('layouts-admin.master')
@section('content')

<div class="card">
    <div class="card-header bg-primary">
        <h6 class="mb-0 text-white">Add Profil Mitra
            <a href="{{url('admin/profilmitra')}}" class="btn btn-sm float-end btn-light">Kembali</a>
        </h6>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{url('admin/profilmitra')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="form-label">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username">
                        </div>
                    </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                    </div>
                </div>
        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="form-label">NIK</label>
                    <input type="number" class="form-control @error('nik') is-invalid @enderror" name="nik">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="form-label">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat">
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir">
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="form-label">Kode Pos</label>
                    <input type="number" class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="form-label">No. HP</label>
                    <input type="number" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp">
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="form-label">Ahli Waris</label>
                    <input type="text" class="form-control @error('ahli_waris') is-invalid @enderror" name="ahli_waris">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="form-label">Luas Lahan (ha)</label>
                    <input type="number" class="form-control @error('luas_lahan') is-invalid @enderror" name="luas_lahan">
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="form-label">Nama Rekening</label>
                    <input type="text" class="form-control @error('nama_rekening') is-invalid @enderror" name="nama_rekening">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="form-label">Nomor Rekening</label>
                    <input type="number" class="form-control @error('no_rekening') is-invalid @enderror" name="no_rekening">
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="form-label">Bibit </label>
                    <input type="number" class="form-control @error('bibit') is-invalid @enderror" name="bibit">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="form-label">Kemitraan </label>
                    <input type="number" class="form-control @error('kemitraan') is-invalid @enderror" name="kemitraan">
                </div>
            </div>
        </div>



        <div class="row">


            <div class="form-group">
                <label for="" class="form-label">Bukti Transfer</label>
                <input type="file" class="form-control @error('bukti_transfer') is-invalid @enderror" name="bukti_transfer" accept="image/*">
            </div>
        </div>



        <button type="submit" class="btn btn-primary float-end mt-3">Tambah</button>

        </form>
    </div>
</div>

</div>

@endsection