<title>News & Updates | Southview Junior School</title>
<?php require_once "../../inc/header.php";?>
<style>
::-moz-selection {
  background: #0ddb83;
  color: #FFF;
}

 ::selection {
  background-color: #0ddb83;
  color: #FFF;
}

.header::before {
  background-image: url('../../assets/img/theme/class.jpg');
  background-size: contain;
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  opacity: 0.8;
}

.header::after {
  background-color: #2dce89;
  content: "";
  display: block;
  position: absolute;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  z-index: -1;
  opacity: 0.7;
}

@media (max-width: 580px) {
  #h1 {
    font-size: 1.5rem !important;
  }
  #p1 {
    font-size: 1rem !important;
  }
  /*.card-body
   {
   padding-left: 1rem !important;
   }*/
  .px-8,
  .py-7 {
    padding: 3rem !important;
  }
}

@media (max-width: 450px) {
  #h1 {
    font-size: 1.5rem !important;
  }
  #p1 {
    font-size: 1rem !important;
  }
  .px-8,
  .py-7 {
    padding: 1.5rem !important;
  }
}

#custCarousel .carousel-indicators {
  position: static;
  margin-top: 20px;
}

#custCarousel .carousel-indicators>li {
  width: 120px;
}

#custCarousel .carousel-indicators li img {
  display: block;
  opacity: 0.5;
}

#custCarousel .carousel-indicators li.active img {
  opacity: 1;
}

#custCarousel .carousel-indicators li:hover img {
  opacity: 0.75;
}
</style>
<body style="background-color: #F5F5F5">
   <!-- Navbar -->
   <?php require_once "../../inc/navbar.inc.php";?>
   <!-- Main content -->
   <div class="main-content">
   <!-- Header -->
   <div class="header py-6 py-lg-8 pt-lg-6">
      <div class="container">
         <div class="header-body text-center mt-8 mb-8">
            <div class="row justify-content-center">
               <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                  <div class="animated zoomIn">
                     <h1 id="h1" class="text-white display-2">Get the latest News & Updates</h1>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
         <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon style="fill: #F5F5F5;" points="2560 0 2560 100 0 100"></polygon>
         </svg>
      </div>
   </div>
   <!-- Page content -->
   <div class="container mt--7 pb-4">
      <!-- Table -->
      <section id="curriculum">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
                     <!-- slides -->
                     <div class="carousel-inner col-lg-12">
                        <div class="carousel-item active">
                           <img src="https://www.aljazeera.com/mritems/imagecache/mbdxxlarge/mritems/Images/2020/7/23/74a9b9f90a524e108c07747c082b10b3_18.jpg" style="border-radius: 0.5rem;" alt="Hills" width="720" height="440"> <br><br> <span class="badge badge-pill badge-info">Jun 10</span> 
                           <h3 class="col-8 display-5 mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h3>
                        </div>
                        <div class="carousel-item">
                           <img src="../../assets/img/theme/image-2.jpeg" style="border-radius: 0.5rem;" alt="Hills" width="720" height="440"> <br><br> <span class="badge badge-pill badge-success">Jun 10</span> 
                           <h3 class="col-8 display-5 mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h3>
                        </div>
                        <div class="carousel-item">
                           <img src="../../assets/img/theme/img-2.jpg" style="border-radius: 0.5rem;" alt="Hills" width="720" height="440"> <br><br> <span class="badge badge-pill badge-warning">Jul 24</span> 
                           <h3 class="col-8 display-5 mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h3>
                        </div>
                        <div class="carousel-item">
                           <img src="../../assets/img/theme/img-3.jpg" style="border-radius: 0.5rem;" alt="Hills" width="720" height="440"> <br><br> <span class="badge badge-pill badge-success">Aug 1</span> 
                           <h3 class="col-8 display-5 mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h3>
                        </div>
                     </div>
                     <!-- Left right --> <a class="carousel-control-prev" href="#custCarousel" data-slide="prev"> <span class="avatar rounded-circle bg-success" style=" border: 0px;border-radius: 24px;"><i class="ni ni-lg ni-bold-left text-white"></i></span> </a> <a class="carousel-control-next" href="#custCarousel" data-slide="next"> <span class="avatar rounded-circle bg-success" style=" border: 0px;border-radius: 24px;"><i class="ni ni-lg ni-bold-right text-white"></i></span></a> <!-- Thumbnails -->
                     <ol class="carousel-indicators list-inline">
                        <li class="list-inline-item active"> <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel"> <img src="https://www.aljazeera.com/mritems/imagecache/mbdxxlarge/mritems/Images/2020/7/23/74a9b9f90a524e108c07747c082b10b3_18.jpg" class="img-fluid"> </a> </li>
                        <li class="list-inline-item"> <a id="carousel-selector-1" data-slide-to="1" data-target="#custCarousel"> <img src="../../assets/img/theme/image-2.jpeg" class="img-fluid"> </a> </li>
                        <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="2" data-target="#custCarousel"> <img src="../../assets/img/theme/img-2.jpg" class="img-fluid"> </a> </li>
                        <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="3" data-target="#custCarousel"> <img src="../../assets/img/theme/img-3.jpg" class="img-fluid"> </a> </li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
   <!-- Footer -->
   <?php require_once "../../inc/foot.inc.php";?>
   <!-- Scripts -->
   <?php require_once "../../inc/scripts.inc.php";?>
</body>