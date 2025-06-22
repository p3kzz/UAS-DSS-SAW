@extends('layout.main')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Forms</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <form action="">
                                    {{-- <h4 class="card-title">Form Kategori</h4> --}}
                                    <div class="col-lg-6">
                                        <div class="mt-3 mt-lg-0">
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Kategori</label>
                                                <input class="form-control" type="text"
                                                    id="example-text-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="reset" onclick="window.location.href='{{ route('kategori') }}'"
                                            class="btn btn-outline-danger">Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection
