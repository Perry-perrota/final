<title>Term Results | Southview Junior School</title>
<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "../home/staff.php";
    header("Location: $url");
}

?>
<?php require_once "../../inc/head.inc.php";

use Phppot\DataSource;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

require_once 'DataSource.php';
$db = new DataSource();
$conn = $db->getConnection();
require_once ('./vendor/autoload.php');

if (isset($_POST["import"])) {

    $allowedFileType = [
        'application/vnd.ms-excel',
        'text/xls',
        'text/xlsx',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
    ];

    if (in_array($_FILES["file"]["type"], $allowedFileType)) {

        $targetPath = 'uploads/' . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);

        $Reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

        $spreadSheet = $Reader->load($targetPath);
        $excelSheet = $spreadSheet->getActiveSheet();
        $spreadSheetAry = $excelSheet->toArray();
        $sheetCount = count($spreadSheetAry);

         for ($i = 0; $i <= $sheetCount; $i ++) {
            $stdname = "";
            if (isset($spreadSheetAry[$i][0])) {
                $stdname = mysqli_real_escape_string($conn, $spreadSheetAry[$i][0]);
            }
            $adm_no = "";
            if (isset($spreadSheetAry[$i][1])) {
                $adm_no = mysqli_real_escape_string($conn, $spreadSheetAry[$i][1]);
            }
            $math="";
            if (isset($spreadSheetAry[$i][2])) {
                $math = mysqli_real_escape_string($conn, $spreadSheetAry[$i][2]);
            }
            $english="";
            if (isset($spreadSheetAry[$i][3])) {
                $english = mysqli_real_escape_string($conn, $spreadSheetAry[$i][3]);
            }
             $kiswahili="";
            if (isset($spreadSheetAry[$i][4])) {
                $kiswahili = mysqli_real_escape_string($conn, $spreadSheetAry[$i][4]);
            }
             $science="";
            if (isset($spreadSheetAry[$i][5])) {
                $science = mysqli_real_escape_string($conn, $spreadSheetAry[$i][5]);
            }
             $religion="";
            if (isset($spreadSheetAry[$i][6])) {
                $religion = mysqli_real_escape_string($conn, $spreadSheetAry[$i][6]);
            }
             $psych="";
            if (isset($spreadSheetAry[$i][7])) {
                $psych = mysqli_real_escape_string($conn, $spreadSheetAry[$i][7]);
            }
             $remarks="";
            if (isset($spreadSheetAry[$i][8])) {
                $remarks = mysqli_real_escape_string($conn, $spreadSheetAry[$i][8]);
            }

            if (! empty($stdname) || ! empty($adm_no) || ! empty($math) || ! empty($english)  || ! empty($kiswahili) || ! empty($science) || ! empty($religion)|| ! empty($remarks)|| ! empty($psych)){
                $query = "insert into academics(name,adm_no,math,english,kiswahili,science,religion,psych,remarks) values(?,?,?,?,?,?,?,?,?)";
                $paramType = "sssssssss";
                $paramArray = array(
                    $stdname,
                    $adm_no,
                    $math,
                    $english,
                    $kiswahili,
                    $science,
                    $religion,
                    $psych,
                    $remarks

                );
                $insertId = $db->insert($query, $paramType, $paramArray);
                

                if (! empty($insertId)) {
                    $type = "success";
                    $message = "Excel Data Imported into the Database";
                } else {
                    $type = "error";
                    $message = "Problem in Importing Excel Data";
                }
            }
        }
    } else {
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
    }
}
?>

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
   <?php require_once "../../inc/staff.inc/sidenav.inc.php";?>
   <!-- Main content -->
   <div class="main-content" id="panel">
   <!-- Topnav -->
   <?php require_once "../../inc/staff.inc/topnav.inc.php";?>
   <!-- Header -->
   <div class="header pb-3 d-flex align-items-center" style="min-height: 350px; background-image: url(../../assets/img/theme/academ.jpg); background-size: cover; background-position: center center;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-7"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
         <div class="row">
            <div class="col-lg-12 col-md-10">
               <h1 class="display-2 text-white" data-aos="slide-right" data-aos-duration="1000">Academics • Result Sheet</h1>
               <p class="text-white mt-0 mb-2" data-aos="slide-right" data-aos-duration="1500">These are the term results. You can upload & view how your students performed in each subject and the total term marks.</p>
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
                                    <p>Upload Results</p>
                                 </div>
                                 <form action="" method="post" name="frmExcelImport"
            id="frmExcelImport" enctype="multipart/form-data">
                                    <div class="custom-file">
                                      <label>Choose Excel File</label> <input type="file"
                    name="file" id="file" accept=".xls,.xlsx">
                                    </div>
                                    <div class="text-center">
                                       <button type="submit" id="submit" name="import"
                    class="btn btn-success mt-5" style="border-radius: 25px;">Import</button>
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
            <p class="text-center">
               <button class="btn btn-md btn-neutral my-1 text-success" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1" style="border-radius: 20px;" data-aos="fade-in" data-aos-duration="3000">
               PP1.
               </button>
               <button class="btn btn-md btn-neutral my-1 text-success" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1" style="border-radius: 20px;" data-aos="fade-in" data-aos-duration="3000">
               PP2.
               </button>
               <button class="btn btn-neutral my-1 text-success" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"style="border-radius: 20px;" data-aos="fade-in" data-aos-duration="3000">
               Grade 1
               </button>
               <button class="btn btn-neutral my-1 text-success" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"style="border-radius: 20px;" data-aos="fade-in" data-aos-duration="3000">
               Grade 2
               </button>
               <button class="btn btn-neutral my-1 text-success" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"style="border-radius: 20px;" data-aos="fade-in" data-aos-duration="3000">
               Grade 3
               </button>
               <button class="btn btn-neutral my-1 text-success" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"style="border-radius: 20px;" data-aos="fade-in" data-aos-duration="3000">
               Grade 4
               </button>
               <button class="btn btn-neutral my-1 text-success" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"style="border-radius: 20px;" data-aos="fade-in" data-aos-duration="3000">
               Grade 5
               </button>
               <button class="btn btn-neutral my-1 text-success" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"style="border-radius: 20px;" data-aos="fade-in" data-aos-duration="3000">
               Grade 6
               </button>
               <button class="btn btn-neutral my-1 text-success" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"style="border-radius: 20px;" data-aos="fade-in" data-aos-duration="3000">
               Grade 7
               </button>
               <button class="btn btn-neutral my-1 text-success" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"style="border-radius: 20px;" data-aos="fade-in" data-aos-duration="3000">
               Grade 8
               </button>
               
            </p>
            <div class="collapse" id="collapseExample1">
               <div class="card mb-7">
                  <!-- Card header -->
                  <div class="card-header border-0">
                     <div class="row">
                        <div class="col-6">
                           <h2 class="mb-0">Pre-School Marklist</h2>
                        </div>
                        <div class="col-12 text-right">
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="modal" data-target="#modal-form" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="ni ni-cloud-upload-96"></i></span>
                           <span type="submit" class="btn-inner--text">Upload</span>
                           </a>
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="tooltip" data-original-title="Download as a PDF" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                           <span type="submit" class="btn-inner--text">Download</span>
                           </a>
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="tooltip" data-original-title="Print your results" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                           <span type="submit" class="btn-inner--text">Print</span>
                           </a>
                        </div>                      
                        <div class="col-6">
                           <h4 class="mb-0">
                              Marklist: 
                              <t class="font-weight-light">...........................................</t>
                           </h4>
                        </div>
                     </div>
                  </div>
                  <!-- Light table -->
                  <div class="table-responsive">
                     <table class="table align-items-center table-flush table-striped">
                        <thead class="thead-light">
                           <tr>
                              <th><b class="text-default">Leaders Name</b></th>
                              <th>Adm. No</th>
                              <th>Math</th>
                              <th>Lang</th>
                              <th>Env</th>
                              <th>Rel</th>
                              <th>Psych & CRT</th>
                              <th>LIT</th>
                              <th><b class="text-default">REMARKS</b></th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
