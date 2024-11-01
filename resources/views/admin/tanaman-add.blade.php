@extends('layouts-admin.master')
@section('content')

<div class="card">
    <div class="card-header bg-primary">
        <h6 class="mb-0 text-white">Add Tanaman
            <a href="{{url('admin/tanaman')}}" class="btn btn-sm float-end btn-light">Kembali</a>
        </h6>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{url('admin/tanaman')}}" method="post" enctype="multipart/form-data">
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
                    <label for="" class="form-label">Nama Tanaman</label>
                    <select name="nama_tanaman" class="form-control">
                        <option value="Talas">Talas</option>
                        <option value="Alpukat">Alpukat</option>
                        <!-- <option value="Alpukat">Alpukat</option> -->
                    </select>

                </div>
                <!-- <div class="form-group">
                    <label for="" class="form-label">Nama Tanaman</label>
                    <input type="text" class="form-control @error('nama_tanaman') is-invalid @enderror" name="nama_tanaman">
                </div> -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Nomor Sertifikat</label>
                            <input type="text" class="form-control @error('no_sertifikat') is-invalid @enderror" name="no_sertifikat">
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="" class="form-label">Nomor Registrasi</label>
                            <input type="text" class="form-control @error('no_registrasi') is-invalid @enderror" name="no_registrasi">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Nomor ID Pemilik</label>
                            <input type="text" class="form-control @error('no_id_pemilik') is-invalid @enderror" name="no_id_pemilik">
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="" class="form-label">Nomor Approval</label>
                            <input type="text" class="form-control @error('no_approval') is-invalid @enderror" name="no_approval">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="" class="form-label">Alamat Cluster</label>
                    <input type="text" class="form-control @error('alamat_cluster') is-invalid @enderror" name="alamat_cluster">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Kode Area</label>
                            <input type="text" class="form-control @error('kode_area') is-invalid @enderror" name="kode_area">
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
                            <label for="" class="form-label">Jumlah Bibit</label>
                            <input type="number" class="form-control @error('jumlah_bibit') is-invalid @enderror" name="jumlah_bibit">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Kemitraan </label>
                            <input type="text" class="form-control @error('kemitraan') is-invalid @enderror" name="kemitraan" id="kemitraan">
                        </div>
                        <div>
                            <p> <span id="formattedRupiah">Rp. 0</span></p>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Bukti Transfer </label>
                            <input type="file" class="form-control" name="bukti_transfer" accept="*\image">
                        </div>
                       
                    </div>
                </div>

                <button type="submit" class="btn btn-primary float-end mt-3">Tambah</button>

            </form>
        </div>
    </div>

</div>

@endsection
@push('js')
<script>
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }

        document.getElementById('kemitraan').addEventListener('keyup', function(e) {
            var formattedValue = formatRupiah(this.value, 'Rp. ');
            // this.value = formattedValue;
            document.getElementById('formattedRupiah').innerText = formattedValue;
        });
    </script>

@endpush