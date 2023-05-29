<div class="modal" tabindex="-1" role="dialog" id="edit{{ $item->id }}">
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
                {!! Form::model($item, ['method'=> 'post','route'=>['buku.update',$item->id]]) !!}
                <div class="form-group row">
                    <label for="jdl_buku"
                        class="col-sm-2 col-form-label">Judul Buku</label>
                    <div class="col-sm-10">
                        {!! Form::text('jdl_buku', $item->jdl_buku, ['class'=> 'form-control']) !!}
                    </div>
                </div>
                    <div class="form-group row">
                        <label for="pengarang"
                            class="col-sm-2 col-form-label">Pengarang</label>
                        <div class="col-sm-10">
                            {!! Form::text('pengarang', $item->pengarang, ['class'=> 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kategori"
                            class="col-sm-2 col-form-label">Kategori buku</label>
                        <div class="col-sm-10">
                            {!! Form::text('kategori', $item->kategori, ['class'=> 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok"
                            class="col-sm-2 col-form-label">Jumlah stok</label>
                        <div class="col-sm-10">
                            {!! Form::text('stok', $item->stok, ['class'=> 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lokasi"
                            class="col-sm-2 col-form-label">Lokasi</label>
                        <div class="col-sm-10">
                            {!! Form::text('lokasi', $item->lokasi, ['class'=> 'form-control']) !!}
                        </div>
                    </div>
                    
                
            </div>
            <div class="modal-footer">
                
                {{ Form::button('Edit Buku',['class'=>'btn btn-success', 'type'=>'submit']) }}
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>