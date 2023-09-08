@extends('layout.master')

@section('judul')
Daftar Peran
@endsection

@push('script')
    <script src="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.js"></script>
    <script>
        $(function(){
            $('#example1').DataTable();
        });
    </script>
@endpush

@push('style')
<link href="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.css" rel="stylesheet">
@endpush

@section('content')
<a class="btn btn-secondary mb-3" href="/peran/create">Tambah Data</a>
<table class="table" id="example1">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Ringkasan</th>
      <th scope="col">Tahun</th>
      <th scope="col">Genre ID</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($peran as $key => $item)
    <tr>
      <td>{{$key + 1}}</td>
      <td>{{$item->judul}}</td>
      <td>{{$item->ringkasan}}</td>
      <td>{{$item->tahun}}</td>
      <td>{{$item->genre_id->nama}}</td>
      <td>
      <form action="/peran/{{ $item->id}}" method="POST" id="deletefrom">  
        <a href="/peran/{{$item->id}}/edit" class="btn btn-warning btn-sm">edit</a>
        @csrf
        @method('delete')
        <button type="submit" onclick="return confrim('Apakah Anda Yakin Menghapus Data Ini')" class="btn btn-danger btn-sam">Hapuss</button>
      </form>
      </td>
    </tr>
    @empty
    <h2>Data tidak ada</h2>
    @endforelse
  </tbody>
</table>
@endsection

@push('script')