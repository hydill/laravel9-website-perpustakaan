@if (session('hapus'))
    <div class="px-5 d-block alert alert-danger " role="alert">
      {{ session('hapus') }}
    </div>
@endif