$sqlSelect = "SELECT * FROM academics";
$result = $db->select($sqlSelect);
if (! empty($result)) {
    ?>

 
<?php
    foreach ($result as $row) { // ($row = mysqli_fetch_array($result))
        ?>        
            <tr>
                <td><?php  echo $row['name']; ?></td>
                <td><?php  echo $row['adm_no']; ?></td>
                <td><?php  echo $row['math']; ?></td>
                <td><?php  echo $row['english']; ?></td>
                <td><?php  echo $row['kiswahili']; ?></td>
                <td><?php  echo $row['science']; ?></td>
                <td><?php  echo $row['religion']; ?></td>
                <td><?php  echo $row['psych']; ?></td>
                <td><?php  echo $row['remarks']; ?></td>
            </tr>
<?php
    }
    ?>
        </tbody>
    </table>
<?php
}
?>
            
                     <div class="col-6">
                        <h4 class="mb-0 ml-2">
                           Prepared By: 
                           <t class="font-weight-light">......................................................................................</t>
                        </h4>
                     </div>
                     <br>
                     <div class="col-6">
                        <h4 class="mb-0 ml-2">
                           Class Teacher: 
                           <t class="font-weight-light">...................................................................................</t>
                        </h4>
                     </div>
                     <br>
                  </div>
               </div>
            </div>
            <div class="collapse" id="collapseExample2">
               <div class="card mb-7">
                  <!-- Card header -->
                  <div class="card-header border-0">
                     <div class="row">
                        <div class="col-6">
                           <h2 class="mb-0">Grade 1-4 Marklist</h2>
                        </div>
                        <div class="col-12 text-right">
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="modal" data-target="#modal-form" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="ni ni-cloud-upload-96"></i></span>
                           <span type="submit" class="btn-inner--text">Upload</span>
                           </a>
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="tooltip" data-original-title="Download as a PDF" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                           <span type="submit" class="btn-inner--text">Download</span>
                           </a>
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="tooltip" data-original-title="Print your results" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                           <span type="submit" class="btn-inner--text">Print</span>
                           </a>
                        </div>

                        <div class="col-6">
                           <h4 class="mb-0">
                              Marklist: 
                              <t class="font-weight-light">...........................................</t>
                           </h4>
                        </div>
                     </div>
                  </div>
                  <!-- Light table -->
                  <div class="table-responsive">
                     <table class="table align-items-center table-flush table-striped">
                        <thead class="thead-light">
                           <tr>
                              <th><b class="text-default">Leaders Name</b></th>
                              <th>Math</th>
                              <th>Lang</th>
                              <th>Env</th>
                              <th>Rel</th>
                              <th>Psych & CRT</th>
                              <th>LIT</th>
                              <th><b class="text-default">REMARKS</b></th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                                 <!-- <span class="text-muted">10/09/2018</span> -->
                              </td>
                              <td>
                                 <!-- <a href="#!" class="font-weight-bold">Argon Dashboard PRO</a> -->
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                                 <!-- <span class="text-muted">08/09/2018</span> -->
                              </td>
                              <td>
                                 <!-- <a href="#!" class="font-weight-bold">Argon Design System</a> -->
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                                 <!-- <span class="text-muted">30/08/2018</span> -->
                              </td>
                              <td>
                                 <!-- <a href="#!" class="font-weight-bold">Black Dashboard</a> -->
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <div class="col-6">
                        <h4 class="mb-0 ml-2">
                           Prepared By: 
                           <t class="font-weight-light">......................................................................................</t>
                        </h4>
                     </div>
                     <br>
                     <div class="col-6">
                        <h4 class="mb-0 ml-2">
                           Class Teacher: 
                           <t class="font-weight-light">...................................................................................</t>
                        </h4>
                     </div>
                     <br>
                  </div>
               </div>
            </div>
            <div class="collapse" id="collapseExample3">
               <div class="card mb-7">
                  <!-- Card header -->
                  <div class="card-header border-0">
                     <div class="row">
                        <div class="col-6">
                           <h3 class="mb-0">Upper-Class Marklist</h3>
                        </div>
                        <div class="col-12 text-right">
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="modal" data-target="#modal-form" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="ni ni-cloud-upload-96"></i></span>
                           <span type="submit" class="btn-inner--text">Upload</span>
                           </a>
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="tooltip" data-original-title="Download as a PDF" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                           <span type="submit" class="btn-inner--text">Download</span>
                           </a>
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="tooltip" data-original-title="Print your results" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                           <span type="submit" class="btn-inner--text">Print</span>
                           </a>
                        </div>
                        <div class="col-6">
                           <h4 class="mb-0">
                              Marklist: 
                              <t class="font-weight-light">...........................................</t>
                           </h4>
                        </div>
                     </div>
                  </div>
                  <!-- Light table -->
                  <div class="table-responsive">
                     <table class="table align-items-center table-flush table-striped">
                        <thead class="thead-light">
                           <tr>
                              <th><b class="text-default">Leaders Name</b></th>
                              <th>Math</th>
                              <th>Eng</th>
                              <th>Comp</th>
                              <th>TOT</th>
                              <th>Kisw</th>
                              <th>Insha</th>
                              <th>Jumla</th>
                              <th>SCI</th>
                              <th>SS</th>
                              <th>CRE</th>
                              <th><b class="text-default">Total</b></th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                                 <!-- <span class="text-muted">10/09/2018</span> -->
                              </td>
                              <td>
                                 <!-- <a href="#!" class="font-weight-bold">Argon Dashboard PRO</a> -->
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                                 <!-- <span class="text-muted">08/09/2018</span> -->
                              </td>
                              <td>
                                 <!-- <a href="#!" class="font-weight-bold">Argon Design System</a> -->
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                                 <!-- <span class="text-muted">30/08/2018</span> -->
                              </td>
                              <td>
                                 <!-- <a href="#!" class="font-weight-bold">Black Dashboard</a> -->
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b>Total Marks</b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b>M.S.S</b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b>Position</b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <div class="col-6">
                        <h4 class="mb-0 ml-2">
                           Prepared By: 
                           <t class="font-weight-light">......................................................................................</t>
                        </h4>
                     </div>
                     <hr>
                     <br>
                     <div class="col-6">
                        <h4 class="mb-0 ml-2">
                           Class Teacher: 
                           <t class="font-weight-light">...................................................................................</t>
                        </h4>
                     </div>
                     <hr>
                     <br>
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