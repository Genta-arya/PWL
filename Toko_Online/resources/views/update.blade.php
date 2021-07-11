@extends('main')

@section('title','Update-')
@if(session('berhasil'))
    <div class="alert alert-success" role="alert">
        {{session('berhasil')}}
    </div>
    @endif
    <a style ="font-color:black; " href="{{url('home')}}" class="nav-link">Home</a>
@section('content-wrapper')
<br><br>
<div class="row ">
    <div class="col-lg-5">
    <form action="/{{$update->id}}/update" method ="POST">
        {{csrf_field()}}
    <div class="form-group" style="padding-left: 20px;">
      <label for="exampleInputNama">Nama Barang</label>
      <input name="nama_brg" type="nama" class="form-control" id="exampleInputNama" aria-describedby="nama" placeholder="" value="{{$update->nama_brg}}">
    </div>
    <div class="form-group" style="padding-left: 20px;">
      <label for="exampleInputtext">Harga</label>
      <input name="harga" type="nama" class="form-control" id="exampleInputtext" aria-describedby="nama" placeholder=""  value="{{$update->harga}}">
    </div>
    <div class="form-group" style="padding-left: 20px;">
      <label for="exampleInputtext">QTY</label>
      <input name="qty" type="nama" class="form-control" id="exampleInputtext" aria-describedby="nama" placeholder=""  value="{{$update->qty}}">
    </div>     
    <button type="submit" class="btn btn-primary float-right">Edit</button>
    </form>
    </div>
</div>

