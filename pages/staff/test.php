<title>Datatabel Test</title>
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
<link rel="stylesheet" href="../../assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="../../assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
<style>
  ::-moz-selection {
    background: #0ddb83;
    color: #FFF;
  }

  ::selection {
    background-color: #0ddb83;
    color: #FFF;
  }

  #example_filter input {
    border-radius: 5em;
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
            <div class="col-lg-10 col-md-10">
               <h1 class="display-2 text-white" data-aos="slide-right" data-aos-duration="1000">Test • Result Sheet</h1>
               <p class="text-white mt-0 mb-2" data-aos="slide-right" data-aos-duration="1500">These are the term results. You can upload & view how your students performed in each subject and the total term marks.</p>
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
               <div class="card-header">
                  <h3 class="display-3 mb-0">Term Results</h3>
               </div>
               <div class="table-responsive py-4">
                  <table id="example" class="table table-striped table-bordered" class="table table-flush" id="datatable-buttons" cellspacing="0" width="100%">
                     <thead>
                        <tr class="bg-secondary">
                           <th>Order</th>
                           <th>Description</th>
                           <th>Deadline</th>
                           <th>Status</th>
                           <th>Amount</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>1</td>
                           <td>Alphabet puzzle</td>
                           <td>2016/01/15</td>
                           <td>Done</td>
                           <td data-order="1000">€1.000,00</td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>Layout for poster</td>
                           <td>2016/01/31</td>
                           <td>Planned</td>
                           <td data-order="1834">€1.834,00</td>
                        </tr>
                        <tr>
                           <td>3</td>
                           <td>Image creation</td>
                           <td>2016/01/23</td>
                           <td>To Do</td>
                           <td data-order="1500">€1.500,00</td>
                        </tr>
                        <tr>
                           <td>4</td>
                           <td>Create font</td>
                           <td>2016/02/26</td>
                           <td>Done</td>
                           <td data-order="1200">€1.200,00</td>
                        </tr>
                        <tr>
                           <td>5</td>
                           <td>Sticker production</td>
                           <td>2016/02/18</td>
                           <td>Planned</td>
                           <td data-order="2100">€2.100,00</td>
                        </tr>
                        <tr>
                           <td>6</td>
                           <td>Glossy poster</td>
                           <td>2016/03/17</td>
                           <td>To Do</td>
                           <td data-order="899">€899,00</td>
                        </tr>
                        <tr>
                           <td>7</td>
                           <td>Beer label</td>
                           <td>2016/05/28</td>
                           <td>Confirmed</td>
                           <td data-order="2499">€2.499,00</td>
                        </tr>
                        <tr>
                           <td>8</td>
                           <td>Shop sign</td>
                           <td>2016/04/19</td>
                           <td>Offer</td>
                           <td data-order="1099">€1.099,00</td>
                        </tr>
                        <tr>
                           <td>9</td>
                           <td>X-Mas decoration</td>
                           <td>2016/10/31</td>
                           <td>Confirmed</td>
                           <td data-order="1750">€1.750,00</td>
                        </tr>
                        <tr>
                           <td>10</td>
                           <td>Halloween invite</td>
                           <td>2016/09/12</td>
                           <td>Planned</td>
                           <td data-order="400">€400,00</td>
                        </tr>
                        <tr>
                           <td>11</td>
                           <td>Wedding announcement</td>
                           <td>2016/07/09</td>
                           <td>To Do</td>
                           <td data-order="299">€299,00</td>
                        </tr>
                        <tr>
                           <td>12</td>
                           <td>Member pasport</td>
                           <td>2016/06/22</td>
                           <td>Offer</td>
                           <td data-order="149">€149,00</td>
                        </tr>
                        <tr>
                           <td>13</td>
                           <td>Drink tickets</td>
                           <td>2016/11/01</td>
                           <td>Confirmed</td>
                           <td data-order="199">€199,00</td>
                        </tr>
                        <tr>
                           <td>14</td>
                           <td>Album cover</td>
                           <td>2017/03/15</td>
                           <td>To Do</td>
                           <td data-order="4999">€4.999,00</td>
                        </tr>
                        <tr>
                           <td>15</td>
                           <td>Shipment box</td>
                           <td>2017/02/08</td>
                           <td>Offer</td>
                           <td data-order="1399">€1.399,00</td>
                        </tr>
                        <tr>
                           <td>16</td>
                           <td>Wooden puzzle</td>
                           <td>2017/01/11</td>
                           <td>Done</td>
                           <td data-order="1000">€1.000,00</td>
                        </tr>
                        <tr>
                           <td>17</td>
                           <td>Fashion Layout</td>
                           <td>2016/01/30</td>
                           <td>Planned</td>
                           <td data-order="1834">€1.834,00</td>
                        </tr>
                        <tr>
                           <td>18</td>
                           <td>Toy creation</td>
                           <td>2016/01/10</td>
                           <td>To Do</td>
                           <td data-order="1550">€1.550,00</td>
                        </tr>
                        <tr>
                           <td>19</td>
                           <td>Create stamps</td>
                           <td>2016/02/26</td>
                           <td>Done</td>
                           <td data-order="1220">€1.220,00</td>
                        </tr>
                        <tr>
                           <td>20</td>
                           <td>Sticker design</td>
                           <td>2017/02/18</td>
                           <td>Planned</td>
                           <td data-order="2100">€2.100,00</td>
                        </tr>
                        <tr>
                           <td>21</td>
                           <td>Poster rock concert</td>
                           <td>2017/04/17</td>
                           <td>To Do</td>
                           <td data-order="899">€899,00</td>
                        </tr>
                        <tr>
                           <td>22</td>
                           <td>Wine label</td>
                           <td>2017/05/28</td>
                           <td>Confirmed</td>
                           <td data-order="2799">€2.799,00</td>
                        </tr>
                        <tr>
                           <td>23</td>
                           <td>Shopping bag</td>
                           <td>2017/04/19</td>
                           <td>Offer</td>
                           <td data-order="1299">€1.299,00</td>
                        </tr>
                        <tr>
                           <td>24</td>
                           <td>Decoration for Easter</td>
                           <td>2017/10/31</td>
                           <td>Confirmed</td>
                           <td data-order="1650">€1.650,00</td>
                        </tr>
                        <tr>
                           <td>25</td>
                           <td>Saint Nicolas colorbook</td>
                           <td>2017/09/12</td>
                           <td>Planned</td>
                           <td data-order="510">€510,00</td>
                        </tr>
                        <tr>
                           <td>26</td>
                           <td>Wedding invites</td>
                           <td>2017/07/09</td>
                           <td>To Do</td>
                           <td data-order="399">€399,00</td>
                        </tr>
                        <tr>
                           <td>27</td>
                           <td>Member pasport</td>
                           <td>2017/06/22</td>
                           <td>Offer</td>
                           <td data-order="249">€249,00</td>
                        </tr>
                        <tr>
                           <td>28</td>
                           <td>Drink tickets</td>
                           <td>2017/11/01</td>
                           <td>Confirmed</td>
                           <td data-order="199">€199,00</td>
                        </tr>
                        <tr>
                           <td>29</td>
                           <td>Blue-Ray cover</td>
                           <td>2018/03/15</td>
                           <td>To Do</td>
                           <td data-order="1999">€1.999,00</td>
                        </tr>
                        <tr>
                           <td>30</td>
                           <td>TV carton</td>
                           <td>2019/02/08</td>
                           <td>Offer</td>
                           <td data-order="1369">€1.369,00</td>
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
   <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script> -->
   <script src='https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js'></script>
   <script src='https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js'></script>
   <script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js'></script>
   <script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js'></script>
   <script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js'></script>
   <!-- <script src='https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js'></script> -->
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>
   <!-- <script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'></script> -->
   <script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js'></script>
   <script src="../../assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
   <script src="../../assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
   <script src="script.js"></script>
   <script>
      /////////////////Buttons
        (function (c) {
        "function" === typeof define && define.amd ? define(["jquery", "datatables.net-bs", "datatables.net-buttons"], function (a) {
          return c(a, window, document)
        }) : "object" === typeof exports ? module.exports = function (a, b) {
          a || (a = window);
          if (!b || !b.fn.dataTable) b = require("datatables.net-bs")(a, b).$;
          b.fn.dataTable.Buttons || require("datatables.net-buttons")(a, b);
          return c(b, a, a.document)
        } : c(jQuery, window, document)
      })(function (c) {
        var a = c.fn.dataTable;
        c.extend(!0, a.Buttons.defaults, {
          dom: {
            container: {
              className: "dt-buttons btn-group ml--4 mb-4"
            },
            button: {
              className: "btn btn-sm btn-success mx-2 rounded"
            },
            collection: {
              tag: "ul",
              className: "dt-button-collection dropdown-menu",
              button: {
                tag: "li",
                className: "btn-sm"
              },
              buttonLiner: {
                tag: "a",
                className: ""
              }
            }
          }
        });
        a.ext.buttons.collection.text = function (a) {
          return a.i18n("buttons.collection", 'Collection <span class="caret"/>')
        };
        return a.Buttons
      });
      
      /////////////////////Pagination & Search
      (function (b) {
        "function" === typeof define && define.amd ? define(["jquery", "datatables.net"], function (a) {
          return b(a, window, document)
        }) : "object" === typeof exports ? module.exports = function (a, d) {
          a || (a = window);
          if (!d || !d.fn.dataTable) d = require("datatables.net")(a, d).$;
          return b(d, a, a.document)
        } : b(jQuery, window, document)
      })(function (b, a, d, m) {
        var f = b.fn.dataTable;
        b.extend(!0, f.defaults, {
          dom: "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
          renderer: "bootstrap"
        });
        b.extend(f.ext.classes, {
          sWrapper: "dataTables_wrapper dt-bootstrap4",
          sFilterInput: "form-control form-control-sm",
          sLengthSelect: "custom-select custom-select-sm form-control form-control-sm",
          sProcessing: "dataTables_processing card",
          sPageButton: "paginate_button page-item"
        });
        f.ext.renderer.pageButton.bootstrap = function (a, h, r, s, j, n) {
          var o = new f.Api(a),
            t = a.oClasses,
            k = a.oLanguage.oPaginate,
            u = a.oLanguage.oAria.paginate || {},
            e, g, p = 0,
            q = function (d, f) {
              var l, h, i, c, m = function (a) {
                a.preventDefault();
                !b(a.currentTarget).hasClass("disabled") && o.page() != a.data.action && o.page(a.data.action).draw("page")
              };
              l = 0;
              for (h = f.length; l < h; l++)
                if (c = f[l], b.isArray(c)) q(d, c);
                else {
                  g = e = "";
                  switch (c) {
                    case "ellipsis":
                      e = "…";
                      g = "disabled";
                      break;
                    case "first":
                      e = k.sFirst;
                      g = c + (0 < j ? "" : " disabled");
                      break;
                    case "previous":
                      e = k.sPreviouss;
                      g = c + (0 < j ? "" : " disabled");
                      break;
                    case "next":
                      e = k.sNextt;
                      g = c + (j < n - 1 ? "" : " disabled");
                      break;
                    case "last":
                      e = k.sLast;
                      g = c + (j < n - 1 ? "" : " disabled");
                      break;
                    default:
                      e = c + 1, g = j === c ? "active" : ""
                  }
                  e && (i = b("<li>", {
                    "class": t.sPageButton + " " + g,
                    id: 0 === r && "string" === typeof c ? a.sTableId + "_" + c : null
                  }).append(b("<a>", {
                    href: "#",
                    "aria-controls": a.sTableId,
                    "aria-label": u[c],
                    "data-dt-idx": p,
                    tabindex: a.iTabIndex,
                    "class": "page-link"
                  }).html(e)).appendTo(d), a.oApi._fnBindAction(i, {
                    action: c
                  }, m), p++)
                }
            },
            i;
          try {
            i = b(h).find(d.activeElement).data("dt-idx")
          } catch (v) {}
          q(b(h).empty().html('<ul class="pagination mt-4"/>').children("ul"), s);
          i !== m && b(h).find("[data-dt-idx=" + i + "]").focus()
        };
        return f
      });
   </script>
</body>