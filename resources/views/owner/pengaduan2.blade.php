@extends('owner.navbar2')

@section('content')
<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/owner">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
        </ol>
        <div class="card mt-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Data Pengaduan User</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="header text-center thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Uraian Pengaduan</th>
                                <th scope="col">Nama Bus</th>
                                <th scope="col">Plat Nomor Bus</th>
                                <th scope="col">Bus Jurusan</th>
                                <th scope="col">Waktu Kejadian</th>
                                <th scope="col">Lampiran (Foto)</th>
                                <th scope="col">Rating Bus</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pengaduan as $p)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $p->judul }}</td>
                                <td>{{ $p->uraian }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->nomor }}</td>
                                <td>{{ $p->tempat }}</td>
                                <td>{{ $p->waktu }}</td>
                                <td><img src="{{ URL::to('/') }}/foto/{{ $p->foto }}" class="img-fluid" style="max-width: 100px; height: 50px"></td>
                                <td class="text-warning" style="font-size: 20px">{{ $p->rating }}</td>
                                <td>{{ $p->status }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection