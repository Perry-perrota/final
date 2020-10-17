<title>Fees Boarding| Southview Junior School</title>
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
            <div class="col-lg-12 col-md-10 mt--2">
               <h1 class="display-2 text-white" data-aos="slide-right" data-aos-duration="1000">Fees Records • Boarding Scholars</h1>
               <p class="text-white mt-0 mb-2" data-aos="slide-right" data-aos-duration="1500"></p>
               <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                  <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                     <div class="modal-content">
                        <div class="modal-body p-0">
                           <div class="card bg-secondary border-0 mb-0">
                              <div class="card-header bg-transparent pt--6 pb-3">
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
                                    <p>Upload Timetable</p>
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
         <div class="col-lg-12">
            <p class="text-center mt--5">
               <button class="btn btn-md btn-neutral my-1 text-success" type="button" data-toggle="collapse" data-target="#grade-1" aria-expanded="false" aria-controls="grade-1" style="border-radius: 20px;" data-aos="fade-in" data-aos-duration="3000">
               Grade 1
               </button>
               <button class="btn btn-neutral my-1 text-success" type="button" data-toggle="collapse" data-target="#grade-2" aria-expanded="false" aria-controls="grade-2"style="border-radius: 20px;" data-aos="fade-in" data-aos-duration="3000">
               Grade 2
               </button>
               <button class="btn btn-md btn-neutral my-1 text-success" type="button" data-toggle="collapse" data-target="#grade-3" aria-expanded="false" aria-controls="grade-3"style="border-radius: 20px;" data-aos="fade-in" data-aos-duration="3000">
               Grade 3
               </button>
               <button class="btn btn-md btn-neutral my-1 text-success" type="button" data-toggle="collapse" data-target="#grade-4" aria-expanded="false" aria-controls="grade-4"style="border-radius: 20px;" data-aos="fade-in" data-aos-duration="3000">
               Grade 4
               </button>
            </p>
            <p class="text-center">
               <button class="btn btn-md btn-neutral my-1 text-success" type="button" data-toggle="collapse" data-target="#grade-5" aria-expanded="false" aria-controls="grade-5" style="border-radius: 20px;" data-aos="fade-in" data-aos-duration="3000">
               Grade 5
               </button>
               <button class="btn btn-neutral my-1 text-success" type="button" data-toggle="collapse" data-target="#grade-6" aria-expanded="false" aria-controls="grade-6"style="border-radius: 20px;" data-aos="fade-in" data-aos-duration="3000">
               Grade 6
               </button>
               <button class="btn btn-md btn-neutral my-1 text-success" type="button" data-toggle="collapse" data-target="#grade-7" aria-expanded="false" aria-controls="grade-7"style="border-radius: 20px;" data-aos="fade-in" data-aos-duration="3000">
               Grade 7
               </button>
               <button class="btn btn-md btn-neutral my-1 text-success" type="button" data-toggle="collapse" data-target="#grade-8" aria-expanded="false" aria-controls="grade-8"style="border-radius: 20px;" data-aos="fade-in" data-aos-duration="3000">
               Grade 8
               </button>
            </p>
            <div class="collapse" id="grade-5">
               <div class="card mb-7">
                  <div class="card-header border-0">
                     <div class="row">
                        <div class="col-8">
                           <h3 class="display-4 mb-0">Grade 5 <t class="text-success">•</t> Fees Records</h3>
                        </div>
                        <div class="col-12 text-right">
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="modal" data-target="#modal-form" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="ni ni-cloud-upload-96"></i></span>
                           <span type="submit" class="btn-inner--text">Upload</span>
                           </a>
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="tooltip" data-original-title="Download your timetable" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                           <span type="submit" class="btn-inner--text">Download</span>
                           </a>
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="tooltip" data-original-title="Print your timetable" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                           <span type="submit" class="btn-inner--text">Print</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="table-responsive">
                        <table class="table align-items-center table-flush table-striped">
                           <thead class="thead-light">
                              <tr>
                                 <th><b class="text-default">Admission No.</b></th>
                                 <th><b class="text-muted">Pupil's Name</b></th>
                                 <th><b class="text-muted">Arrears</b></th>
                                 <th><b class="text-muted">Billed</b></th>
                                 <th><b class="text-muted">Payments</b></th>
                                 <th><b class="text-muted">Last Pay Date</b></th>
                                 <th><b class="text-muted">Outstanding Balance</b></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
               </div>
            </div>
            <div class="collapse" id="grade-6">
               <div class="card mb-7">
                  <div class="card-header border-0">
                     <div class="row">
                        <div class="col-8">
                           <h3 class="display-4 mb-0">Grade 6 <t class="text-success">•</t> Fees Records</h3>
                        </div>
                        <div class="col-12 text-right">
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="modal" data-target="#modal-form" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="ni ni-cloud-upload-96"></i></span>
                           <span type="submit" class="btn-inner--text">Upload</span>
                           </a>
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="tooltip" data-original-title="Download your timetable" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                           <span type="submit" class="btn-inner--text">Download</span>
                           </a>
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="tooltip" data-original-title="Print your timetable" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                           <span type="submit" class="btn-inner--text">Print</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="table-responsive">
                        <table class="table align-items-center table-flush table-striped">
                           <thead class="thead-light">
                              <tr>
                                 <th><b class="text-default">Admission No.</b></th>
                                 <th><b class="text-muted">Pupil's Name</b></th>
                                 <th><b class="text-muted">Arrears</b></th>
                                 <th><b class="text-muted">Billed</b></th>
                                 <th><b class="text-muted">Payments</b></th>
                                 <th><b class="text-muted">Last Pay Date</b></th>
                                 <th><b class="text-muted">Outstanding Balance</b></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
               </div>
            </div>
            <div class="collapse" id="grade-7">
               <div class="card mb-7">
                  <div class="card-header border-0">
                     <div class="row">
                        <div class="col-8">
                           <h3 class="display-4 mb-0">Grade 7 <t class="text-success">•</t> Fees Records</h3>
                        </div>
                        <div class="col-12 text-right">
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="modal" data-target="#modal-form" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="ni ni-cloud-upload-96"></i></span>
                           <span type="submit" class="btn-inner--text">Upload</span>
                           </a>
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="tooltip" data-original-title="Download your timetable" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                           <span type="submit" class="btn-inner--text">Download</span>
                           </a>
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="tooltip" data-original-title="Print your timetable" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                           <span type="submit" class="btn-inner--text">Print</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="table-responsive">
                        <table class="table align-items-center table-flush table-striped">
                           <thead class="thead-light">
                              <tr>
                                 <th><b class="text-default">Admission No.</b></th>
                                 <th><b class="text-muted">Pupil's Name</b></th>
                                 <th><b class="text-muted">Arrears</b></th>
                                 <th><b class="text-muted">Billed</b></th>
                                 <th><b class="text-muted">Payments</b></th>
                                 <th><b class="text-muted">Last Pay Date</b></th>
                                 <th><b class="text-muted">Outstanding Balance</b></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
               </div>
            </div>
            <div class="collapse" id="grade-8">
               <div class="card mb-7">
                  <div class="card-header border-0">
                     <div class="row">
                        <div class="col-8">
                           <h3 class="display-4 mb-0">Grade 8 <t class="text-success">•</t> Fees Records</h3>
                        </div>
                        <div class="col-12 text-right">
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="modal" data-target="#modal-form" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="ni ni-cloud-upload-96"></i></span>
                           <span type="submit" class="btn-inner--text">Upload</span>
                           </a>
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="tooltip" data-original-title="Download your timetable" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                           <span type="submit" class="btn-inner--text">Download</span>
                           </a>
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="tooltip" data-original-title="Print your timetable" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                           <span type="submit" class="btn-inner--text">Print</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="table-responsive">
                        <table class="table align-items-center table-flush table-striped">
                           <thead class="thead-light">
                              <tr>
                                 <th><b class="text-default">Admission No.</b></th>
                                 <th><b class="text-muted">Pupil's Name</b></th>
                                 <th><b class="text-muted">Arrears</b></th>
                                 <th><b class="text-muted">Billed</b></th>
                                 <th><b class="text-muted">Payments</b></th>
                                 <th><b class="text-muted">Last Pay Date</b></th>
                                 <th><b class="text-muted">Outstanding Balance</b></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="table-year-value">
                                    N/A
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                                 <td>
                                    <span class="text-muted"></span>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
               </div>
            </div>
            <!-- Footer -->
            <section class="mt-8">
               <?php require_once "../../inc/footer.php";?>
            </section>
         </div>
      </div>
   </div>
   <!-- Scripts -->
   <?php require_once "../../inc/scripts.inc.php";?>
</body>