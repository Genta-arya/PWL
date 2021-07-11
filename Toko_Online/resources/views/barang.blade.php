@extends('main')

@section('title','Katalog Barang-')
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
      </tr>
    </thead>
    <tbody>
        @foreach($barangs as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->nama_brg}}</td>
        <td>{{$item->harga}}</td>
        <td>{{$item->qty}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection