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
                <form action="{{ route('alternatif.tambah') }}" method="POST">
                    @csrf
                    <input type="hidden" name="kriteria_id" value="{{ $kategori->id }}">

                    <div class="mb-3">
                        <label class="form-label">Alternatif</label>
                        <input class="form-control" type="text" name="nama_alternatif" placeholder="PT Makmur">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input class="form-control" type="number" name="harga" placeholder="10000">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kualitas</label>
                        <select class="form-select" name="kualitas">
                            <option value="100">Sangat Baik</option>
                            <option value="75">Baik</option>
                            <option value="50">Cukup</option>
                            <option value="25">Buruk</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kecepatan Pengiriman</label>
                        <select class="form-select" name="kecepatan_pengiriman">
                            <option value="100">Sangat Baik</option>
                            <option value="75">Baik</option>
                            <option value="50">Cukup</option>
                            <option value="25">Buruk</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Konsistensi Pasokan</label>
                        <select class="form-select" name="konsistensi_pasokan">
                            <option value="100">Sangat Baik</option>
                            <option value="75">Baik</option>
                            <option value="50">Cukup</option>
                            <option value="25">Buruk</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kemudahan Komunikasi</label>
                        <select class="form-select" name="kemudahan_komunikasi">
                            <option value="100">Sangat Baik</option>
                            <option value="75">Baik</option>
                            <option value="50">Cukup</option>
                            <option value="25">Buruk</option>
                        </select>
                    </div>
                    <input type="hidden" name="kategori_id" value="{{ $kategori->id }}">


                    <div class="col-sm-auto">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('alternatif.kategori', $kategori->id) }}" class="btn btn-outline-danger">Batal</a>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
