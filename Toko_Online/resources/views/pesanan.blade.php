@extends('main')

@section('title','Data Pesanan-')
<a style ="font-color:black; " href="{{url('home')}}" class="nav-link">Home</a>
<button type="button" class="btn btn-primary float-right " data-toggle="modal" data-target="#exampleModal">
  Tambah Data
</button>

@section('content-wrapper')

<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">ID Pesanan</th>
        <th scope="col">ID Barang</th>
        <th scope="col">Nama Pelanggan</th>
        <th scope="col">Alamat</th>
        <th scope="col">Kontak</th>
        <th scope="col">QTY Pesanan</th>
        <th scope="col">Tanggal input</th>

      </tr>
    </thead>
    @foreach($pesanans as $item)
    <tr>
      <th scope="row">{{$item->id_pesanan}}</th>
      <td>{{$item->id_barang}}</td>
      <td>{{$item->nama_pelanggan}}</td>
      <td>{{$item->alamat}}</td>
      <td>{{$item->no_hp}}</td>
      <td>{{$item->qty_pesanan}}</td>
      <td>{{$item->created_at}}</td>
    </tr>
    @endforeach
    
  </table>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Input</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="/pesanan" method ="POST">
        {{csrf_field()}}
    <div class="form-group">
      <label for="exampleInputNama">ID Barang</label>
      <input name="id_barang" type="nama" class="form-control" id="exampleInputNama" aria-describedby="nama" placeholder="">
    </div>
    <div class="form-group">
      <label for="exampleInputtext">Nama Pelanggan</label>
      <input name="nama_pelanggan" type="nama" class="form-control" id="exampleInputtext" aria-describedby="nama" placeholder="">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Alamat</label>
        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputtext">Kontak</label>
        <input name="no_hp" type="nama" class="form-control" id="exampleInputtext" aria-describedby="nama" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputtext">QTY Pesanan</label>
    <input name="qty_pesanan" type="nama" class="form-control" id="exampleInputtext" aria-describedby="nama" placeholder="">
</div>
  
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>

@endsection
