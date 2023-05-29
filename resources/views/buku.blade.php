@extends('layout/index')

@section('container')
    <div class="main-container">
        <div class="pd-ltr-20 mb-4">
            <div class="card-box pd-20 height-100-p mb-30">
                <div class="d-flex row align-items-center">
                    <div class="col-md-6">
                        <div class="weight-600 font-30 text-blue">Daftar Buku <div class="btn btn-success weight-600 font-18"
                                data-toggle="modal" data-target="#modalBuku">
                                Tambah</div>
                        </div>
                        <div class="modal" tabindex="-1" role="dialog" id="modalBuku">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Buku</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>


                                    <div class="modal-body">
                                        <form action="/buku/add" method="POST">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="jdl_buku" class="form-control"
                                                        id="judul">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="pengarang"class="form-control"
                                                        id="pengarang">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputBuku" class="col-sm-2 col-form-label">Kategori Buku</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="kategori" class="form-control"
                                                        id="kategori">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputTanggal" class="col-sm-2 col-form-label">Jumlah
                                                    Stok</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="stok" class="form-control"
                                                        id="stok">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputTenggat" class="col-sm-2 col-form-label">Lokasi
                                                    Buku</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="lokasi"class="form-control" id="lokasi">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success">Simpan Data Buku</button>
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('partial/alertdanger')
            @include('partial/alert')
            <div class="pd-20 card-box mb-30">
                <table class="table">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Judul Buku</th>
                                <th scope="col">Pengarang</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Stok Tersedia</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">Hapus</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data_buku as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>{{ $item->jdl_buku }}</td>
                                    <td>{{ $item->pengarang }}</td>
                                    <td>{{ $item->kategori }}</td>
                                    <td><span
                                            class="badge {{ $item->stok == 'Kosong' ? 'bg-danger' : 'bg-success' }}">{{ $item->stok }}</span>
                                    </td>
                                    <td>{{ $item->lokasi }}</td>
                                    <td><a href="#edit{{ $item->id }}"><span class="micon material-symbols-outlined" data-toggle="modal"
                                        data-target="#edit{{ $item->id }}">
                                        edit
                                    </span></a> 
                                        <a href="#delete{{ $item->id }}"><span class="micon material-symbols-outlined" data-toggle = "modal" data-target = "#delete{{ $item->id }}"style="color:coral;">
                                                delete
                                            </span></a></td>
                                    @include('/partial/modalBuku')
                                    @include('/partial/modalDeleteBook')
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                    {{-- <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Pengarang</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Stok Tersedia</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Pemrograman Web</td>
                            <td>Robert C. Marten</td>
                            <td>Pemrograman</td>
                            <td><span class="badge badge-danger">Kosong</span></td>
                            <td>Rak 1</td>
                            <td><a href=""><span class="micon material-symbols-outlined">
                                        delete
                                    </span></a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Belajar Python untuk pemula</td>
                            <td>Abdul Kadir</td>
                            <td>Pemrograman</td>
                            <td><span class="badge badge-success">3</span></td>
                            <td>Rak 2</td>
                            <td><a href=""><span class="micon material-symbols-outlined">
                                        delete
                                    </span></a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>JavaScript untuk pemula</td>
                            <td>Joko Susilo</td>
                            <td>Pemrograman</td>
                            <td><span class="badge badge-danger">Kosong</span></td>
                            <td>Rak 3</td>
                            <td><a href=""><span class="micon material-symbols-outlined">
                                        delete
                                    </span></a></td>
                        </tr>
                    </tbody> --}}
                </table>
            </div>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            By <a href="https://github.com/dropways" target="_blank">A.Fadil</a>
        </div>
    </div>
@endsection
{{-- <div class="clearfix mb-20"> --}}
{{-- <div class="pull-right">
        <a href="#basic-table" class="btn btn-primary btn-sm scroll-click" rel="content-y"
            data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
    </div> --}}
{{-- </div> --}}
{{-- <table class="data-table table nowrap mb-5">
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th>No.</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Kategori</th>
                <th>Stok Tersedia</th>
                <th>Lokasi</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt=""
                            style="width: 45px; height: 45px" class="rounded-circle" />
                        <div class="ms-3">
                            <p class="fw-bold mb-1">John Doe</p>
                            <p class="text-muted mb-0">john.doe@gmail.com</p>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">Software engineer</p>
                    <p class="text-muted mb-0">IT department</p>
                </td>
                <td>
                    <span class="badge badge-success rounded-pill d-inline">Active</span>
                </td>
                <td>Senior</td>
                <td>
                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                        Edit
                    </button>
                </td>
                <td>
                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                        Edit
                    </button>
                </td>
                <td>
                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                        Edit
                    </button>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="https://mdbootstrap.com/img/new/avatars/6.jpg" class="rounded-circle"
                            alt="" style="width: 45px; height: 45px" />
                        <div class="ms-3">
                            <p class="fw-bold mb-1">Alex Ray</p>
                            <p class="text-muted mb-0">alex.ray@gmail.com</p>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">Consultant</p>
                    <p class="text-muted mb-0">Finance</p>
                </td>
                <td>
                    <span class="badge badge-primary rounded-pill d-inline">Onboarding</span>
                </td>
                <td>Junior</td>
                <td>
                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold"
                        data-mdb-ripple-color="dark">
                        Edit
                    </button>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="https://mdbootstrap.com/img/new/avatars/7.jpg" class="rounded-circle"
                            alt="" style="width: 45px; height: 45px" />
                        <div class="ms-3">
                            <p class="fw-bold mb-1">Kate Hunington</p>
                            <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">Designer</p>
                    <p class="text-muted mb-0">UI/UX</p>
                </td>
                <td>
                    <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
                </td>
                <td>Senior</td>
                <td>
                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold"
                        data-mdb-ripple-color="dark">
                        Edit
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</table> --}}
