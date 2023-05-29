@extends('layout/index')

@section('container')
    <div class="main-container">
        <div class="pd-ltr-20 mb-4">
            <div class="card-box pd-20 height-100-p mb-30">
                <div class="d-flex row align-items-center">
                    <div class="col-md-6">
                        <div class="weight-600 font-30 text-blue">Transaksi <div class="btn btn-success weight-600 font-18"
                                data-toggle="modal" data-target="#modalTransaksi">
                                Tambah </div>
                        </div>
                    </div>
                </div>
                <div class="modal" tabindex="-1" role="dialog" id="modalTransaksi">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Transaksi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/transaksi/add" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-10">
                                            <select name="nama" type="text" class="form-control" id="inputNama">
                                                <option value="">Pilih Anggota</option>
                                                @foreach ($users as $item)
                                                    <option value="{{ $item->ID_siswa }}" id="siswa">{{ $item->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputID" class="col-sm-2 col-form-label">No.ID</label>
                                        <div class="col-sm-10">
                                            <input name="id_siswa"type="text" class="form-control" id="inputID">

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputBuku" class="col-sm-2 col-form-label">Judul Buku</label>
                                        <div class="col-sm-10">
                                            <input name="jdl_buku" type="text" class="form-control" id="inputBuku">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputTanggal" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
                                        <div class="col-sm-10">
                                            <input name="tgl_pinjam" type="date" class="form-control" id="inputTanggal">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputTenggat" class="col-sm-2 col-form-label">Tenggat Pinjam</label>
                                        <div class="col-sm-10">
                                            <input name="tenggat" type="date" class="form-control" id="inputTenggat">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Save changes</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
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
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Tanggal Pinjam</th>
                            <th scope="col">Tenggat Pinjam</th>
                            <th scope="col">Selesai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_transaksi as $transaksi)
                            <tr>
                                <th scope="row">{{ $transaksi->id }}</th>
                                <td>{{ $transaksi->id_siswa }}</td>
                                <td>{{ $transaksi->nama }}</td>
                                <td>{{ $transaksi->jdl_buku }}</td>
                                <td>{{ $transaksi->tgl_pinjam }}</td>
                                <td>{{ $transaksi->tenggat }}</td>
                                <td>
                                    <a href="#"><span class="micon material-symbols-outlined" data-toggle="modal"
                                            data-target="#delete{{ $transaksi->id }}">
                                            delete
                                        </span></a>
                                </td>
                            </tr>

                            @include('partial/modal_trans')
                        @endforeach

                    </tbody>
                </table>
               

            </div>
            <div class="footer-wrap pd-20 mb-20 card-box">
                By <a href="https://github.com/dropways" target="_blank">A.Fadil</a>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>


        <script>
            $(document).ready(function() {
                $('.user-box').select2();
            });
        </script>
    @endsection
