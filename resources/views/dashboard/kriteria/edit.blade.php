@extends('layouts.dashboard')
@section('title', 'Admin | Edit Kriteria')
    
@section('content')
<div class="row">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Edit Kriteria</h4>
               </div>
               <div class="card-body">
                    <form action="{{ route('kriteria.update', $k->id) }}" method="POST">
                         @csrf
                         @method('put')
                         <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="alternatif_kriteria" class="form-label">Alternatif Kriteria</label>
                                   <input type="text" name="alternatif_kriteria" value="{{ $k->alternatif_kriteria }}" id="alternatif_kriteria" class="form-control @error('alternatif_kriteria') is-invalid @enderror" placeholder="masukkan alternatif kriteria">
                                   @error('alternatif_kriteria')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="bobot_awal" class="form-label">Bobot Awal</label>
                                   <input type="number" name="bobot_awal" value="{{ $k->bobot_awal }}" id="bobot_awal" class="form-control @error('bobot_awal') is-invalid @enderror" placeholder="masukkan bobot awal">
                                   @error('bobot_awal')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <label for="deskripsi_kriteria" class="form-label">Deskripsi Kriteria</label>
                                   <textarea name="deskripsi_kriteria" id="deskripsi_kriteria" cols="30" rows="5" class="form-control @error('deskripsi_kriteria') is-invalid @enderror" placeholder="masukkan deskripsi kriteria">{{ $k->deskripsi_kriteria }}</textarea>
                                   @error('deskripsi_kriteria')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <a href="{{ route('kriteria.index') }}" class="btn btn-secondary float-end ms-3">Kembali</a>
                                   <button class="btn btn-primary float-end">Update</button>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection