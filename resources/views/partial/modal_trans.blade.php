<div class="modal fade" id="delete{{ $transaksi->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Data Selesai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::model($transaksi, ['method'=> 'delete','route'=>['transaksi.delete',$transaksi->id]]) !!}
                apakah benar siswa ini telah selesai melakukan transaksi?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Selesai</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
