<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
   <div class="scrollbar-inner">
      <!-- Brand -->
      <a>
      <img src="../../assets/img/theme/logo.png" class="d-none d-xl-block mt-3 mx-5 shadow" height="150" style="border-radius: 100px;">
      </a>
      <div class="sidenav-header  d-flex align-items-center mt--5 mb-5" >
         <div class=" ml-auto">
            <!-- Sidenav toggler -->
            <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
               <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
               </div>
            </div>
         </div>
      </div>
      <div class="navbar-inner mt--6">
         <!-- Collapse -->
         <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Nav items -->
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link hvr-grow" href="dashboard.accounts.php" role="button" aria-expanded="true" aria-controls="navbar-dashboards">
                  <i class="ni ni-shop text-pink"></i>
                  <span class="nav-link-text">Home</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link hvr-grow" href="biodata.php">
                  <i class="ni ni-single-02 text-primary"></i>
                  <span class="nav-link-text">Staff Details</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link hvr-grow" href="#navbar-finance" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                  <i class="ni ni-money-coins text-success"></i>
                  <span class="nav-link-text">Fees Records</span>
                  </a>
                  <div class="collapse" id="navbar-finance">
                     <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                           <a href="fees_board.php" class="nav-link hvr-grow">
                              <span class="sidenav-mini-icon">
                                 <t class="text-success">•</t>
                              </span>
                              <span class="sidenav-normal"> Boarding Scholars </span>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="fees_day.php" class="nav-link hvr-grow">
                              <span class="sidenav-mini-icon">
                                 <t class="text-purple">•</t>
                              </span>
                              <span class="sidenav-normal"> Day Scholars </span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link hvr-grow" href="admissions.php" role="button" aria-expanded="false" aria-controls="navbar-maps">
                  <i class="ni ni-single-copy-04 text-yellow"></i>
                  <span class="nav-link-text">Admissions</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link hvr-grow" href="email.php" role="button" aria-expanded="false" aria-controls="navbar-tables">
                    <i class="ni ni-email-83 text-danger"></i>
                    <span class="nav-link-text">Email</span>
                  </a>
               </li>
            </ul>
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading p-0 text-muted">
               <span class="docs-normal">More</span>
               <span class="docs-mini">M</span>
            </h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
               <li class="nav-item">
                  <a class="nav-link hvr-grow" href="post.php" target="_blank">
                  <i class="ni ni-ruler-pencil"></i>
                  <span class="nav-link-text">Post Records</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link hvr-grow" href="../home/register.php" target="_blank">
                  <i class="ni ni-circle-08"></i>
                  <span class="nav-link-text">Register Accounts</span>
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</nav>