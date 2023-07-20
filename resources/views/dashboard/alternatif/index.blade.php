@extends('layouts.dashboard')
@section('title', 'Admin | Data Alternatif')
    
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
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between">
                    <h4>Data Alternatif</h4>
                    <a href="{{ route('alternatif.create') }}" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Alternatif</th>
                                    <th>C1</th>
                                    <th>C2</th>
                                    <th>C3</th>
                                    <th>C4</th>
                                    <th>C5</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no=1;
                                @endphp
                                @foreach ($alternatif as $a)
                                <tr>
                                    {{-- <td>{{ $no++ }}</td> --}}
                                    <td>{{ $a->alternatif }}</td>
                                    <td>{{ $a->C1 }}</td>
                                    <td>{{ $a->C2 }}</td>
                                    <td>{{ $a->C3 }}</td>
                                    <td>{{ $a->C4 }}</td>
                                    <td>{{ $a->C5 }}</td>
                                    <td width="14%">
                                        <a href="{{ route('alternatif.edit', $a->id) }}"
                                             class="btn btn-warning">
                                             <i class="fa-solid fa-pen-to-square"></i>
                                         </a>
                                         <form action="{{ route('alternatif.destroy', $a->id) }}') }}"
                                             method="POST" class="d-inline mb-1">
                                             @csrf
                                             @method('delete')
                                             <button type="submit" class="btn btn-danger"><i
                                                     class="fa-solid fa-trash"></i></button>
                                         </form>
                                   </td>
                                </tr>
                                @endforeach
                                <tr>
                                   <th>Nilai Minimum Awal</th>
                                   <th>{{ $minimum_C1 }}</th>
                                   <th>{{ $minimum_C2 }}</th>
                                   <th>{{ $minimum_C3 }}</th>
                                   <th>{{ $minimum_C4 }}</th>
                                   <th>{{ $minimum_C5 }}</th>
                                </tr>
                                <tr>
                                   <th>Nilai Maksimal Awal</th>
                                   <th>{{ $maxsimum_C1 }}</th>
                                   <th>{{ $maxsimum_C2 }}</th>
                                   <th>{{ $maxsimum_C3 }}</th>
                                   <th>{{ $maxsimum_C4 }}</th>
                                   <th>{{ $maxsimum_C5 }}</th>
                                </tr>
                                <tr>
                                   <th>Nilai Bobot</th>
                                   <th>{{ $bobot_C1 }}</th>
                                   <th>{{ $bobot_C2 }}</th>
                                   <th>{{ $bobot_C3 }}</th>
                                   <th>{{ $bobot_C4 }}</th>
                                   <th>{{ $bobot_C5 }}</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
     <div class="col-md-12">
         <div class="card shadow">
             <div class="card-header d-flex justify-content-between">
                 <h4>Hasil Perhitungan Nilai Utility</h4>
             </div>
             <div class="card-body">
                 <div class="table-responsive">
                     <table class="table table-bordered table-hover">
                         <thead>
                             <tr>
                                 <th>Alternatif</th>
                                 <th>C1</th>
                                 <th>C2</th>
                                 <th>C3</th>
                                 <th>C4</th>
                                 <th>C5</th>
                             </tr>
                         </thead>
                         <tbody>
                            {{-- @foreach ($alternatif as $a) --}}
                            <tr>
                                 <td>Angga Resta Rahma</td>
                                 <td>{{ $C1_angga }}</td>
                                 <td>{{ $C2_angga }}</td>
                                 <td>{{ $C3_angga }}</td>
                                 <td>{{ $C4_angga }}</td>
                                 <td>{{ $C5_angga }}</td>
                            </tr>
                            <tr>
                                <td>Anniza Rizana</td>
                                <td>{{ $C1_anniza }}</td>
                                <td>{{ $C2_anniza }}</td>
                                <td>{{ $C3_anniza }}</td>
                                <td>{{ $C4_anniza }}</td>
                                <td>{{ $C5_anniza }}</td>
                            </tr>
                            <tr>
                                <td>Donny Putra</td>
                                <td>{{ $C1_donny }}</td>
                                <td>{{ $C2_donny }}</td>
                                <td>{{ $C3_donny }}</td>
                                <td>{{ $C4_donny }}</td>
                                <td>{{ $C5_donny }}</td>
                            </tr>
                            <tr>
                                <td>Muhammad Reza</td>
                                <td>{{ $C1_muhammad }}</td>
                                <td>{{ $C2_muhammad }}</td>
                                <td>{{ $C3_muhammad }}</td>
                                <td>{{ $C4_muhammad }}</td>
                                <td>{{ $C5_muhammad }}</td>
                            </tr>
                            <tr>
                                <td>Naina Azzahra</td>
                                <td>{{ $C1_naina }}</td>
                                <td>{{ $C2_naina }}</td>
                                <td>{{ $C3_naina }}</td>
                                <td>{{ $C4_naina }}</td>
                                <td>{{ $C5_naina }}</td>
                            </tr>
                            {{-- @endforeach --}}
                            <tr>
                                <th>Nilai Minimum Awal</th>
                                <th>{{ $minimum_C1 }}</th>
                                <th>{{ $minimum_C2 }}</th>
                                <th>{{ $minimum_C3 }}</th>
                                <th>{{ $minimum_C4 }}</th>
                                <th>{{ $minimum_C5 }}</th>
                             </tr>
                             <tr>
                                <th>Nilai Maksimal Awal</th>
                                <th>{{ $maxsimum_C1 }}</th>
                                <th>{{ $maxsimum_C2 }}</th>
                                <th>{{ $maxsimum_C3 }}</th>
                                <th>{{ $maxsimum_C4 }}</th>
                                <th>{{ $maxsimum_C5 }}</th>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
        </div>
    </div>
    <div class="row mt-3 mb-3">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between">
                    <h4>Perhitungan Nilai Akhir</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Alternatif</th>
                                    <th>C1</th>
                                    <th>C2</th>
                                    <th>C3</th>
                                    <th>C4</th>
                                    <th>C5</th>
                                    <th>Hasil Akhir</th>
                                </tr>
                            </thead>
                            <tbody>
                               {{-- @foreach ($alternatif as $a) --}}
                               <tr>
                                    <td>Angga Resta Rahma</td>
                                    <td>{{ $NA_C1_angga }}00</td>
                                    <td>{{ $NA_C2_angga }}</td>
                                    <td>{{ $NA_C3_angga }}00</td>
                                    <td>{{ $NA_C4_angga }}</td>
                                    <td>{{ $NA_C5_angga }}00</td>
                                    <td>{{ $HA_angga }}00</td>
                               </tr>
                               <tr>
                                   <td>Anniza Rizana</td>
                                   <td>{{ $NA_C1_anniza }},000</td>
                                   <td>{{ $NA_C2_anniza }}</td>
                                   <td>{{ $NA_C3_anniza }}00</td>
                                   <td>{{ $NA_C4_anniza }}</td>
                                   <td>{{ $NA_C5_anniza }},000</td>
                                   <td>{{ $HA_anniza }}00</td>
                               </tr>
                               <tr>
                                   <td>Donny Putra</td>
                                   <td>{{ $NA_C1_donny }}00</td>
                                   <td>{{ $NA_C2_donny }},000</td>
                                   <td>{{ $NA_C3_donny }}00</td>
                                   <td>{{ $NA_C4_donny }}</td>
                                   <td>{{ $NA_C5_donny }}00</td>
                                   <td>{{ $HA_donny }}</td>
                               </tr>
                               <tr>
                                   <td>Muhammad Reza</td>
                                   <td>{{ $NA_C1_muhammad }},000</td>
                                   <td>{{ $NA_C2_muhammad }}0</td>
                                   <td>{{ $NA_C3_muhammad }}00</td>
                                   <td>{{ $NA_C4_muhammad }},000</td>
                                   <td>{{ $NA_C5_muhammad }},000</td>
                                   <td>{{ $HA_muhammad }}0</td>
                               </tr>
                               <tr>
                                   <td>Naina Azzahra</td>
                                   <td>{{ $NA_C1_naina }}00</td>
                                   <td>{{ $NA_C2_naina }}</td>
                                   <td>{{ $NA_C3_naina }},000</td>
                                   <td>{{ $NA_C4_naina }}0</td>
                                   <td>{{ $NA_C5_naina }}00</td>
                                   <td>{{ $HA_naina }}</td>
                               </tr>
                               {{-- @endforeach --}}
                               <tr>
                                   <th>Nilai Minimum Awal</th>
                                   <th>{{ $minimum_C1 }}</th>
                                   <th>{{ $minimum_C2 }}</th>
                                   <th>{{ $minimum_C3 }}</th>
                                   <th>{{ $minimum_C4 }}</th>
                                   <th>{{ $minimum_C5 }}</th>
                                </tr>
                                <tr>
                                   <th>Nilai Maksimal Awal</th>
                                   <th>{{ $maxsimum_C1 }}</th>
                                   <th>{{ $maxsimum_C2 }}</th>
                                   <th>{{ $maxsimum_C3 }}</th>
                                   <th>{{ $maxsimum_C4 }}</th>
                                   <th>{{ $maxsimum_C5 }}</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
           </div>
       </div>
 </div>
</div>
@endsection