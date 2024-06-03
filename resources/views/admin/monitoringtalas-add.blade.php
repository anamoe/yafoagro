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
                    <select name="user_id" id="user_id" class="form-control">
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>

                </div>

                
            <div class="form-group mt-4">
                <label for="tanaman_ids" class="form-label">Daftar Tanaman</label>
                <select name="tanaman_id" id="tanaman_ids" class="form-control" >
                  
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

@push('js')
<script>
        $(document).ready(function() {
            $('#user_id').change(function() {
                var user_id = $(this).val();
                if (user_id) {
                    $.ajax({
                        url: '{{url('/tanaman/')}}'+'/' + user_id,
                        type: 'GET',
                        success: function(response) {
                            var tanamanSelect = $('#tanaman_ids');
                            tanamanSelect.empty();
                            if (response.length > 0) {
                                $.each(response, function(index, tanaman) {
                                    tanamanSelect.append('<option value="' + tanaman.id + '">' + tanaman.nama_tanaman +tanaman.no_sertifikat+ '</option>');
                                });
                            } else {
                                tanamanSelect.append('<option value="">Tidak ada tanaman yang ditemukan.</option>');
                            }
                        }
                    });
                } else {
                    $('#tanaman_ids').empty();
                }
            });
        });
    </script>

@endpush