@extends('layouts.main')

@section('title', 'Edit Siswa ')


@section('content')
    <di class="content mt-3">

        <div class="animated fadeIn">

            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong> Edit Nama Konser</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('siswa') }}" class="btn btn-success btn-sm">
                            <i class="fa fa-undo"></i> back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div class"col-md-4 offset-md-4">
                                <form action="{{ url('siswa/' . $ubahsiswa->nisn) }}" method="post">
                                    @method('patch')
                                    @csrf
                                    <div class="form-group">
                                        <label>Id Konser</label>
                                        <input type="text" name="nisn"
                                            class="form-control @error('nisn') is-invalid @enderror"
                                            value="{{ old('nisn', $ubahsiswa->nisn) }}" autofocus>
                                        @error('nisn')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Konser</label>
                                        <input type="text" name="nama"
                                            class="form-control @error('nama') is-invalid @enderror"
                                            value="{{ old('nama', $ubahsiswa->nama) }}" autofocus>
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Tempat Konser</label>
                                                <input type="text" name="tempat"
                                                    class="form-control @error('tempat') is-invalid @enderror"
                                                    value="{{ old('nama', $ubahsiswa->tempat) }}" autofocus>
                                                @error('tempat')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- <div class="col-6">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" name="lahir" class="form-control"
                                                value="{{ $ubahsiswa->lahir }}" autofocus>
                                        </div> --}}
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label for="select" class=" form-control-label">Jenis Konser</label>
                                            <select class="form-control" name="jeniskonser">
                                                <option>{{ $ubahsiswa->jeniskonser }}</option>
                                                <option value="Resital">Resital</option>
                                                <option value="Teattrikal">Teattrikal</option>
                                                <option value="Konser Klasik">Konser Klasik</option>
                                                <option value="Konser POP">Konser POP</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Pencapaian</label>
                                        <input type="text" name="kelas"
                                            class="form-control @error('kelas') is-invalid @enderror"
                                            value="{{ old('kelas', $ubahsiswa->kelas) }}" autofocus>
                                        @error('kelas')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                            </div>

                            <button type="submit" class="btn btn-success"> Update </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

    @endsection
