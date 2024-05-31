@extends('layouts-admin.master')
@section('content')

<div class="card">
    <div class="card-header bg-primary">
        <h6 class="mb-0 text-white">Edit GALERY
            <a href="{{url('admin/portfolio')}}" class="btn btn-sm float-end btn-light">Kembali</a>
        </h6>
    </div>
 
<div class="card">
    <div class="card-body">
        <form action="{{url('admin/portfolio/'.$id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

          <center>
          <img src="{{asset('public/portfolio/'.$data->foto)}}" width="50%" alt="">

          </center>

   
            <div class="form-group">
                <label for="" class="form-label">Foto</label>
                <input type="file" class="form-control" name="foto" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary float-end mt-3">Ubah</button>

        </form>
    </div>
</div>

</div>

@endsection