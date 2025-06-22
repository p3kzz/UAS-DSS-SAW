@extends('layout.main')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Proses SAW</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{ route('index_saw') }}">Kategori</a></li>
                                    <li class="breadcrumb-item active">Kategori</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- alternatif --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                               <h5>Alternatif</h5>
                            </div>
                            <div class="card-body">
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
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
                                        <tr>
                                            <td>1</td>
                                            <td>PT.satudua</td>
                                            <td>20</td>
                                            <td>30</td>
                                            <td>1</td>
                                            <td>51</td>
                                            <td>91</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end cardaa -->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                {{-- normalisasi --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                               <h5>Normalisasi</h5>
                            </div>
                            <div class="card-body">
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
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
                                        <tr>
                                            <td>1</td>
                                            <td>PT.satudua</td>
                                            <td>20</td>
                                            <td>30</td>
                                            <td>1</td>
                                            <td>51</td>
                                            <td>91</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end cardaa -->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                {{-- nilai akhir --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Nilai Akhir</h5>
                            </div>
                            <div class="card-body">
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Rangking</th>
                                            <th>Nama</th>
                                            <th>Score</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>PT.satudua</td>
                                            <td>20</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end cardaa -->
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
    </div>
@endsection
