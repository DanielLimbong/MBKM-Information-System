@extends('layouts.fitur')

@section('content')
<div class="row">
  @if(session()->has('created'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('created') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
  @else
          
  @endif
  <!-- Basic Layout -->
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Usulan Kegiatan</h5> 
      </div>
      <div class="card-body">
        <form action="{{ route('postProposal') }}" method="POST">
          @csrf
          {{-- <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="basic-default-name">Nama Mahasiswa</label>
            <div class="col-sm-12">
              {{ auth()->user()->name }}
            </div>
            </div>
          <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="basic-default-name">Email</label>
            <div class="col-sm-12">
              {{ auth()->user()->email }}
            </div>
            </div> --}}
          <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="basic-default-name">Nama Lengkap</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="name" name="name" placeholder="{{ auth()->user()->name }}" />
            </div>
            </div>
          <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="basic-default-name">Email</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="email" name="email" placeholder="{{ auth()->user()->name }}" />
            </div>
            </div>
          <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="basic-default-name">Nama Kegiatan</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="Software Development Engineer Intern" />
            </div>
            </div>
          {{-- <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="basic-default-name">Bentuk Kegiatan</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="bentuk_kegiatan" name="bentuk_kegiatan" placeholder="Software Development Engineer Intern" />
            </div>
            </div> --}}
            <div class="row mb-2">
              <label class="col-sm-5 col-form-label" for="multicol-country">Bentuk Kegiatan</label>
              <div class="col-sm-12">
                <select id="bentuk_kegiatan" name="bentuk_kegiatan"" class="select2 form-select" data-allow-clear="true">
                  <option value="Student Exchange">Student Exchange</option>
                  <option value="Internship">Internship</option>
                  <option value="Teaching Assistant">Teaching Assistant</option>
                  <option value="Research">Research</option>
                  <option value="Humanitarian Project">Humanitarian Project</option>
                  <option value="Enterpreneur">Enterpreneur</option>
                  <option value="Independent Study">Independent Study</option>
                  <option value="Build Village">Build Village</option>
                </select>
              </div>
            </div>
          <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="basic-default-company">Penyelenggara</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="penyelenggara" name="penyelenggara"placeholder="Tokopedia" />
            </div>
          </div>
          <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="basic-default-email">Kredit</label>
            <div class="col-sm-12">
              <div class="input-group input-group-merge">
                <input type="text" id="kredit" name="kredit" class="form-control" placeholder="20 sks" aria-label="20 sks" aria-describedby="basic-default-email2" />
              </div>
            </div>
          </div>
          <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="basic-default-phone">Kedudukan Penyelenggara</label>
            <div class="col-sm-12">
              <input type="text" id="kedudukan_penyelenggara" name="kedudukan_penyelenggara" class="form-control phone-mask" placeholder="Jl. Xxx yyy, Jakarta." aria-label="Jl. Xxx yyy, Jakarta." aria-describedby="basic-default-phone" />
            </div>
          </div>
          <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="basic-default-message">Deskripsi Umum</label>
            <div class="col-sm-12">
              <textarea id="deskripsi_umum" name="deskripsi_umum" class="form-control" placeholder="Tokopedia Internship Program for MSIB Kampus Merdeka .." aria-label="Tokopedia Internship Program for MSIB Kampus Merdeka .." aria-describedby="basic-icon-default-message2"></textarea>
            </div>
          </div>
          <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="basic-icon-default-fullname">Rekognisi</label>
            <div class="col-sm-12">
              <div class="input-group input-group-merge">
                <input type="text" class="form-control" id="rekognisi" name="rekognisi" placeholder="12S4071 - Magang Industri, 20 sks" aria-label="12S4071 - Magang Industri, 20 sks" aria-describedby="basic-icon-default-fullname2" />
              </div>
            </div>
          </div>
          <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="multicol-birthdate">Batas Akhir Pendaftaran</label>
            <div class="col-sm-12">
              <input type="date" id="batas_akhir_pendaftaran" name="batas_akhir_pendaftaran" class="form-control dob-picker" placeholder="YYYY-MM-DD" />
            </div>
          </div>
          <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="multicol-birthdate">Tanggal Mulai Pelaksanaan</label>
            <div class="col-sm-12">
              <input type="date" id="tanggal_mulai_pelaksanaan" name="tanggal_mulai_pelaksanaan" class="form-control dob-picker" placeholder="YYYY-MM-DD" />
            </div>
          </div>
          <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="multicol-birthdate">Tanggal Akhir Pelaksaan</label>
            <div class="col-sm-12">
              <input type="date" id="tanggal_akhir_pelaksanaan" name="tanggal_akhir_pelaksanaan" class="form-control dob-picker" placeholder="YYYY-MM-DD" />
            </div>
          </div>
          <div class="row mb-2">
            {{-- <label class="col-sm-5 col-form-label" for="basic-default-name">Model Pelaksanaan</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="model_pelaksanaan" name="model_pelaksanaan" placeholder="Software Development Engineer Intern" />
            </div>
            </div>
          <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="basic-default-name">Metode Pelaksanaan</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="metode_pelaksanaan" name="metode_pelaksanaan" placeholder="Software Development Engineer Intern" />
            </div>
            </div> --}}
          <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="multicol-country">Model Pelaksanaan</label>
            <div class="col-sm-12">
              <select id="model_pelaksanaan" name="model_pelaksanaan" class="select2 form-select" data-allow-clear="true">
                <option value="Hybrid">Hybrid</option>
                <option value="WFH">WFH</option>
                <option value="WFO">WFO</option>
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="multicol-country">Metode Pelaksanaan</label>
            <div class="col-sm-12">
              <select id="metode_pelaksanaan" name="metode_pelaksanaan" class="select2 form-select" data-allow-clear="true">
                <option value="Full time">Full time</option>
                <option value="Part time">Part time</option>
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="basic-default-message">Persyaratan</label>
            <div class="col-sm-12">
              <textarea id="persyaratan" name="persyaratan" class="form-control"
                placeholder="Tokopedia Internship Program for MSIB Kampus Merdeka .."
                aria-label="Tokopedia Internship Program for MSIB Kampus Merdeka .."
                aria-describedby="basic-icon-default-message2"></textarea>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-3">
              {{-- <a class="btn btn-primary d-grid w-100 mb-3" target="_blank" href="{{route("getPdfProposal")}}">
          Print
        </a> --}}

        <button class="btn btn-primary d-grid w-100 mb-3" type="submit">
          Create
        </button>
        <a class="btn btn-primary d-grid w-100 mb-3" target="_blank" href="{{route("getPdfProposal")}}">
          Print
        </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Basic with Icons -->
  {{-- <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
      </div>
      <div class="card-body">
        <form>
          <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="basic-icon-default-fullname">Rekognisi</label>
            <div class="col-sm-12">
              <div class="input-group input-group-merge">
                <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="12S4071 - Magang Industri, 20 sks" aria-label="12S4071 - Magang Industri, 20 sks" aria-describedby="basic-icon-default-fullname2" />
              </div>
            </div>
          </div>
          <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="multicol-birthdate">Batas Akhir Pendaftaran</label>
            <div class="col-sm-12">
              <input type="text" id="multicol-birthdate" class="form-control dob-picker" placeholder="YYYY-MM-DD" />
            </div>
          </div>
          <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="multicol-birthdate">Tanggal Mulai Pelaksanaan</label>
            <div class="col-sm-12">
              <input type="text" id="multicol-birthdate" class="form-control dob-picker" placeholder="YYYY-MM-DD" />
            </div>
          </div>
          <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="multicol-birthdate">Tanggal Akhir Pelaksaan</label>
            <div class="col-sm-12">
              <input type="text" id="multicol-birthdate" class="form-control dob-picker" placeholder="YYYY-MM-DD" />
            </div>
          </div>
          <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="basic-default-name">Model Pelaksanaan</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="basic-default-name" placeholder="Software Development Engineer Intern" />
            </div>
            </div>
          <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="basic-default-name">Metode Pelaksanaan</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="basic-default-name" placeholder="Software Development Engineer Intern" />
            </div>
            </div>
          {{-- <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="multicol-country">Model Pelaksanaan</label>
            <div class="col-sm-12">
              <select id="multicol-country" class="select2 form-select" data-allow-clear="true">
                <option value="Hybrid">Hybrid</option>
                <option value="WFH">WFH</option>
                <option value="WFO">WFO</option>
              </select>
            </div>
          </div> --}}
          {{-- <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="multicol-country">Metode Pelaksanaan</label>
            <div class="col-sm-12">
              <select id="multicol-country" class="select2 form-select" data-allow-clear="true">
                <option value="Full time">Full time</option>
                <option value="Part time">Part time</option>
              </select>
            </div>
          </div> --}}
          {{-- <div class="row mb-2">
            <label class="col-sm-5 col-form-label" for="basic-default-message">Persyaratan</label>
            <div class="col-sm-12">
              <textarea id="basic-default-message" class="form-control"
                placeholder="Tokopedia Internship Program for MSIB Kampus Merdeka .."
                aria-label="Tokopedia Internship Program for MSIB Kampus Merdeka .."
                aria-describedby="basic-icon-default-message2"></textarea>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-3"> --}}
              {{-- <a class="btn btn-primary d-grid w-100 mb-3" target="_blank" href="{{route("getPdfProposal")}}">
          Print
        </a> --}}

        {{-- <button class="btn btn-primary d-grid w-100 mb-3" type="submit">
          Create
        </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div> --}} --}}
</div>

@endsection