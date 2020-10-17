<title>Class Attendance | Southview Junior School</title>
<?php require_once "../../inc/head.inc.php";?>
<style>
  ::-moz-selection {
    background: #0ddb83;
    color: #FFF;
  }

  ::selection {
    background-color: #0ddb83;
    color: #FFF;
  }
</style>
<body style="background-color: #F5F5F5">
   <!-- Sidenav -->
   <?php require_once "../../inc/accounts.inc/sidenav.inc.php";?>
   <!-- Main content -->
   <div class="main-content" id="panel">
   <!-- Topnav -->
   <?php require_once "../../inc/accounts.inc/topnav.inc.php";?>
   <!-- Header -->
   <div class="header pb-3 d-flex align-items-center" style="min-height: 350px; background-image: url(../../assets/img/theme/accounts.jpg); background-size: cover; background-position: center bottom;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-7"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
         <div class="row">
            <div class="col-lg-12 col-md-10">
               <h1 class="display-2 text-white" data-aos="slide-right" data-aos-duration="1000">Class Attendance</h1>
               <p class="text-white mt-0 mb-2" data-aos="slide-right" data-aos-duration="1500">Class attendance is an important part of the academic process and should be considered both a privilege and a responsibility.</p>
               <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                  <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                     <div class="modal-content">
                        <div class="modal-body p-0">
                           <div class="card bg-secondary border-0 mb-0">
                              <div class="card-header bg-transparent pt--6 pb-3">
                                 <!-- <div class="text-muted text-center mt-2 mb-3"><small>....</small></div> -->
                                 <div class="btn-wrapper text-center">
                                    <div class="text-center">
                                       <span class="shortcut-media avatar avatar-lg rounded-circle bg-success">
                                       <i class="ni ni-lg ni-cloud-upload-96"></i>
                                       </span>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-body px-lg-5 py-lg-5">
                                 <div class="text-center text-muted mb-4">
                                    <p>Upload Document</p>
                                 </div>
                                 <form>
                                    <div class="custom-file">
                                       <input type="file" class="custom-file-input" id="customFileLang" lang="en">
                                       <label class="custom-file-label" for="customFileLang">Select file</label>
                                    </div>
                                    <div class="text-center">
                                       <button type="submit" class="btn btn-success mt-5" style="border-radius: 25px;">Submit</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Page content -->
   <div class="container-fluid mt--6">
   <div class="row justify-content-center">
      <div class="col-lg-10">
         <div data-aos="slide-up" data-aos-duration="1000">
            <div class="card">
               <!-- Card header -->
               <div class="card-header border-0">
                  <div class="row">
                     <div class="col-6">
                        <h3 class="mb-0">Attendance List</h3>
                     </div>
                     <div class="col-6 text-right">
                        <!-- Search form -->
                        <form class="navbar-search navbar-search-dark form-inline ml--8 mr-sm-6" id="navbar-search-main">
                           <div class="form-group mb-0">
                              <div class="input-group input-group-alternative input-group-merge">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                 </div>
                                 <input class="form-control" placeholder="Search" type="text">
                              </div>
                           </div>
                           <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                           <span aria-hidden="true">×</span>
                           </button>
                        </form>
                     </div>
                  </div>
               </div>
               <!-- Light table -->
               <div class="table-responsive">
                  <table class="table align-items-center table-flush table-striped">
                     <thead class="thead-light">
                        <tr>
                           <th>Names</th>
                           <th>Created at</th>
                           <!-- <th>Merits</th> -->
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td class="table-user">
                              <!-- <img src="../../assets/img/theme/team-1.jpg" class="avatar rounded-circle mr-3"> -->
                              <b>John Michael</b>
                           </td>
                           <td>
                              <span class="text-muted">10/09/2020</span>
                           </td>
                           <td class="table-actions">
                              <a href="#!" class="table-action" data-toggle="modal" data-target="#modal-form">
                              <i class="ni ni-cloud-upload-96"></i>
                              </a>
                              <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit data">
                              <i class="fas fa-user-edit"></i>
                              </a>
                              <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete data">
                              <i class="fas fa-trash"></i>
                              </a>
                           </td>
                        </tr>
                        <tr>
                           <td class="table-user">
                              <!-- <img src="../../assets/img/theme/team-2.jpg" class="avatar rounded-circle mr-3"> -->
                              <b>Alex Smith</b>
                           </td>
                           <td>
                              <span class="text-muted">08/09/2020</span>
                           </td>
                           <td class="table-actions">
                              <a href="#!" class="table-action" data-toggle="modal" data-target="#modal-form">
                              <i class="ni ni-cloud-upload-96"></i>
                              </a>
                              <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit data">
                              <i class="fas fa-user-edit"></i>
                              </a>
                              <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete data">
                              <i class="fas fa-trash"></i>
                              </a>
                           </td>
                        </tr>
                        <tr>
                           <td class="table-user">
                              <!-- <img src="../../assets/img/theme/team-3.jpg" class="avatar rounded-circle mr-3"> -->
                              <b>Samantha Ivy</b>
                           </td>
                           <td>
                              <span class="text-muted">30/08/2020</span>
                           </td>
                           <td class="table-actions">
                              <a href="#!" class="table-action" data-toggle="modal" data-target="#modal-form">
                              <i class="ni ni-cloud-upload-96"></i>
                              </a>
                              <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit data">
                              <i class="fas fa-user-edit"></i>
                              </a>
                              <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete data">
                              <i class="fas fa-trash"></i>
                              </a>
                           </td>
                        </tr>
                        <tr>
                           <td class="table-user">
                              <!-- <img src="../../assets/img/theme/team-1.jpg" class="avatar rounded-circle mr-3"> -->
                              <b>John Michael</b>
                           </td>
                           <td>
                              <span class="text-muted">10/09/2020</span>
                           </td>
                           <td class="table-actions">
                              <a href="#!" class="table-action" data-toggle="modal" data-target="#modal-form">
                              <i class="ni ni-cloud-upload-96"></i>
                              </a>
                              <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit data">
                              <i class="fas fa-user-edit"></i>
                              </a>
                              <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete data">
                              <i class="fas fa-trash"></i>
                              </a>
                           </td>
                        </tr>
                        <tr>
                           <td class="table-user">
                              <!-- <img src="../../assets/img/theme/team-2.jpg" class="avatar rounded-circle mr-3"> -->
                              <b>John Michael</b>
                           </td>
                           <td>
                              <span class="text-muted">10/09/2020</span>
                           </td>
                           <td class="table-actions">
                              <a href="#!" class="table-action" data-toggle="modal" data-target="#modal-form">
                              <i class="ni ni-cloud-upload-96"></i>
                              </a>
                              <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit data">
                              <i class="fas fa-user-edit"></i>
                              </a>
                              <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete data">
                              <i class="fas fa-trash"></i>
                              </a>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <!-- Footer -->
         <?php require_once "../../inc/footer.php";?>
      </div>
   </div>
   <!-- Scripts -->
   <?php require_once "../../inc/scripts.inc.php";?>
</body>