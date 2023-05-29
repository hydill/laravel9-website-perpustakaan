@extends('layout/index')

@section('container')
    <div class="main-container">
        <div class="pd-ltr-20 mb-4">
            <div class="card-box pd-20 height-100-p mb-30">
                <div class="d-flex row align-items-center">
                    <div class="col-md-6">
                        <div class="weight-600 font-30 text-blue">Anggota <div class="btn btn-success weight-600 font-18"
                                data-toggle="modal" data-target="#modalAnggota"><a>
                                    Tambah</a></div>
                        </div>
                    </div>
                    <div class="modal" tabindex="-1" role="dialog" id="modalAnggota">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah Anggota</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/anggota/add" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="inputID" class="col-sm-2 col-form-label">No.ID</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="ID_siswa" class="form-control" id="inputID">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="nama" class="form-control" id="inputNama">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputHp" class="col-sm-2 col-form-label">No.Hp</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="no_hp" class="form-control" id="inputHp">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="alamat" class="form-control" id="inputAlamat">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputKelas" class="col-sm-2 col-form-label">Kelas</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="kelas" class="form-control" id="inputKelas">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="status" class="dropdown col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="status" name="status">
                                                    <option value="Aktif">Aktif</option>
                                                    <option value="Nonaktif">Nonaktif</option>
                                                </select>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Tambah</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('partial/alert')
            @include('partial/alertdanger')
            <div class="pd-20 card-box mb-30">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">No.Hp</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Status</th>
                            <th scope="col">Operasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $anggota)
                            <tr>
                                <th scope="row">{{ $anggota->id }}</th>
                                <td>{{ $anggota->ID_siswa }}</td>
                                <td>{{ $anggota->nama }}</td>
                                <td>{{ $anggota->no_hp }}</td>
                                <td>{{ $anggota->alamat }}</td>
                                <td>{{ $anggota->kelas }}</td>
                                <td><span class="badge {{ ($anggota->status == 'Aktif')?'badge-success':'badge-danger' }}">{{ $anggota->status }}</span>
                                </td>
                                <td><a href="#edit{{ $anggota->id }}"><span class="micon material-symbols-outlined" data-toggle="modal"
                                            data-target="#edit{{ $anggota->id }}">
                                            edit
                                        </span></a> 
                                    
                                    <a href="#delete{{ $anggota->id }}"><span class="micon material-symbols-outlined" style="color:tomato;"data-toggle="modal" data-target="#delete{{ $anggota->id }}">
                                            delete
                                        </span></a>
                                </td>
                                @include('partial/modal')
                                @include('partial/modalDelete')
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            By <a href="https://github.com/dropways" target="_blank">A.Fadil</a>
        </div>
    </div>
@endsection
