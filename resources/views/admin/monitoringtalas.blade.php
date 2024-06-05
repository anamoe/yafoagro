@extends('layouts-admin.master')
@section('content')

<div class="card">
    <div class="card-header bg-primary">
        <h6 class="mb-0 text-white">Monitoring Talas
            <a href="{{url('admin/monitoring-talas/create')}}" class="btn btn-sm float-end btn-light">Add</a>
        </h6>
    </div>
    <div class="card-body">

        <div class="table-responsive mt-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Tanaman</th>
                        <th>No Sertifikat</th>
                        <th>Nama Mitra</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Foto</th>
                        <th>Foto2</th>
                        <th>Foto3</th>
                        <th>Foto4</th>
                        <th>Foto5</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->nama_tanaman}}</td>
                        <td>{{$item->no_sertifikat}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->judul}}</td>
                        <td>{{$item->tanggal}}</td>
                        <td>
                            <img src="{{asset('public/monitoring-talas/'.$item->foto)}}" width="50" alt="">
                        </td>
                        <td>
                            <img src="{{asset('public/monitoring-talas/'.$item->foto2)}}" width="50" alt="">
                        </td>
                        <td>
                            <img src="{{asset('public/monitoring-talas/'.$item->foto3)}}" width="50" alt="">
                        </td>
                        <td>
                            <img src="{{asset('public/monitoring-talas/'.$item->foto4)}}" width="50" alt="">
                        </td>
                        <td>
                            <img src="{{asset('public/monitoring-talas/'.$item->foto5)}}" width="50" alt="">
                        </td>
                        <td>
                            <a href="{{url('admin/monitoring-talas/'.$item->id.'/edit')}}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{url('admin/monitoring-talas/'.$item->id.'/delete')}}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
        
    </div>
</div>

@endsection