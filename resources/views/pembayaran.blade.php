@extends('adminlte::page')

@section('title', 'Home Page')

@section('content_header')
<div class="container-fluid">
    <div class="alert alert-primary text-center" role="alert">
    This is Sparta
    </div>
</div>
@stop   

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-3 border">
            <div class="form-group">
                <div class="bg-primary p-2 mb-3 text-center">
                    <label for="penulis">Cek Kode</label>
                </div>
                <label for="penulis">Kode Data Pasien</label>
                <input type="text"class="form-control" name="penulis" id="penulis" required/>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-outline-success mr-auto">Cek Kode</button>
            </div>
        </div>
        <div class="col-9 border">
            <div class="form-group">
                <div class="bg-primary p-2 mb-3 text-center">
                <label for="penulis">Pembayaran</label>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label for="tahun">Jenis Tindakan</label>
                <input type="text"class="form-control" name="penulis" id="penulis" required/>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="tahun">Biaya Periksa</label>
                            <select name="province" class="form-control">
                            <option value="">Pilih Jenis Ketentuan ...</option>
                            <option value="">Dirawat</option>
                            <option value="">Tidak Dirawat</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="tahun">Biaya Inap (bila dirawat)</label>
                            <input type="text"class="form-control" name="penulis" id="penulis" required/>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="tahun">Total</label>
                            <input type="text"class="form-control" name="penulis" id="penulis" disabled/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="mr-auto">
                    <button type="submit" class="btn bg-success mr-auto">Simpan Data</button>
                    <button type="submit" class="btn btn-primary mr-auto">Cetak Data</button>
                    <button type="submit" class="btn  btn-outline-primary mr-auto">Tampilkan</button>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container-fluid">
<div class="row">
        <div class="col-3 border">
            <div class="form-group">
                <div class="bg-primary p-2 mb-3 text-center">
                    <label for="penulis">Data Pasien</label>
                </div>
                <p>Id Pasien : <B></B> </p>
                <p>Nama Pasien : <B></B> </p>
                <p>Umur Pasien : <B></B> </p>
                <p>Tanggal Lahir Pasien : <B></B> </p>
                <p>Alamat Pasien : <B></B> </p>
                <p>Notelp Pasien : <B></B> </p>
                <p>Gender Pasien :  <B></B> </p>
            </div>
        </div>
        <div class="col-9 border">
        <div class="form-group">
                <div class="bg-primary p-2 mb-3 text-center">
                    <label for="penulis">Data Pasien</label>
                </div>
                <label for="penulis">Detail Pasien</label>
                <br>
                <hr>
                <p>Keterangan Dokter :</p>
                <label for="penulis">Pasien ini inap seminggu we lah </label>
        </div>
    </div>
</div>
@endsection