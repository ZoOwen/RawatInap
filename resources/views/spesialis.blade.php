@extends('adminlte::page')

@section('title', 'Home Page')

@section('content_header')
<h1 class="m-0 text-dark">Data spesialis</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="card card-default">
    <div class="card-body">
            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahBukuModal" id="createNewSpesialis">
                <i class="fa fa-plus">  Tambah Data</i>
            </button>
            <hr>
            <table id="table-data" class="table table-bordered">
                <thead>
                    <div class="modal fade" id="tambahBukuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class= "modal-title" id="exampleModalLabel">Tambah Data Spesialis </5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form  id="spesialisForm" name="spesialisForm" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                        <label for="nama_spesialis">Nama Spesialis</label>
                                            <input type="text"class="form-control" name="nama_spesialis" id="nama_spesialis" required/>
                                        <label for="tanggal">Tanggal </label>
                                            <input type="date" class="form-control" name="tanggal" id="tanggal" required/>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Kirim</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </thead>
            </table>
        </div>
            <table id="table-data" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>NO</th>
                        <th>Id Spesialis</th>
                        <th>Nama Spesialis</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @php
                    
                        $no=1;
                    @endphp
                    @foreach ( $spesialis as $spesialiss )
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$spesialiss->id_spesialis}}</td>
                            <td>{{$spesialiss->nama_spesialis}}</td>
                            <td>{{$spesialiss->tanggal}}</td>
                             <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" id="btn-edit-buku" class="btn btn-success editSpesialis" data-toggle="modal"  data-id={{$spesialiss -> id_spesialis}}>
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger" onclick="deleteConfirmation('' )">
                                        Hapus
                                    </button>
                                </div>
                            </td>
                <tbody>
                    @endforeach
                    <!-- <tr>
    
                           
                        </tr> -->
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="editBukuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times; </span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post"  enctype="multipart/form-data">
                    @csrf
                    @method ('PATCH')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="edit-penerbit">Nama Spesialis</label>
                                <input type="text" class="form-control" name="penerbit" id="edit-penerbit" required/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" id="edit-id"/>
                    <input type="hidden" name="old_cover" id="edit-old-cover"/>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');
      
        $.ajax({
          data: $('#spesialisForm').serialize(),
          url: "{{ route('spesialis.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
       
              $('#spesialisForm').trigger("reset");
              $('#tambahBukuModal').modal('hide');
              table.draw();
           
          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });
    

$('#createNewSpesialis').click(function () {
        $('#saveBtn').val("create-product");
        $('#product_id').val('');
        $('#spesialisForm').trigger("reset");
        $('#modelHeading').html("Create New Product");
        $('#tambahBukuModal').modal('show');
    });


    $('body').on('click', '.editSpesialis', function () {
      var product_id = $(this).data('id');
      $.get("{{ route('spesialis.index') }}" +'/' + product_id +'/edit', function (data) {
          $('#saveBtn').val("edit-user");
          $('#exampleModalLabel').val("Edit Spesialis")
          $('#tambahBukuModal').modal('show');
        //   $('#product_id').val(data.id);
          $('#nama_spesialis').val(data.nama_spesialis);
        //   $('#detail').val(data.detail);
      })
    });


</script>
<!-- @extends('adminlte::page')

@section('title', 'Home Page')

@section('content_header')
<h1 class="m-0 text-dark">Data spesialis</h1>
@stop   

@section('content')
<div class="container-fluid">
    <div class="card card-default">
    <div class="card-body">
            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahBukuModal">
                <i class="fa fa-plus">  Tambah Data</i>
            </button>
            <hr>
            <table id="table-data" class="table table-bordered">
                <thead>
                    <div class="modal fade" id="tambahBukuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class= "modal-title" id="exampleModalLabel">Tambah Data Pasien </5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                        <label for="penulis">Nama Spesialis</label>
                                            <input type="text"class="form-control" name="penulis" id="penulis" required/>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </thead>
            </table>
        </div>
            <table id="table-data" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>NO</th>
                        <th>Id Spesialis</th>
                        <th>Nama Spesialis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                            <td></td> 
                            <td></td> 
                            <td></td> 
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example"> 
                                    <button type="button" id="btn-edit-buku" class="btn btn-success" data-toggle="modal" data-target="#editBukuModal">
                                        Edit
                                    </button> 
                                    <button type="button" class="btn btn-danger" onclick="deleteConfirmation('' )">
                                        Hapus
                                    </button>
                                </div>
                            </td> 
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="editBukuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
    <div class="modal-dialog modal-lg"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Buku</h5> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                    <span aria-hidden="true">&times; </span> 
                </button> 
            </div> 
            <div class="modal-body"> 
                <form method="post"  enctype="multipart/form-data"> 
                    @csrf
                    @method ('PATCH')
                    <div class="row"> 
                        <div class="col-md-6"> 
                            <div class="form-group"> 
                                <label for="edit-penerbit">Nama Spesialis</label> 
                                <input type="text" class="form-control" name="penerbit" id="edit-penerbit" required/> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
                <div class="modal-footer"> 
                    <input type="hidden" name="id" id="edit-id"/> 
                    <input type="hidden" name="old_cover" id="edit-old-cover"/> 
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button> 
                    <button type="submit" class="btn btn-success">Update</button> 
                </form> 
            </div> 
        </div> 
    </div> 
</div>
@endsection -->
