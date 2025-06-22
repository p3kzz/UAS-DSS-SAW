@extends('layout.main')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Data Alternatif - kategori</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{ route('kategori') }}">Kategori</a></li>
                                    <li class="breadcrumb-item active">Kategori</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                 <button type="button" onclick="window.location.href='{{ route('create_alternatif') }}'" class="btn btn-primary waves-effect waves-light">Tambah Alternatif</button>
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
                                            <th>Aksi</th>
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
                                            <td>aksi</td>
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
