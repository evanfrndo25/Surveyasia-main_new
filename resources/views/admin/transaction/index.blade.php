@extends('admin.layouts.base')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
  <style>
    body {
        background-color: #F7FAFC;
    }

</style>
@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">


@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-2 nopadding">
        @include('admin.component.sidebar')
      </div>
      <div class="col-10 nopadding">
        @include('admin.component.header')
        <div class="container pt-4">
          @if (session()->has('status'))
            <div class="alert alert-success">
              {{ session()->get('status') }}
            </div>
          @endif
          

          <div class="container pt-4">
             <table id="hempas" class="table table-no-border-head align-middle" style="border-radius: 20px; overflow: hidden; background-color:#ffffff">
                <thead style="background-color:#f6beb226;">
                    <tr class="fw-bold">
                        <td scope="col" class="text-left align-middle">No</td>
                        <td scope="col" class="text-left align-middle">Pengguna</td>
                        <td scope="col" class="text-left align-middle">AKtivitas</td>
                        <td scope="col" class="text-left align-middle">Paket</td>
                        <td scope="col" class="text-left align-middle">Biaya</td>
                        <td scope="col" class="text-left align-middle">Tanggal <br> Pembelian</td>
                        <td scope="col" class="text-left align-middle">Batas Aktif <br> Paket</td>
                    </tr>
                </thead>
                <tbody>

                    {{-- LOOPING DATA --}}
                    @foreach ($transactions as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                          <div>
                            <h6 class="nopadding">{{ $item->sub->user->nama_lengkap }}</h6>
                            <span class="d-block" style="font-size: 13px">{{ $item->sub->user->email }}</span>
                          </div>
                        </td>
                        <td>{{ $item->sub->subscription->name }}</td>
                        <td>{{ $item->title}}</td>
                        <td>
                          {{ $price = "Rp " . number_format($item->price ,0,',','.')}}</td>
                        <td>{{ date('d/m/Y', strtotime ($item->created_at)); }}</td>
                        <td>{{date('d/m/Y', strtotime ($item->expired_at)); }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Edit News -->
  <div class="modal fade" id="modal-edit-news" tabindex="-1"
    aria-labelledby="modal-edit-newsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body py-4">
          <div class="d-flex justify-content-between">
            <h5 class="modal-title" id="exampleModalLabel">Edit News</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <hr class="mt-2">
          <div class="container-fluid px-0 mb-5">
            <div class="row">
              <div class="col-6">
                <form method="post" enctype="multipart/form-data" id="form-edit">
                  @method('put')
                  @csrf
                  <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="hidden" class="form-control border-r-besar"
                      id="id" name="id">
                    <input type="hidden" id="oldImg" name="oldImg">
                    <input type="text" class="form-control border-r-besar"
                      id="title" name="title">
                  </div>
                  <div class="mb-3">
                    <label for="deskripsi"
                      class="form-label">Deksripsi</label>
                    <textarea class="form-control border-r-besar" id="description"
                      rows="5" name="description">
                    </textarea>
                  </div>

              </div>
              <div class="col-6">
                <div class="mb-3">
                  <label for="foto" class="form-label">Upload Foto</label>
                  <img id="img" alt="" width="70" class="d-block mb-1">
                  <input type="file" class="form-control border-r-besar" id="foto"
                    name="img">

                </div>
                <hr class="mt-2">
                <div class="container-fluid px-0 mb-5">
                    <div class="row">
                        <div class="col-6">
                            <form  method="post" enctype="multipart/form-data" id="form-edit">
                                @method('put')
                                @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="hidden" class="form-control border-r-besar" id="id" name="id">
                                <input type="hidden" id="oldImg" name="oldImg">
                                <input type="text" class="form-control border-r-besar" id="title" name="title">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deksripsi</label>
                                <textarea class="form-control border-r-besar" id="description" rows="5" name="description">
                                </textarea>
                            </div>
                            
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="foto" class="form-label" >Upload Foto</label>
                                <img id="img" alt="" width="70" class="d-block mb-1">
                                <input type="file" class="form-control border-r-besar" id="foto" name="img">
                                
                            </div>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal Publish</label>
                                <input type="date" class="form-control border-r-besar" id="tanggal" value="2021-07-22">
                            </div>
                            <div class="mb-3">
                                <label for="jam-publish" class="form-label">Jam Publish</label>
                                <input type="time" class="form-control border-r-besar" id="jam-publish" value="23:00">
                            </div>

                        </div>
                    </div>
                {{-- <div class="mb-3">
                  <label for="tanggal" class="form-label">Tanggal
                    Publish</label>
                  <input type="date" class="form-control border-r-besar"
                    id="tanggal" value="2021-07-22">
                </div>
                <div class="mb-3">
                  <label for="jam-publish" class="form-label">Jam
                    Publish</label>
                  <input type="time" class="form-control border-r-besar"
                    id="jam-publish" value="23:00">
                </div> --}}

              </div>
            </div>
      
          </div>

          <button type="submit" class="btn text-white mx-auto px-lg-3 mt-5"
            style="background-color: #4C6FFF">Simpan
          </button>



        </div>

      </div>
    </div>
  </div>

  {{-- END OF MODAL EDIT NEWS --}}


@endsection
@section('script')
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
    $('#heyaa').DataTable( {
        "language": {
            "decimal":        "",
    "emptyTable":     "Tidak ada data yang tersedia di tabel",
    "info":           "Menampilkan START sampai END dari TOTAL item",
    "infoEmpty":      "Menampilkan 0 sampai 0 dari 0 item",
    "infoFiltered":   "(difilter dari MAX total item)",
    "infoPostFix":    "",
    "thousands":      ",",
    "lengthMenu":     "Tampilkan MENU item",
    "loadingRecords": "Memuat...",
    "processing":     "",
    "search":         "Cari :",
    "zeroRecords":    "Arsip tidak ditemukan",
    "paginate": {
        "next":       ">",
        "previous":   "<"
    },
        }
    } );
});
</script>
<script type="text/javascript">
    $(document).ready(function () {
    $('#hempas').DataTable( {
        "language": {
            "decimal":        "",
    "emptyTable":     "Tidak ada data yang tersedia di tabel",
    "info":           "Menampilkan _START_ sampai _END_ dari _TOTAL_ item",
    "infoEmpty":      "Menampilkan 0 sampai 0 dari 0 item",
    "infoFiltered":   "(difilter dari _MAX_ total item)",
    "infoPostFix":    "",
    "thousands":      ",",
    "lengthMenu":     "Tampilkan _MENU_ item",
    "loadingRecords": "Memuat...",
    "processing":     "",
    "search":         "Cari :",
    "zeroRecords":    "Arsip tidak ditemukan",
    "paginate": {
        "next":       ">",
        "previous":   "<"
    },
        }
    } );
});
</script>
@endsection