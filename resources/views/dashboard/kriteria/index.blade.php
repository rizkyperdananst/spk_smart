@extends('layouts.dashboard')
@section('title', 'Admin | Data Kriteria')
    
@section('content')
<div class="container mt-5">
    <div class="row mb-2">
        <div class="col-md-12">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between">
                    <h4>Data Kriteria</h4>
                    <a href="{{ route('kriteria.create') }}" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Alternatif Kriteria</th>
                                    <th>Deskripsi Kriteria</th>
                                    <th>Bobot Awal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no=1;
                                @endphp
                                @foreach ($kriteria as $k)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $k->alternatif_kriteria }}</td>
                                    <td>{{ $k->deskripsi_kriteria }}</td>
                                    <td>{{ $k->bobot_awal }}</td>
                                    <td width="14%">
                                        <a href="{{ route('kriteria.edit', $k->id) }}"
                                             class="btn btn-warning">
                                             <i class="fa-solid fa-pen-to-square"></i>
                                         </a>
                                         <form action="{{ route('kriteria.destroy', $k->id) }}"
                                             method="POST" class="d-inline mb-1">
                                             @csrf
                                             @method('delete')
                                             <button type="submit" class="btn btn-danger"><i
                                                     class="fa-solid fa-trash"></i></button>
                                         </form>
                                   </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="3" class="text-center">Total</th>
                                    <th>{{ $total_bobot_awal }}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection