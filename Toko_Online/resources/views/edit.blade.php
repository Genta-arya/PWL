@extends('main')

@section('title','Edit Barang-')
@if(session('berhasil'))
    <div class="alert alert-success" role="alert">
        {{session('berhasil')}}
    </div>
    @endif
<form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/cari">
    <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
    <a style ="font-color:black; " href="{{url('home')}}" class="nav-link">Home</a>
@section('content-wrapper')

<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Harga</th>
        <th scope="col">QTY</th>
        <th scope="col">Tanggal input</th>
        <th scope="col">Setting</th>

      </tr>
    </thead>
    @foreach($barangs as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->nama_brg}}</td>
      <td>{{$item->harga}}</td>
      <td>{{$item->qty}}</td>
      <td>{{$item->created_at}}</td>
      <td><a href="{{$item->id}}/update" class="btn btn-info btn-sm" >Edit</td>
      <td><a href="{{$item->id}}/delete" class="btn btn-danger btn-sm" >Delete</td>
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
