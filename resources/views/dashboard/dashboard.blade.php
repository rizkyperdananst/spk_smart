@extends('layouts.dashboard')
@section('title', 'Admin | Dashboard')
    
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<div class="row mb-3">
    <div class="col-md-12">
        <div class="alert alert-success mt-2 mb-2 p-2">
            <h5>Selamat Datang {{ Auth::user()->name }} di Halaman Dashboard !</h5>
        </div>
    </div>
</div>

@endsection