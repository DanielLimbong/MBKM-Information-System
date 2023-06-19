@extends("layouts.fitur")

@section("content")
    <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">Forms /</span> File upload
</h4>

<div class="row">

    <!-- Multi  -->
    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Startup Campus - Backend Engineer</h5>
        <h6 class="card-header">18 Jul 2022 - 25 Nov 2022</h6>
        <h7 class="card-header">See Details</h7>
        <div class="card-body">
        </div>
      </div>
    </div>
    <!-- Multi  -->

  <!-- Basic  -->
  <h5></h5>
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Surat Pernyataan Tanggung Jawab Mutlak (SPTJM)</h5>
      <h6 class="card-header">Templete SPTJM (download here) then upload the file below</h6>
      <div class="card-body">
        <form action="https://pixinvent.com/upload" class="dropzone needsclick" id="dropzone-basic">
          <div class="dz-message needsclick">
            Drop files here or click to upload
            <span class="note needsclick">(Upload files in pdf format with a maximum size of 10MB)</span>
          </div>
          <div class="fallback">
            <input name="file" type="file" />
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /Basic  -->

</div>

<!-- Collapse -->
<h5></h5>
<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Recommendation from University </h5>
      <h7 class="card-header">as a funding requirement, you need to attach a letter of recommendation or other additional documents from the universityas a funding requirement, you need to attach a letter of recommendation or other additional documents from the university
        <p class="card-text">
        </p>
        <p class="demo-inline-spacing">
          <a class="btn btn-primary me-1" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class= "not  needsclick">
            <input name = "Attach Documents" type = "file"/>Attach documents
          </a>
        </p>
        <div class="collapse" id="collapseExample">
        </div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Final Report</h5>
      <div class="card-body">
        <p class="card-text">The final report can only be uploaded after we have received all of your weekly reports properly.</p>

        <p class="demo-inline-spacing">
          <a class="btn btn-primary me-1" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Upload report</a>
        </p>
        <div class="row">
          <div class="col-12 col-md-6 mb-2 mb-md-0">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <h5></h5>
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Weekly Report</h5>
      <h7 class="card-header">18 - 22 Jul 2022</h7>
      <div class="card-body">
        <p class="card-text">The final report can only be uploaded after we have received all of your weekly reports properly.</p>

        <p class="demo-inline-spacing">
          <a class="btn btn-primary me-1" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Complete Daily Report</a>
          <h7 class="card-body">Weekly reports can only be created after you fill in all daily reports</h7>
        </p>
        <div class="row">
          <div class="col-12 col-md-6 mb-2 mb-md-0">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
            
          </div>
          <!-- / Content -->


@endsection