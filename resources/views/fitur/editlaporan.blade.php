@extends("layouts.fitur")

@section('content')
     <!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">

  @if(session()->has('created'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('created') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
  @else

  @endif
<h4 class="py-3 breadcrumb-wrapper mb-2">Weekly Report</h4>
<!-- Role cards -->
 <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        {{-- <h5 class="mb-0">Usulan Kegiatan</h5>  --}}
      </div>
      <div class="card-body">

              <form method="POST" action="" enctype="multipart/form-data">
                  @csrf
                  <label class="col-sm-5 col-form-label" for="multicol-birthdate">Waktu Pelaporan</label>
                  <label for="waktu_pelaporan"></label><input type="date" id="waktu_pelaporan" name="waktu_pelaporan" class="form-control dob-picker" {{ $data->waktu_pelaporan}}/>
                  <div class="row mb-2">
                      <label class="col-sm-5 col-form-label" for="basic-default-message">Isi Laporan</label>
                      <div class="col-sm-12">
                          <textarea id="isi_laporan" name="isi_laporan" class="form-control" {{ $data['isi_laporan'] }}> {{ $data['isi_laporan'] }}</textarea>
                      </div>
                  </div>
                  <div class="row mb-2">
                      <label class="col-sm-5 col-form-label" for="basic-default-name">File Laporan</label>
                      <div class="col-sm-12">
                          <input type="file" class="form-control" id="file_laporan" name="file_laporan" value="{{ $data->file_laporan }}"/>
                      </div>
                  </div>
                  <div class="row justify-content-end">
                      <div class="col-sm-3">
                          <button class="btn btn-primary d-grid w-100 mb-3" type="submit">
                              Create
                          </button>

                      </div>
                  </div>
              </form>

      </div>
    </div>
  </div>
<!--/ Role cards -->
@endsection
