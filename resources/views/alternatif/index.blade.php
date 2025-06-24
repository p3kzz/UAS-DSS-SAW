@extends('layout.main')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            @if (isset($kategori))
                                <h4 class="mb-sm-0 font-size-18">Data Alternatif - {{ $kategori->nama_kategori }} </h4>
                            @endif
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
                                @if (isset($kategori))
                                    <button type="button"
                                        onclick="window.location.href='{{ route('create_alternatif', $kategori->id) }}'"
                                        class="btn btn-primary">Tambah Alternatif</button>
                                @endif
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
                                        @foreach ($alternatifs as $index => $item)
                                            <tr>
                                                <td scope="row">{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama_alternatif }}</td>
                                                <td>{{ $item->harga }}</td>
                                                <td>{{ $item->kualitas }}</td>
                                                <td>{{ $item->kecepatan_pengiriman }}</td>
                                                <td>{{ $item->konsistensi_pasokan }}</td>
                                                <td>{{ $item->kemudahan_komunikasi }}</td>
                                                <td>
                                                    <a href="/alternatif/{{ $item->id }}/edit"><i
                                                            class="dripicons-pencil"></i></a>
                                                    <a href="/alternatif/{{ $item->id }}/hapus"><i
                                                            class="text-red-500 dripicons-trash"></i></a>
                                                </td>

                                            </tr>
                                        @endforeach
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
