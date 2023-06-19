@extends("layouts.pdf")

@section('content')
<div class="invoice-print p-5">

  <div class="d-flex justify-content-between flex-row">
    <div class="mb-4">
      <div class="d-flex svg-illustration mb-3 gap-2">
        
<svg width="26px" height="26px" viewBox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <title>icon</title>
  <defs>
    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
      <stop stop-color="#5A8DEE" offset="0%"></stop>
      <stop stop-color="#699AF9" offset="100%"></stop>
    </linearGradient>
    <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-2">
      <stop stop-color="#FDAC41" offset="0%"></stop>
      <stop stop-color="#E38100" offset="100%"></stop>
    </linearGradient>
  </defs>
  <g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
      <g id="Login" transform="translate(519.000000, 244.000000)">
        <g id="Logo" transform="translate(148.000000, 42.000000)">
          <g id="icon" transform="translate(0.000000, 4.000000)">
            <path d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z" id="Combined-Shape" fill="#4880EA"></path>
            <path d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z" id="Combined-Shape2" fill="url(#linearGradient-1)"></path>
            <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0" width="7.68181818" height="7.68181818"></rect>
          </g>
        </g>
      </g>
    </g>
  </g>
</svg>


        <span class="app-brand-text h3 mb-0 fw-bold">Proposal MBKM</span>
            </div>
            <p class="mb-1">Institut Teknologi Del</p>
            <p class="mb-1">Sitoluama, Kec Balige, Toba, Sumatera Utara</p>
            <p class="mb-0">(876) 543 2198</p>

          <div class="col-xl-6 col-md-12 col-sm-5 col-12 mb-xl-0 mb-md-4 mb-sm-0 mb-4">
            <h6 class="pb-2">Pengusul</h6>
          </div>

      <div class="table-responsive">
        <table class="table border-top m-0">
          <thead>
            <tr>
              <th>NIM</th>
              <th>Nama</th>
              <th>Angkatan</th>
              <th>Semester</th>
              <th>IPK</th>
              <th>Wali</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-nowrap">12S20022</td>
              <td class="text-nowrap">{{ auth()->user()->name }}</td>
              <td>2020</td>
              <td>3</td>
              <td>3.99</td>
              <td class="text-nowrap">RRR</td>
            </tr>
            
          </tbody>
        </table>
      </div>

      <!-- Bordered Table -->
<!-- <div class="card"> -->
  <h5 class="card-header">Usulan Kegiatan</h5>
  @foreach ($data_proposal as $item)
      <!-- <div> -->
        <div class="card-body">
          <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
              <tbody class="table-border-bottom-0">
                <tr>
                  <td><i class=""></i> 
                    <strong>Nama Kegiatan : </strong> 
                    <br></br>
                    <a>{{ $item['nama_kegiatan'] }}</a>
                  </td>
                  
                  <td><i class=""></i> 
                    <strong>Bentuk Kegiatan : </strong> 
                    <br></br>
                    <a>{{ $item['bentuk_kegiatan'] }}</a>
                  </td>
                </tr>
                <tr>
                <td><i class=""></i> 
                    <strong>Penyelenggara : </strong> 
                    <br></br>
                    <a>{{ $item['penyelenggara'] }}</a>
                  </td>
                  
                  <td><i class=""></i> 
                    <strong>Kredit : </strong> 
                    <br></br>
                    <a>{{ $item['kredit'] }}</a>
                  </td>
                </tr>
                <tr>
                <td><i class=""></i> 
                    <strong>Tempat Penyelenggara : </strong> 
                    <br></br>
                    <a>{{ $item['kedudukan_penyelenggara'] }}</a>
                  </td>
                  
                  <td><i class=""></i> 
                    <strong>Rekognisi*: </strong> 
                    <br></br>
                    <a>{{ $item['rekognisi'] }}</a>
                  </td>
                </tr>
                <tr>
                <td>
                    <i class=""></i> 
                    <strong>Waktu Pelaksanaan</strong> 
                    <br></br>
                    <a>{{ $item['tanggal_mulai_pelaksanaan'] }} - {{ $item['tanggal_akhir_pelaksanaan'] }}</a>
                  </td>
                  
                  <td><i class=""></i> 
                    <strong>Metode Pelaksanaan : </strong> 
                    <br></br>
                    <a>{{ $item['metode_pelaksanaan'] }}</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      <!-- </div> -->
            <!-- <div> -->
      <div class="card-body">
        <div class="row">
          <div class="col-12">
            <span class="fw-semibold">Deskripsi Umum : </span>
            <br></br>
            <span>{{ $item['deskripsi_umum'] }}</span>
          </div> 
          <div class="col-12">
            <br> </br>
            <span class="fw-semibold">Persyaratan : </span>
            <br></br>
            <span>{{ $item['persyaratan'] }}</span>
          </div>
          <div class="col-12">
            <br> </br>
            <span class="fw-semibold">URL Kegiatan : </span>
            <br></br>
            <span>It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance
              projects. Thank You!</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <h6 class="card-header">Profil dan Capaian Pembelajaran Lulusan</h6>
      <span>It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance
                  projects. Thank You!</span>
                  <br>
  <!-- Mata Kuliah Pendukung -->              
<h6 class="card-header">Mata Kuliah Pendukung</h6>
<div class="card">
  <span class="fw-semibold">12S2022 - Budi Sembiring</span>
  <div class="card-body">
    <div class="table-responsive text-nowrap">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Mata Kuliah</th>
            <th>Semester</th>
            <th>Nilai</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td>1</td>
            <td>10S2103</td>
            <td>Algoritma dan Struktur Data</td>
            <td><span class="badge bg-label-primary me-1">IV</span></td>
            <tD>AB</td>
          </tr>
          <tr>
          <td>2</td>
            <td>12S2101</td>
            <td>Pemrograman dan Pengujian Aplikasi Web</td>
            <td><span class="badge bg-label-primary me-1">V</span></td>
            <tD>A</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
  @endforeach



<!--/ Mata Kuliah Pendukung -->
 
        </div>
      </div>  
      <br></br>
          </div>
          <div>
      <div>


<!-- / Content -->
@endsection