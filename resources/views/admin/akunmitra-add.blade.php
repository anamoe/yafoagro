@extends('layouts-admin.master')
@section('content')

<div class="card">
    <div class="card-header bg-primary">
        <h6 class="mb-0 text-white">Add Akun Mitra
            <a href="{{url('admin/akunmitra')}}" class="btn btn-sm float-end btn-light">Kembali</a>
        </h6>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{url('admin/akunmitra')}}" method="post" enctype="multipart/form-data">
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
                    <label for="" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                </div>


                <button type="submit" class="btn btn-primary float-end mt-3">Tambah</button>

            </form>
        </div>
    </div>

</div>

@endsection