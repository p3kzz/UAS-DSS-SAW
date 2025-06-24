@extends('layout.main')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">DataTables</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <button type="button" onclick="window.location.href='{{ route('create-kategori') }}'"
                                    class="btn btn-primary waves-effect waves-light">Tambah Kategori</button>
                            </div>
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>Aksi</th>
                                            <th>Show</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kategori as $item)
                                            <tr>
                                                <td scope="row">{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama_kategori }}</td>
                                                <td>
                                                    <a href="/kategori/{{ $item->id }}/edit"><i
                                                            class="dripicons-pencil"></i></a>
                                                    <a href="/kategori/{{ $item->id }}/hapus"><i
                                                            class="text-red-500 dripicons-trash"></i></a>

                                                </td>
                                                <td><a href="{{ route('alternatif.kategori', $item->id) }}"><i
                                                            class="mdi mdi-eye"></i></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
@endsection
