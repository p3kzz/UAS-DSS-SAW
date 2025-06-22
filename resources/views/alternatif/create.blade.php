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
                <form action="">
                    <div class="col-lg-6">
                        <div class="mt-3 mt-lg-0">
                            <div class="mb-3">
                                <label for="example-text-input" class="form-label">Alternatif</label>
                                <input class="form-control" type="text" placeholder="PT Makmur" id="example-text-input" name="alternatif">
                            </div>
                            <div class="mb-3">
                                <label for="example-text-input" class="form-label">Harga</label>
                                <input class="form-control" type="number" placeholder="10000" id="example-text-input" name="harga">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kualitas</label>
                                <select class="form-select" name="kualitas">
                                    <option value=" "> </option>
                                    <option value="100">Sangat Baik</option>
                                    <option value="75">Baik</option>
                                    <option value="50">Cukup</option>
                                    <option value="25">Buruk</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kecepatan Pengiriman</label>
                                <select class="form-select" name="kecepatan_pengiriman">
                                    <option value=" "> </option>
                                    <option value="100">Sangat Baik</option>
                                    <option value="75">Baik</option>
                                    <option value="50">Cukup</option>
                                    <option value="25">Buruk</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Konsistensi Pasokan</label>
                                <select class="form-select" >
                                    <option value=" "> </option>
                                    <option value="100">Sangat Baik</option>
                                    <option value="75">Baik</option>
                                    <option value="50">Cukup</option>
                                    <option value="25">Buruk</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kemudahan Komunikasi</label>
                                <select class="form-select">
                                    <option value=" "> </option>
                                    <option value="100">Sangat Baik</option>
                                    <option value="75">Baik</option>
                                    <option value="50">Cukup</option>
                                    <option value="25">Buruk</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" onclick="window.location.href='{{ route('alternatif') }}'"
                                class="btn btn-outline-danger">Batal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
