<title>My Diary | Southview Junior School</title>
<!-- Page plugins -->
<link rel="stylesheet" href="../../assets/vendor/fullcalendar/dist/fullcalendar.min.css">
<link rel="stylesheet" href="../../assets/vendor/sweetalert2/dist/sweetalert2.min.css">
<script src="../../assets/js/diary.js"></script>
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
      <div class="header pb-3 d-flex align-items-center" style="min-height: 350px; background-image: url(../../assets/img/theme/diary.jpg); background-size: cover; background-position: center top;">
         <!-- Mask -->
         <span class="mask bg-gradient-default opacity-7"></span>
         <!-- Header container -->
         <div class="container-fluid d-flex align-items-center">
            <div class="row">
               <div class="col-lg-6 col-md-10">
                  <h1 class="display-2 text-white" data-aos="slide-right" data-aos-duration="1000">My Diary</h1>
                  <p class="text-white mt-0 mb-2" data-aos="slide-right" data-aos-duration="1500">This is a place where you record events, experiences and other personal things that interest you. You can write about whatever you like, free of outside judgment or criticism. It should be an extension of your mind: safe and free.</p>
               </div>
            </div>
         </div>
      </div>
      <!-- Page content -->
      <div class="container-fluid mt--6">
         <div class="row justify-content-center">
            <div class="col-lg-12">
               <!-- Fullcalendar -->
               <div class="card card-calendar" data-aos="slide-up" data-aos-duration="1000">
                  <!-- Card header -->
                  <div class="card-header">
                     <!-- Title -->
                     <div class="col-md-10 text-lg-right">
                        <h6 class="fullcalendar-title h2 display-4 text-success d-inline-block mr-9 mb-0">{{titleCalendar}}</h6>
                        <a href="#" class="fullcalendar-btn-prev btn btn-sm btn-success" style="border-radius: 15px;">
                        <i class="fas fa-angle-left"></i>
                        </a>
                        <a href="#" class="fullcalendar-btn-next btn btn-sm btn-success" style="border-radius: 15px;">
                        <i class="fas fa-angle-right"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-success" style="border-radius: 15px;" data-calendar-view="month">Month</a>
                        <a href="#" class="btn btn-sm btn-success" style="border-radius: 15px;"data-calendar-view="basicWeek">Week</a>
                        <a href="#" class="btn btn-sm btn-success" style="border-radius: 15px;"data-calendar-view="basicDay">Day</a>
                     </div>
                  </div>
                  <!-- Card body -->
                  <div class="card-body p-0">
                     <div class="calendar" data-toggle="calendar" id="calendar"></div>
                  </div>
               </div>
               <!-- Modal - Add new event -->
               <!--* Modal header *-->
               <!--* Modal body *-->
               <!--* Modal footer *-->
               <!--* Modal init *-->
               <div class="modal fade" id="new-event" tabindex="-1" role="dialog" aria-labelledby="new-event-label" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-secondary" role="document">
                     <div class="modal-content">
                        <!-- Modal body -->
                        <div class="modal-body">
                           <form class="new-event--form">
                              <div class="form-group">
                                 <label class="form-control-label">Event title</label>
                                 <input type="text" class="form-control form-control-alternative new-event--title" placeholder="Event Title">
                              </div>
                              <div class="form-group mb-0">
                                 <label class="form-control-label d-block mb-3">Status color</label>
                                 <div class="btn-group btn-group-toggle btn-group-colors event-tag" data-toggle="buttons">
                                    <label class="btn bg-danger"><input type="radio" name="event-tag" value="bg-danger" autocomplete="off"></label>
                                    <label class="btn bg-warning"><input type="radio" name="event-tag" value="bg-warning" autocomplete="off"></label>
                                    <label class="btn bg-yellow"><input type="radio" name="event-tag" value="bg-yellow" autocomplete="off"></label>
                                    <label class="btn bg-success"><input type="radio" name="event-tag" value="bg-success" autocomplete="off"></label>
                                    <label class="btn bg-info active"><input type="radio" name="event-tag" value="bg-info" autocomplete="off" checked></label>
                                    <label class="btn bg-primary"><input type="radio" name="event-tag" value="bg-primary" autocomplete="off"></label>
                                    <label class="btn bg-purple"><input type="radio" name="event-tag" value="bg-purple" autocomplete="off"></label>
                                    <label class="btn bg-default"><input type="radio" name="event-tag" value="bg-default" autocomplete="off"></label>
                                 </div>
                              </div>
                              <input type="hidden" class="new-event--start" />
                              <input type="hidden" class="new-event--end" />
                           </form>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                           <button type="submit" class="btn btn-primary new-event--add">Add event</button>
                           <button type="button" class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Modal - Edit event -->
               <!--* Modal body *-->
               <!--* Modal footer *-->
               <!--* Modal init *-->
               <div class="modal fade" id="edit-event" tabindex="-1" role="dialog" aria-labelledby="edit-event-label" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-secondary" role="document">
                     <div class="modal-content">
                        <!-- Modal body -->
                        <div class="modal-body">
                           <form class="edit-event--form">
                              <div class="form-group">
                                 <label class="form-control-label">Event title</label>
                                 <input type="text" class="form-control form-control-alternative edit-event--title" placeholder="Event Title">
                              </div>
                              <div class="form-group">
                                 <label class="form-control-label d-block mb-3">Status color</label>
                                 <div class="btn-group btn-group-toggle btn-group-colors event-tag mb-0" data-toggle="buttons">
                                    <label class="btn bg-danger"><input type="radio" name="event-tag" value="bg-danger" autocomplete="off"></label>
                                    <label class="btn bg-warning"><input type="radio" name="event-tag" value="bg-warning" autocomplete="off"></label>
                                    <label class="btn bg-yellow"><input type="radio" name="event-tag" value="bg-yellow" autocomplete="off"></label>
                                    <label class="btn bg-success"><input type="radio" name="event-tag" value="bg-success" autocomplete="off"></label>
                                    <label class="btn bg-info active"><input type="radio" name="event-tag" value="bg-info" autocomplete="off" checked></label>
                                    <label class="btn bg-primary"><input type="radio" name="event-tag" value="bg-primary" autocomplete="off"></label>
                                    <label class="btn bg-purple"><input type="radio" name="event-tag" value="bg-purple" autocomplete="off"></label>
                                    <label class="btn bg-default"><input type="radio" name="event-tag" value="bg-default" autocomplete="off"></label>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="form-control-label">Description</label>
                                 <textarea class="form-control form-control-alternative edit-event--description textarea-autosize" placeholder="Event Desctiption"></textarea>
                                 <i class="form-group--bar"></i>
                              </div>
                              <input type="hidden" class="edit-event--id">
                           </form>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                           <button class="btn btn-primary" data-calendar="update">Update</button>
                           <button class="btn btn-danger" data-calendar="delete">Delete</button>
                           <button class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Footer -->
         <?php require_once "../../inc/footer.php";?>
      </div>
   </div>
   <!-- Scripts -->
   <script src="../../assets/vendor/jquery/jquery.min.js"></script>
   <script src="../../assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
   <script src="../../assets/vendor/bootstrap-notify/bootstrap-notify.min.js"></script>
   <script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
   <script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
   <script src="../../assets/vendor/jquery-scroll-lock/jquery-scrollLock.min.js"></script>
   <!-- Optional JS -->
   <script src="../../assets/vendor/moment/min/moment.min.js"></script>
   <script src="../../assets/vendor/fullcalendar/dist/fullcalendar.min.js"></script>
   <script src="../../assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
   <script src="../../assets/js/argon.min.js"></script>
   <script src="../../assets/js/argon.js"></script>
   <!-- Argon JS -->
   <script src="../../assets/js/argon.js"></script>
   <script src="../../assets/js/aos.js"></script>
   <script>
      AOS.init({
       once: true
      })
   </script>
</body>