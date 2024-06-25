@extends('layouts-admin.master')
@section('content')

<div class="card">
    <div class="card-header bg-primary">
        <h6 class="mb-0 text-white">Monitoring Talas -{{$tanaman->no_sertifikat}}
            <a href="{{url('admin/tanaman')}}" class="btn btn-sm float-end btn-light">Kembali</a>
        </h6>
        <h6 class="mb-0 text-white">Nama Mitra :{{$u->name}}
            <!-- <a href="{{url('admin/monitoring-talas/create')}}" class="btn btn-sm float-end btn-light">Add</a> -->
        </h6>
    </div>
    <div class="card-body">

        <div class="table-responsive mt-3">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Status</th>
                        <th>Foto1</th>
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
                        <td>{{$item->judul}}</td>
                        <td>{{$item->status}}</td>
                        <td>
                            <img src="{{asset('public/monitoring-talas/'.$item->foto1)}}" width="50" alt="">
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
                            <a href="{{url('admin/monitoring-talas-pertanaman/'.$item->id)}}" class="btn btn-sm btn-primary">Edit</a>
                            <!-- <a href="{{url('admin/monitoring-talas/'.$item->id.'/delete')}}" class="btn btn-sm btn-danger">Delete</a> -->
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center">KOSONG</td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>

    </div>
</div>

@endsection