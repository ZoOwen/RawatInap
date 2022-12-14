@extends('adminlte::page')

@section('title', 'Home Page')

@section('content_header')
<h1 class="m-0 text-dark">Form Pendaftaran</h1>
@stop   

@section('content')
<div class="container-fluid">
    <div class="card card-default">
            <div class="form-group border">
                <div class="bg-primary p-2 mb-3 text-center">
                <label for="penulis">FORM PENDAFTARAN</label>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tahun">Nama Pasien</label>
                            <input type="text"class="form-control" name="penulis" id="penulis" required/>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <label for="tahun">Umur Pasien</label>
                            <input type="text"class="form-control" name="penulis" id="penulis" required/>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <label for="tahun">Tanggal Lahir Pasien</label>
                            <input type="date"class="form-control" name="penulis" id="penulis" required/>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <label for="tahun">No Telp Pasien</label>
                            <input type="text"class="form-control" name="penulis" id="penulis" required/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                    <label for="penulis">Alamat</label>
                    <textarea type="text" class="form-control" name="description" value="{{}}"></textarea>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                        <label for="tahun">Daftar Pasien</label>
                            <select name="province" class="form-control">
                            <option value="">Pilih Jenis Kelamin....</option>
                            <option value="">Laki - Laki</option>
                            <option value="">Perempuan</option>
                            </select>
                        </div> 
                    </div>
                </div>
            <div class="modal-footer">
                    <div class="mr-auto">
                        <button type="submit" class="btn btn-success mr-auto">Simpan Data</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection