@extends('adminlte::page')

@section('title', 'Home Page')

@section('content_header')
<div class="container-fluid">
</div>
@stop   

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-4 border">
            <div class="form-group">
                <div class="bg-primary p-2 mb-3 text-center">
                    <label for="penulis">Laporan Pasien</label>
                </div>
                <div class="row">
                    <div class="col-6">
                    <div class="form-group">
                    <label for="tahun"></label>
                            <select name="province" class="form-control">
                            <option value="">Sampai Saat Ini</option>
                            <option value="">Per Tinggal</option>
                            <option value="">Bulan</option>
                            <option value="">Tahun</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-outline-primary w-100">Pilih</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 border">
            <div class="form-group">
                <div class="bg-primary p-2 mb-3 text-center">
                    <label for="penulis">Laporan Dokter</label>
                </div>
                <div class="row">
                    <div class="col-6">
                    <div class="form-group">
                    <label for="tahun"></label>
                            <select name="province" class="form-control">
                            <option value="">Sampai Saat Ini</option>
                            <option value="">Per Tinggal</option>
                            <option value="">Bulan</option>
                            <option value="">Tahun</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-outline-primary w-100">Pilih</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 border">
            <div class="form-group">
                <div class="bg-primary p-2 mb-3 text-center">
                    <label for="penulis">Laporan User</label>
                </div>
                <div class="row">
                    <div class="col-6">
                    <div class="form-group">
                    <label for="tahun"></label>
                            <select name="province" class="form-control">
                            <option value="">Sampai Saat Ini</option>
                            <option value="">Per Tinggal</option>
                            <option value="">Bulan</option>
                            <option value="">Tahun</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-outline-primary w-100">Pilih</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-4 border">
            <div class="form-group">
                <div class="bg-success p-2 mb-3 text-center">
                    <label for="penulis">Laporan kamar</label>
                </div>
                <div class="row">
                    <div class="col-6">
                    <div class="form-group">
                    <label for="tahun"></label>
                            <select name="province" class="form-control">
                            <option value="">Sampai Saat Ini</option>
                            <option value="">Per Tinggal</option>
                            <option value="">Bulan</option>
                            <option value="">Tahun</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-outline-success w-100">Pilih</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 border">
            <div class="form-group">
                <div class="bg-success p-2 mb-3 text-center">
                    <label for="penulis">Laporan Spesialis</label>
                </div>
                <div class="row">
                    <div class="col-6">
                    <div class="form-group">
                    <label for="tahun"></label>
                            <select name="province" class="form-control">
                            <option value="">Sampai Saat Ini</option>
                            <option value="">Per Tinggal</option>
                            <option value="">Bulan</option>
                            <option value="">Tahun</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-outline-success w-100">Pilih</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>

<div class="container-fluid">
    <div class="row">
        <div class="col-4 border">
            <div class="form-group">
                <div class="bg-danger p-2 mb-3 text-center">
                    <label for="penulis">Laporan Hasil Periksa</label>
                </div>
                <div class="row">
                    <div class="col-6">
                    <div class="form-group">
                    <label for="tahun"></label>
                            <select name="province" class="form-control">
                            <option value="">Sampai Saat Ini</option>
                            <option value="">Per Tinggal</option>
                            <option value="">Bulan</option>
                            <option value="">Tahun</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-outline-danger w-100">Pilih</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 border">
            <div class="form-group">
                <div class="bg-danger p-2 mb-3 text-center">
                    <label for="penulis">Laporan Perawatan</label>
                </div>
                <div class="row">
                    <div class="col-6">
                    <div class="form-group">
                    <label for="tahun"></label>
                            <select name="province" class="form-control">
                            <option value="">Sampai Saat Ini</option>
                            <option value="">Per Tinggal</option>
                            <option value="">Bulan</option>
                            <option value="">Tahun</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-outline-danger w-100">Pilih</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 border">
            <div class="form-group">
                <div class="bg-danger p-2 mb-3 text-center">
                    <label for="penulis">Laporan Pembayaran</label>
                </div>
                <div class="row">
                    <div class="col-6">
                    <div class="form-group">
                    <label for="tahun"></label>
                            <select name="province" class="form-control">
                            <option value="">Sampai Saat Ini</option>
                            <option value="">Per Tinggal</option>
                            <option value="">Bulan</option>
                            <option value="">Tahun</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-outline-danger w-100">Pilih</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection