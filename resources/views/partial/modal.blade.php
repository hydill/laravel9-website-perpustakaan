<div class="modal" tabindex="-1" role="dialog" id="edit{{ $anggota->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Anggota</h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::model($anggota, ['method'=> 'post','route'=>['anggota.update',$anggota->id]]) !!}
                <div class="form-group row">
                    <label for="inputID"
                        class="col-sm-2 col-form-label">No.ID</label>
                    <div class="col-sm-10">
                        {!! Form::text('ID_siswa', $anggota->ID_siswa, ['class'=> 'form-control']) !!}
                    </div>
                </div>
                    <div class="form-group row">
                        <label for="inputPassword"
                            class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            {!! Form::text('nama', $anggota->nama, ['class'=> 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHp"
                            class="col-sm-2 col-form-label">No.Hp</label>
                        <div class="col-sm-10">
                            {!! Form::text('no_hp', $anggota->no_hp, ['class'=> 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputAlamat"
                            class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            {!! Form::text('alamat', $anggota->alamat, ['class'=> 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputKelas"
                            class="col-sm-2 col-form-label">Kelas</label>
                        <div class="col-sm-10">
                            {!! Form::text('kelas', $anggota->kelas, ['class'=> 'form-control']) !!}
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
                
                {{ Form::button('Edit Anggota',['class'=>'btn btn-success', 'type'=>'submit']) }}
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>