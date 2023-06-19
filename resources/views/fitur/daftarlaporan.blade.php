@extends("layouts.fitur")

@section('content')
    <!-- Content -->
        <!-- Grid Card -->
<h6 class="pb-1 mb-4 h3 text-black">Kampus Merdeka Programs</h6>

 <div class="card-body">
          <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
              <tbody class="table-border-bottom-0">

                <tr>
                  <th allign="center"><i class=""></i>
                    <strong allign="center">Waktu Pelaporan</strong>
                  </th>
                  <th allign="center"><i class=""></i>
                    <strong allign="center">Isi Laporan</strong>
                  </th>
                  <th allign="center"><i class=""></i>
                    <strong >File Laporan</strong>
                  </th>
                  <th allign="center"><i class=""></i>
                    <strong >Download File Laporan</strong>
                  </th>
                </tr>

                    @foreach($data_laporan as $item)
                    <tr>
                      <td>{{ $item['waktu_pelaporan'] }}</td>
                      <td>{{ $item['isi_laporan'] }}</td>
                      <td allign="center">
                        <a href="\public\assets\file_dokumen/{{ $item['file_laporan'] }}">
                          <button class="btn btn-success" type="button">
                            Download {{ $item['file_laporan'] }}
                          </button>
                        </a>
                      </td>
                        <td>
                          <a href="/editlaporan/{{$item['id']}}">
                          <button class="btn btn-success">Edit</button>
                        </a></td>
                    </tr>
                    @endforeach
              </tbody>
            </table>
          </div>
        </div>

</div>
@endsection
