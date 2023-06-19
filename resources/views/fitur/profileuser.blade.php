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
                    <strong allign="center">Nama :</strong>
                      <td>{{ auth()->user()->name }}</td>        
                  </th>
                <tr>
                  <tr>
                  <th allign="center"><i class=""></i>
                    <strong allign="center">Email</strong>
                      <td>{{ auth()->user()->email }}</td>
                  </th>
                  </tr>
                  <tr>
                  <th allign="center"><i class=""></i>
                    <strong >IPK</strong>
                    <td allign="center"></td>
                  </th>
                  </tr></tr>
              </tbody>
            </table>
          </div>
        </div>
@endsection