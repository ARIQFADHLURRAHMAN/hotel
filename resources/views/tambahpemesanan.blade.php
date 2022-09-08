@extends('layout.main')


@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Tambah Guru</h1>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body" style="width: 90%">
                        <form method="POST" action="/insert-pemesanan/" enctype="multipart/form-data">
                          @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                            <input type="text" name="namaguru" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('namaguru')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mata Pelajaran</label>
                            <input type="text" name="matapelajaran" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('matapelajaran')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Materi Pelajaran</label>
                            <input type="text" name="materipelajaran" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('materipelajaran')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jam Pembelajaran</label>
                            <input type="text" name="jampelajaran" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('jampembelajaran')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Absensi</label>
                            <input type="text" name="absensi" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('absensi')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">kelas</label>
                            <input type="text" name="kelas" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('kelas')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jenis Pembelajaran</label>
                            <input type="text" name="jenispembelajaran" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('jenispembelajaran')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Link Pembelajaran</label>
                            <input type="text" name="linkpembelajaran" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('linkpembelajaran')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Dokumentasi</label>
                            <input type="file" name="dokumentasi" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('dokumentasi')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('keterangan')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection