<title>Primaries | Southview Junior School</title>
<?php require_once "../../inc/header.php";?>
<style>
.header::before {
  background-image: url('../../assets/img/theme/class.jpg');
  background-size: cover;
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -2;
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
  opacity: 0.8;
}
</style>
<body class="bg-default">
   <!-- Navbar -->
   <?php require_once "../../inc/navbar.inc.php";?>
   <!-- Main content -->
   <div class="main-content">
      <!-- Header -->
      <div class="header py-7 py-lg-8 pt-lg-9">
         <div class="container">
            <div class="header-body text-center mt-7 mb-6">
               <div class="row justify-content-center">
                  <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                     <h1 class="text-white">A word from the Headmaster</h1>
                     <p class="text-lead text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
               <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
         </div>
      </div>
      <!-- Page content -->
      <div class="container mt--8 mb-7 pb-5">
         <!-- Table -->
         <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8">
               <div class="animated fadeInUp">
                  <div class="nav-wrapper">
                     <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">
                              <!-- i class="ni ni-cloud-upload-96 mr-2"></i> --><strong>Prep School</strong>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">
                              <!-- <i class="ni ni-bell-55 mr-2"></i> --><strong>Primary</strong>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">
                              <!-- <i class="ni ni-calendar-grid-58 mr-2"></i> --><strong>Upper Primary</strong>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="card shadow">
                     <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                           <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                              <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet dictum sit amet justo donec. Enim neque volutpat ac tincidunt vitae semper quis. At tellus at urna condimentum. Auctor urna nunc id cursus metus aliquam eleifend mi. Nec feugiat nisl pretium fusce.<br> Sem viverra aliquet eget sit amet tellus cras adipiscing enim. Tincidunt tortor aliquam nulla facilisi. Urna et pharetra pharetra massa massa ultricies mi. Turpis in eu mi bibendum neque. Id nibh tortor id aliquet lectus. Tincidunt id aliquet risus feugiat in ante metus.</p>
                           </div>
                           <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                              <p class="description">Fringilla ut morbi tincidunt augue interdum velit. Nisl vel pretium lectus quam id leo. Orci eu lobortis elementum nibh tellus molestie. Dolor sit amet consectetur adipiscing elit ut aliquam purus. Diam vel quam elementum pulvinar etiam non quam. Diam donec adipiscing tristique risus nec feugiat in fermentum. Sit amet volutpat consequat mauris nunc. Varius vel pharetra vel turpis nunc eget lorem dolor. Aliquam etiam erat velit scelerisque in. Vel pretium lectus quam id leo in vitae turpis. Tempor commodo ullamcorper a lacus vestibulum sed arcu non. Quis lectus nulla at volutpat diam ut venenatis tellus in. Tincidunt lobortis feugiat vivamus at augue eget. Nam at lectus urna duis. Felis imperdiet proin fermentum leo vel orci porta. Amet aliquam id diam maecenas ultricies mi eget mauris. Adipiscing bibendum est ultricies integer quis auctor elit sed vulputate. Convallis posuere morbi leo urna molestie at elementum. In metus vulputate eu scelerisque. Quisque id diam vel quam.</p>
                           </div>
                           <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                              <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Footer -->
   <?php require_once "../../inc/foot.inc.php";?>
   <!-- Scripts -->
   <?php require_once "../../inc/scripts.inc.php";?>
</body>