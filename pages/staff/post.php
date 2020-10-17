<title>Post | Southview Junior School</title>
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
   <?php require_once "../../inc/staff.inc/sidenav.inc.php";?>
   <!-- Main content -->
   <div class="main-content" id="panel">
   <!-- Topnav -->
   <?php require_once "../../inc/staff.inc/topnav.inc.php";?>
   <!-- Header -->
   <div class="header pb-3 d-flex align-items-center" style="min-height: 350px; background-image: url(https://www.learnupon.com/wp-content/uploads/assignments720.png); background-size: contain; background-position: center center;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-5"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
         <div class="row">
            <div class="col-lg-12 col-md-10">
               <h1 class="display-2 text-white" data-aos="slide-right" data-aos-duration="1000">Post Assignments</h1>
               <p class="text-white mt-0 mb-2" data-aos="slide-right" data-aos-duration="1500">Text goes here. Text goes here. Text goes here. Text goes here.</strong></p>
            </div>
         </div>
      </div>
   </div>
   <!-- Page content -->
   <div class="container-fluid mt--4">
   <div class="row justify-content-center">
   <div class="col-lg-6">
      <div data-aos="slide-up" data-aos-duration="1000">
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
                  <p>Upload Assignments</p>
               </div>
               <form action="DataSource.php" >
                  <div class="custom-file">
                     <form action="" method="post" name="frmExcelImport"
            id="frmExcelImport" enctype="multipart/form-data">
                     <label class="custom-file-label" for="customFileLang">Select file</label>
                  </div>
                  <div class="text-center">
                     <button type="submit" value="Submit" class="btn btn-success mt-5" style="border-radius: 25px;">Submit</button>
                     <?php
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
                $description = mysqli_real_escape_string($conn, $spreadSheetAry[$i][1]);
            }
            $math="";
            if (isset($spreadSheetAry[$i][2])) {
                $math = mysqli_real_escape_string($conn, $spreadSheetAry[$i][2]);
            }
            $english="";
            if (isset($spreadSheetAry[$i][3])) {
                $math = mysqli_real_escape_string($conn, $spreadSheetAry[$i][3]);
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

            if (! empty($stdname) || ! empty($adm_no) || ! empty($math) || ! empty($english)  || ! empty($kiswahili) || ! empty($science) || ! empty($religion)|| ! empty($remarks)|| ! empty($pych)){
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
                  </div>

               </form>
               <div id="response"
        class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
                

            </div>
         </div>
      </div>
   </div>
   <!-- Footer -->
   <section class="col-lg-12">
      <?php require_once "../../inc/footer.php";?>
   </section>
   <!-- Scripts -->
   <?php require_once "../../inc/scripts.inc.php";?>
</body>