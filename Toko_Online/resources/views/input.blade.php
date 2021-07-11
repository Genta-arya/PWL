@extends('main')

@section('title','Input Barang-')
    </form>
    <a style ="font-color:black; " href="{{url('home')}}" class="nav-link">Home</a>
    <button type="button" class="btn btn-primary float-right " data-toggle="modal" data-target="#exampleModal">
      Tambah Data
    </button>
    

@section('content-wrapper')

<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Harga</th>
        <th scope="col">QTY</th>
        <th scope="col">Tanggal input</th>
      </tr>
    </thead>
    @foreach($barangs as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->nama_brg}}</td>
      <td>{{$item->harga}}</td>
      <td>{{$item->qty}}</td>
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
        <form action="/input/add" method ="POST">
        {{csrf_field()}}
    <div class="form-group">
      <label for="exampleInputNama">Nama Barang</label>
      <input name="nama_brg" type="nama" class="form-control" id="exampleInputNama" aria-describedby="nama" placeholder="">
    </div>
    <div class="form-group">
      <label for="exampleInputtext">Harga</label>
      <input name="harga" type="nama" class="form-control" id="exampleInputtext" aria-describedby="nama" placeholder="">
    </div>
    <div class="form-group">
      <label for="exampleInputtext">QTY</label>
      <input name="qty" type="nama" class="form-control" id="exampleInputtext" aria-describedby="nama" placeholder="">
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
