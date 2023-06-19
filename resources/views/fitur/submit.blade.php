@extends("layouts.fitur")

@section('content')
    <!-- Basic  -->
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Submit Your Proposal</h5>
      <div class="card-body">
        <form action="https://pixinvent.com/upload" class="dropzone needsclick" id="dropzone-basic">
          <div class="dz-message needsclick">
          You can drag and drop file here
            <span class="note needsclick"></span>
          </div>
          <div class="fallback">
            <input name="file" type="file" />
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /Basic  -->
@endsection