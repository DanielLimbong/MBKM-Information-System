@extends('layouts.fitur')

@auth
  @section('content')
       <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            
<div class="row">
  <!-- Gamification Card -->
      <div class="col-md-24 col-xl-18">
    <div class="card bg-dark border-0 text-white">
      <img class="card-img" src="{{ ("img/wisuda.jpeg") }}" alt="Card image"/>
      <div class="card-img-overlay">
        <tr>
            <td class="align-middle"><small class="text-light fw-semibold"></small></td>
            <td class="py-3">
              <h1 class="display-2 mb-0 text-white col-7">
                Take positive steps to your future
              </h1>
            </td>
          </tr>
        <p class="card-text h5 text-white text-justify col-6">
          Program Merdeka Belajar – Kampus Merdeka (MBKM) is a program launched by the Kementerian Pendidikan, 
          Kebudayaan, Riset, dan Teknologi Republik Indonesia which aims to encourage students to master various sciences to prepare them to enter the world of work.
        </p>
          <div class="col-md-6 col-xl-3 position-absolute end-0" style="width: rem;">
            <div class="card bg-secondary text-white mb-3">
              <div class="card-header">
                {{ auth()->user()->name }}
              </div>
              <div class="card-body">
                <h5 class="card-title text-white "></h5>
                <p class="card-text">
                  <!-- Some quick example text to build on the card title and make up. -->
                </p>
              </div>
            </div>
          </div>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  </div>
  <!-- / Layout wrapper -->


  <div class="row mb-5">
  <div class="col-md-6 col-lg-4 w-50">
    <h6 class="mt-2 text-muted"></h6>
    <div class="card mb-4">
      <div class="card-body col-50 text-black">
        <p class="card-text h2 text-black">What is Kampus Merdeka?</p>
        <p class="card-text h4 text-black">
          A comprehensive career preparation program to prepare the best generation of Indonesia
        </p>
        <p class="card-text h6 fw-normal text-black">Kampus Merdeka is part of the Merdeka Belajar policy by the Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi Republik Indonesia which 
          provides opportunities for students to hone skills according to their talents and interests by 
          going directly into the world of work as preparation for future careers.</p>
      </div>
    </div>
  <!-- / Layout wrapper -->

  
  <div class="buy-now">
    <a href="https://1.envato.market/frest_admin" target="_blank" class="btn btn-danger btn-buy-now">Help</a>
  </div>
@endsection
@endauth
