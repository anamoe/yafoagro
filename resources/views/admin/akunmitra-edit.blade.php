@extends('layouts-admin.master')
@section('content')

<div class="card">
    <div class="card-header bg-primary">
        <h6 class="mb-0 text-white">Edit Akun Mitra
            <a href="{{url('admin/akunmitra')}}" class="btn btn-sm float-end btn-light">Kembali</a>
        </h6>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{url('admin/akunmitra/'.$user->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')


                <div class="form-group">
                    <label for="" class="form-label">Nama</label>
                    <input type="text" value="{{$user->name}}" class="form-control @error('name') is-invalid @enderror" name="name">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Username</label>
                    <input type="text" value="{{$user->username}}" class="form-control @error('username') is-invalid @enderror" name="username">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>


                <button type="submit" class="btn btn-primary float-end mt-3">Update</button>

            </form>
        </div>
    </div>

</div>

@endsection