@extends('layout.main')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Kriteria</h4>

                            <div class="page-title-right">
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tabel Kriteria</h4>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Kriteria</th>
                                                <th>Kode</th>
                                                <th>Bobot</th>
                                                <th>Tipe</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kriterias as $kriteria)
                                            <tr data-id="1">
                                                <td data-field="id" style="width: 80px">{{ $kriteria->id }}</td>
                                                <td data-field="name">{{ $kriteria->nama_kriteria }}</td>
                                                <td data-field="age">{{ $kriteria->kode }}</td>
                                                <td data-field="gender">{{ $kriteria->bobot }}</td>
                                                <td data-field="gender">{{ $kriteria->tipe }}</td>
                                            </tr>

                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
@endsection
