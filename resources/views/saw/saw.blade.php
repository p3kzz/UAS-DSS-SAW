@extends('layout.main')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- Title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Proses SAW</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{ route('index_saw') }}">SAW</a></li>
                                    <li class="breadcrumb-item active">Hasil</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Tabel Alternatif --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Data Alternatif</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            @foreach ($kriterias as $kriteria)
                                                <th>{{ $kriteria->kode }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alternatifs as $index => $alt)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $alt->nama_alternatif }}</td>
                                                @foreach ($kriterias as $kriteria)
                                                    <td>{{ $alt[$kriteria->nama_kriteria] }}</td>
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Tabel Normalisasi --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Normalisasi</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            @foreach ($kriterias as $kriteria)
                                                <th>{{ $kriteria->kode }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alternatifs as $index => $alt)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $alt->nama_alternatif }}</td>
                                                @foreach ($kriterias as $kriteria)
                                                    <td>{{ number_format($normalisasi[$alt->id][$kriteria->id], 4) }}</td>
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Tabel Nilai Akhir --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Nilai Akhir & Ranking</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Ranking</th>
                                            <th>Nama</th>
                                            <th>Skor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = collect($preferensi)->sortDesc();
                                            $rank = 1;
                                        @endphp
                                        @foreach ($ranking as $altId => $score)
                                            <tr>
                                                <td>{{ $rank++ }}</td>
                                                <td>{{ $alternatifs->firstWhere('id', $altId)->nama_alternatif }}</td>
                                                <td>{{ number_format($score, 4) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- container-fluid -->
        </div>
    </div>
@endsection
