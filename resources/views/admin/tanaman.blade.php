@extends('layouts-admin.master')
@section('content')

<div class="card">
    <div class="card-header bg-primary">
        <h6 class="mb-0 text-white">Tanaman
            <a href="{{url('admin/tanaman/create')}}" class="btn btn-sm float-end btn-light">Add</a>
        </h6>
    </div>
    <div class="card-body">

        <div class="table-responsive mt-3">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Mitra</th>
                        <th>Nama Tanaman</th>
                        <th>Nomor Sertifikat</th>
                        <th>Nomor Registrasi</th>
                        <th>Aksi</th>
                        <th>Monitoring</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->nama_tanaman}}</td>
                        <td>{{$item->no_sertifikat}}</td>
                        <td>{{$item->no_registrasi}}</td>
                        <td>
                            <a href="{{url('admin/tanaman/'.$item->id.'/edit')}}" class="btn btn-sm btn-primary" style=" margin-bottom: 5px;">Edit</a>
                            <a href="{{url('admin/tanaman/'.$item->id.'/delete')}}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                        <td>
                            @if (in_array($item->id, $m))
                            <a href="{{url('admin/monitoring-talas/'.$item->id)}}" class="btn btn-sm btn-primary">Monitoring</a>
                            @else
                            <a href="{{url('admin/create-monitoring-tanaman/'.$item->id)}}" class="btn btn-sm btn-primary" style=" margin-bottom: 5px;">+</a>

                            @endif

                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center">KOSONG</td>
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