@extends('admin.template')

@section('title', 'Home')

@section('content')
    <div class="col-md-8 position-fixed main" style="overflow: scroll;">
      <h3>SISKA</h3><hr class="bg-primary"> 
      <div class="row text-white ms-2">
        <div class="card bg-primary m-2" style="width: 15rem;">
         <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <div class="display-4">18</div>
           <h5 class="card-title">Wilayah Dusun</h5>
          <a href="/admin/wilayah_desa"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right"></i></p></a>
         </div>
      </div>
       <div class="card bg-info m-2" style="width: 15rem;">
         <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-user"></i>
          </div>
          <div class="display-4">10338</div>
           <h5 class="card-title">Penduduk</h5>
          <a href="#"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right"></i></p></a>
         </div>
      </div>
       <div class="card bg-success m-2" style="width: 15rem;">
         <div class="card-body">
          <div class="card-body-icon">
           <i class="fas fa-users"></i>
          </div>
          <div class="display-4">5338</div>
           <h5 class="card-title">Keluarga</h5>
          <a href="#"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right"></i></p></a>
         </div>
      </div>
       <div class="card bg-danger m-2" style="width: 15rem;">
         <div class="card-body">
          <div class="card-body-icon">
              <i class="fas fa-book"></i>
          </div>
          <div class="display-4">5338</div>
           <h5 class="card-title">Surat Tercetak</h5>
          <a href="#"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right"></i></p></a>
         </div>
      </div>
        <div class="card bg-primary m-2" style="width: 10em">
         <div class="card-body">
          <div class="card-body-icon">
              <i class="fas fa-user-friends"></i>
          </div>
          <div class="display-4">0</div>
           <h5 class="card-title">Kelompok</h5>
          <a href="#"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right"></i></p></a>
         </div>
      </div>
      <div class="card bg-secondary m-2" style="width: 10em;">
         <div class="card-body">
          <div class="card-body-icon">
              <i class="fas fa-home"></i>
          </div>
          <div class="display-4">1</div>
           <h5 class="card-title">Rumah Tangga</h5>
          <a href="#"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right"></i></p></a>
         </div>
      </div>
      <div class="card bg-warning m-2" style="width: 10em;">
         <div class="card-body">
          <div class="card-body-icon">
              <i class="fas fa-project-diagram"></i>
          </div>
          <div class="display-4">6</div>
           <h5 class="card-title">BPNT</h5>
          <a href="#"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right"></i></p></a>
         </div>
      </div>
     </div>
  </div
@endsection