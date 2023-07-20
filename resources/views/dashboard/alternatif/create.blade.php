@extends('layouts.dashboard')
@section('title', 'Admin | Tambah Alternatif')
    
@section('content')
<div class="row">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Tambah Alternatif</h4>
               </div>
               <div class="card-body">
                    <form action="{{ route('alternatif.store') }}" method="POST">
                         @csrf
                         <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="alternatif" class="form-label">Alternatif</label>
                                   <input type="text" name="alternatif" id="alternatif" class="form-control @error('alternatif') is-invalid @enderror" placeholder="masukkan alternatif">
                                   @error('alternatif')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="C1" class="form-label">C1</label>
                                   <input type="number" name="C1" id="C1" class="form-control @error('C1') is-invalid @enderror" placeholder="masukkan C1">
                                   @error('C1')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="C2" class="form-label">C2</label>
                                   <input type="number" name="C2" id="C2" class="form-control @error('C2') is-invalid @enderror" placeholder="masukkan C2">
                                   @error('C2')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="C3" class="form-label">C3</label>
                                   <input type="number" name="C3" id="C3" class="form-control @error('C3') is-invalid @enderror" placeholder="masukkan C3">
                                   @error('C3')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="C4" class="form-label">C4</label>
                                   <input type="number" name="C4" id="C4" class="form-control @error('C4') is-invalid @enderror" placeholder="masukkan C4">
                                   @error('C4')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="C5" class="form-label">C5</label>
                                   <input type="number" name="C5" id="C5" class="form-control @error('C5') is-invalid @enderror" placeholder="masukkan C5">
                                   @error('C5')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <a href="{{ route('alternatif.index') }}" class="btn btn-secondary float-end ms-3">Kembali</a>
                                   <button class="btn btn-primary float-end">Tambah</button>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection