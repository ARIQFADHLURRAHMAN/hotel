@extends('layout.main')

@section('content')
<div class="container pt-2">
    <h1 class="text-center">Data Agenda</h1>
    <a type="button" href="/tambahpemesanan" class="btn btn-primary">+ Tambah</a>
    <div style="overflow-x: scroll;;">
    <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Guru</th>
                <th scope="col">Materi pelajaran</th>
                <th scope="col">Mata Pelajaran</th>
                <th scope="col">Jam pelajaran</th>
                <th scope="col">Absensi</th>
                <th scope="col">Kelas</th>
                <th scope="col">link Pembelajaran</th>
                <th scope="col">Jenis pembelajaran</th>
                <th scope="col">Dokumentasi</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($data as $key => $row)
             <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $row->namaguru }}</td>
                <td>{{ $row->materipelajaran }}</td>
                <td>{{ $row->matapelajaran }}</td>
                <td>{{ $row->jampelajaran }}</td>
                <td>{{ $row->absensi }}</td>
                <td>{{ $row->kelas }}</td>
                <td>{{ $row->jenispembelajaran }}</td> 
                <td>{{ $row->linkpembelajaran }}</td>
                <td>{{ $row->keterangan }}</td>
                <td class="d-flex">
                  <form action="/deletedata/{{$row->id}}" method="post">
                   @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                  <a type="button" href="/tampilan-pemesanan/{{$row->id}}" class="btn btn-warning">Edit</a>
                </td>
              </tr>
             @endforeach
            </tbody>
        </table>
      </div>
    </div>
@endsection