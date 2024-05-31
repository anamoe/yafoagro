@extends('layouts-admin.master')
@section('content')

<div class="card">
    <div class="card-header bg-primary">
        <h6 class="text-white">Tentang Kami</h6>
    </div>
    <div class="card-body">

        <form action="{{url('admin/tentangkami/'.$about->id)}}" method="post" enctype="multipart/form-data"   >
            @csrf
            @method('patch')
            <br>
            <img src="{{url('public/tentangkami')}}/{{$about->foto}}" style="height:100%" width="100%">
            <div class="form-group mt-4 mb-2">
         

                <label for="">Gambar</label>
                <input type="file" name="foto" class="form-control" accept="image/*">
            </div>
            <div class="form-group">
                <label for="deskripsi">ISI</label>
                <textarea name="isi" id="isi" cols="30" rows="10" class="form-control @error('isi') is-invalid @enderror">{{ old('deskripsi', $about->isi) }}</textarea>
                @error('deskripsi')
                <div class="invalid-feedback">{{ $isi }}</div>
                @enderror
            </div>


            <button class="btn btn-primary mt-4">Simpan</button>
        </form>
        
    </div>
</div>

@endsection