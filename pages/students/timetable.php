<title>Class Timetable | Southview Junior School</title>
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
   <?php require_once "../../inc/students.inc/sidenav.inc.php";?>
   <!-- Main content -->
   <div class="main-content" id="panel">
   <!-- Topnav -->
   <?php require_once "../../inc/students.inc/topnav.inc.php";?>
   <!-- Header -->
   <div class="header pb-3 d-flex align-items-center" style="min-height: 350px; background-image: url(../../assets/img/theme/board.jpg); background-size: contain; background-position: center center;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-7"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
         <div class="row">
            <div class="col-lg-12 col-md-10">
               <h1 class="display-2 text-white" data-aos="slide-right" data-aos-duration="1000">Class timetable</h1>
               <p class="text-white mt-0 mb-2" data-aos="slide-right" data-aos-duration="1500">This is your class timetable. We recommend that you attend every class!</p>
            </div>
         </div>
      </div>
   </div>
   <!-- Page content -->
   <div class="container-fluid mt--6">
      <div class="row justify-content-center">
         <div class="col-lg-12">
            <div data-aos="slide-up" data-aos-duration="1000">
               <div class="card">
                  <div class="card-header border-0">
                     <div class="row">
                        <div class="col-6">
                           <h3 class="mb-0">Timetable</h3>
                        </div>
                        <div class="col-12 text-right">
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
                     <table class="table table-bordered text-center">
                        <thead>
                           <tr class="bg-light-gray">
                              <th class="text-uppercase">Time
                              </th>
                              <th class="text-uppercase">Monday</th>
                              <th class="text-uppercase">Tuesday</th>
                              <th class="text-uppercase">Wednesday</th>
                              <th class="text-uppercase">Thursday</th>
                              <th class="text-uppercase">Friday</th>
                              <th class="text-uppercase">Saturday</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="align-middle">5:30am</td>
                              <td>
                                 <span class="bg-light padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">Prep Time</span>
                                 <div class="margin-10px-top font-size14">5:30-7:00</div>
                              </td>
                              <td>
                                 <span class="bg-light padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Prep Time</span>
                                 <div class="margin-10px-top font-size14">5:30-7:00</div>
                              </td>
                              <td>
                                 <span class="bg-light padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">Prep Time</span>
                                 <div class="margin-10px-top font-size14">5:30-7:00</div>
                              </td>
                              <td>
                                 <span class="bg-light padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Prep Time</span>
                                 <div class="margin-10px-top font-size14">5:30-7:00</div>
                              </td>
                              <td>
                                 <span class="bg-light padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Prep Time</span>
                                 <div class="margin-10px-top font-size14">5:30-7:00</div>
                              </td>
                              <td>
                                 <span class="bg-light padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Prep Time</span>
                                 <div class="margin-10px-top font-size14">5:30-7:00</div>
                              </td>
                           </tr>
                           <tr>
                              <td class="align-middle">09:00am</td>
                              <td>
                                 <span class="bg-primary padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">Mathematics</span>
                                 <div class="margin-10px-top font-size14">9:00-10:00</div>
                                 <div class="font-size13 text-light-gray">Mr. Tony</div>
                              </td>
                              <td>
                                 <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Kiswahili</span>
                                 <div class="margin-10px-top font-size14">9:00-10:00</div>
                                 <div class="font-size13 text-light-gray">Mrs. Beatrice</div>
                              </td>
                              <td>
                                 <span class="bg-primary padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">Mathematics</span>
                                 <div class="margin-10px-top font-size14">9:00-10:00</div>
                                 <div class="font-size13 text-light-gray">Mr. Tony</div>
                              </td>
                              <td>
                                 <span class="bg-primary padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Mathematics</span>
                                 <div class="margin-10px-top font-size14">9:00-10:00</div>
                                 <div class="font-size13 text-light-gray">Mr.Tony</div>
                              </td>
                              <td>
                                 <span class="bg-danger padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">English</span>
                                 <div class="margin-10px-top font-size14">10:00-11:00</div>
                                 <div class="font-size13 text-light-gray">Mrs. Sharon</div>
                              </td>
                              <td>
                                 <span class="bg-info padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Sports</span>
                                 <div class="margin-10px-top font-size14">9:00-10:00</div>
                                 <div class="font-size13 text-light-gray">Mr. Reuben</div>
                              </td>
                           </tr>
                           <tr>
                              <td class="align-middle">10:00am</td>
                              <td>
                                 <span class="bg-success padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Science</span>
                                 <div class="margin-10px-top font-size14">10:00-11:00</div>
                                 <div class="font-size13 text-light-gray">Mr. Ben</div>
                              </td>
                              <td class="bg-light-gray">
                                 <span class="bg-danger padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">English</span>
                                 <div class="margin-10px-top font-size14">10:00-11:00</div>
                                 <div class="font-size13 text-light-gray">Mrs. Sharon</div>
                              </td>
                              <td>
                                 <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">SST</span>
                                 <div class="margin-10px-top font-size14">10:00-11:00</div>
                                 <div class="font-size13 text-light-gray">Mr. James</div>
                              </td>
                              <td>
                                 <span class="bg-primary padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Mathematics</span>
                                 <div class="margin-10px-top font-size14">10:00-11:00</div>
                                 <div class="font-size13 text-light-gray">Mr. Tony</div>
                              </td>
                              <td>
                                 <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Kiswahili</span>
                                 <div class="margin-10px-top font-size14">10:00-11:00</div>
                                 <div class="font-size13 text-light-gray">Mrs. Beatrice</div>
                              </td>
                              <td class="bg-light-gray">
                              </td>
                           </tr>
                           <tr>
                              <td class="align-middle">11:00am</td>
                              <td>
                                 <span class="bg-info padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                                 <div class="margin-10px-top font-size14">11:00-12:00</div>
                              </td>
                              <td>
                                 <span class="bg-info padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                                 <div class="margin-10px-top font-size14">11:00-12:00</div>
                              </td>
                              <td>
                                 <span class="bg-info padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                                 <div class="margin-10px-top font-size14">11:00-12:00</div>
                              </td>
                              <td>
                                 <span class="bg-info padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                                 <div class="margin-10px-top font-size14">11:00-12:00</div>
                              </td>
                              <td>
                                 <span class="bg-info padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                                 <div class="margin-10px-top font-size14">11:00-12:00</div>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="align-middle">12:00pm</td>
                              <td class="bg-light-gray">
                                 <span class="bg-primary padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Mathematics</span>
                                 <div class="margin-10px-top font-size14">12:00-1:00</div>
                                 <div class="font-size13 text-light-gray">Mr. Tony</div>
                              </td>
                              <td>
                                 <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Kiswahili</span>
                                 <div class="margin-10px-top font-size14">12:00-1:00</div>
                                 <div class="font-size13 text-light-gray">Mrs. Beatrice</div>
                              </td>
                              <td>
                                 <span class="bg-danger padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">English</span>
                                 <div class="margin-10px-top font-size14">12:00-1:00</div>
                                 <div class="font-size13 text-light-gray">Mrs. Sharon</div>
                              </td>
                              <td>
                                 <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">SST</span>
                                 <div class="margin-10px-top font-size14">12:00-1:00</div>
                                 <div class="font-size13 text-light-gray">Mr. James</div>
                              </td>
                              <td>
                                 <span class="bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">RE</span>
                                 <div class="margin-10px-top font-size14">12:00-1:00</div>
                                 <div class="font-size13 text-light-gray">Mrs. Rita</div>
                              </td>
                           </tr>
                           <tr>
                              <td class="align-middle">01:00pm</td>
                              <td>
                                 <span class="bg-warning padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Lunch</span>
                                 <div class="margin-10px-top font-size14">1:00-2:00</div>
                                 <div class="font-size13 text-light-gray">Mrs. Rita</div>
                              </td>
                              <td>
                                 <span class="bg-warning padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Lunch</span>
                                 <div class="margin-10px-top font-size14">1:00-2:00</div>
                              </td>
                              <td class="bg-light-gray">
                                 <span class="bg-warning padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Lunch</span>
                                 <div class="margin-10px-top font-size14">1:00-2:00</div>
                              </td>
                              <td>
                                 <span class="bg-warning padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Lunch</span>
                                 <div class="margin-10px-top font-size14">1:00-2:00</div>
                              </td>
                              <td>
                                 <span class="bg-warning padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Lunch</span>
                                 <div class="margin-10px-top font-size14">1:00-2:00</div>
                              </td>
                              <td class="bg-light-gray">
                              </td>
                           </tr>
                           <tr>
                              <td class="align-middle">02:00pm</td>
                              <td>
                                 <span class="bg-success padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Science</span>
                                 <div class="margin-10px-top font-size14">2:00-3:00</div>
                                 <div class="font-size13 text-light-gray">Mr. Ben</div>
                              </td>
                              <td>
                                 <span class="bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">RE</span>
                                 <div class="margin-10px-top font-size14">2:00-3:00</div>
                                 <div class="font-size13 text-light-gray">Mrs. Rita</div>
                              </td>
                              <td class="bg-light-gray">
                                 <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Kiswahili</span>
                                 <div class="margin-10px-top font-size14">12:00-1:00</div>
                                 <div class="font-size13 text-light-gray">Mrs. Beatrice</div>
                              </td>
                              <td>
                                 <span class="bg-success padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Science</span>
                                 <div class="margin-10px-top font-size14">2:00-3:00</div>
                                 <div class="font-size13 text-light-gray">Mr. Ben</div>
                              </td>
                              <td>
                                 <span class="bg-info padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Sports</span>
                                 <div class="margin-10px-top font-size14">2:00-3:00</div>
                                 <div class="font-size13 text-light-gray">Mr. Reuben</div>
                              </td>
                              <td class="bg-light-gray">
                              </td>
                           </tr>
                           <tr>
                              <td class="align-middle">03:00pm</td>
                              <td>
                                 <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">SST</span>
                                 <div class="margin-10px-top font-size14">3:00-4:00</div>
                                 <div class="font-size13 text-light-gray">Mr. James</div>
                              </td>
                              <td>
                                 <span class="bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">RE</span>
                                 <div class="margin-10px-top font-size14">3:00-4:00</div>
                                 <div class="font-size13 text-light-gray">Mrs. Rita</div>
                              </td>
                              <td class="bg-light-gray">
                                 <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">SST</span>
                                 <div class="margin-10px-top font-size14">3:00-4:00</div>
                                 <div class="font-size13 text-light-gray">Mr. James</div>
                              </td>
                              <td>
                                 <span class="bg-success padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Science</span>
                                 <div class="margin-10px-top font-size14">3:00-4:00</div>
                                 <div class="font-size13 text-light-gray">Mr. Ben</div>
                              </td>
                              <td>
                                 <span class="bg-info padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Sports</span>
                                 <div class="margin-10px-top font-size14">3:00-4:00</div>
                                 <div class="font-size13 text-light-gray">Mr. Reuben</div>
                              </td>
                              <td class="bg-light-gray">
                              </td>
                           </tr>
                           <tr>
                              <td class="align-middle">7:00pm</td>
                              <td>
                                 <span class="bg-light padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">Prep Time</span>
                                 <div class="margin-10px-top font-size14">7:00-9:00</div>
                              </td>
                              <td>
                                 <span class="bg-light padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Prep Time</span>
                                 <div class="margin-10px-top font-size14">7:00-9:00</div>
                              </td>
                              <td>
                                 <span class="bg-light padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">Prep Time</span>
                                 <div class="margin-10px-top font-size14">7:00-9:00</div>
                              </td>
                              <td>
                                 <span class="bg-light padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Prep Time</span>
                                 <div class="margin-10px-top font-size14">7:00-9:00</div>
                              </td>
                              <td>
                                 <span class="bg-light padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Prep Time</span>
                                 <div class="margin-10px-top font-size14">7:00-9:00</div>
                              </td>
                              <td>
                                 <span class="bg-light padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Prep Time</span>
                                 <div class="margin-10px-top font-size14">7:00-9:00</div>
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
   </div>
   <!-- Scripts -->
   <?php require_once "../../inc/scripts.inc.php";?>
</body>