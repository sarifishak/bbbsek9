<?php
  require_once(dirname(__FILE__).'/../model/users.php');
  
  $user = new Users();
  $user->username = 'Sarif';
  $user->password = 'password';
  $user->lastname = 'Ishak';
  $user->firstname = 'Sarif';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>bbbsek9 | Persatuan Pendududuk Bandar Baru Bangi Seksyen 9</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <!-- <link href="css/skins/flat/green.css" rel="stylesheet"> -->
    
    <!-- bootstrap-progressbar -->
    <!-- <link href="css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet"> -->
    <!-- JQVMap -->
    <!-- <link href="css/jqvmap.min.css" rel="stylesheet"/> -->
    <!-- bootstrap-daterangepicker -->
    <!-- <link href="css/daterangepicker.css" rel="stylesheet"> -->

    <!-- Custom Theme Style -->
    <link href="css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <!-- page sidebar/topnav/content -->
         

<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="main.php" class="site_title"><i class="fa fa-paw"></i> <span>BBBSEK9</span></a>
    </div>
    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_info">
        <span>Selamat Datang,</span>
        <h2><?php echo $user->firstname." ".$user->lastname."!"; ?></h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <ul class="nav side-menu">
          <li><a><i class="fa fa-home"></i>Bayaran Keselamatan<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="#">Senarai Bayaran</a></li>
              <li><a href="#">Bayaran Baru</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-table"></i> Laporan <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="#">Laporan Ringkas Pembayaran</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- top navigation -->
<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="index.php"><i class="fa fa-sign-out pull-right" ></i> Keluar</a>
        </li>
      </ul>
    </nav>
  </div>
</div>
<!-- /top navigation -->
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <!-- <h3>Senarai bayaran keselamatan</h3> --> 
        <h3>&nbsp;</h3>
      </div>

      <div class="title_right">
        <div class="col-md-7 col-sm-7 col-xs-12 form-group pull-right">
            <div class="col-md-9 col-sm-9 col-xs-12">
              <select class="form-control">
                <option>Sila pilih...</option>
                <option>Permohonan Kerja Lebih Masa</option>
              </select>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Senarai bayaran keselamatan</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <!-- <h2 class="title text-center">Features Items</h2> -->
                   <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <h2>Kamarul Hadza</h2>
                                    <p>28,Jln 9/9 M	</p>
                                    <p>Receipt 11772 for April, 2015<br>
                                       Receipt 11772 for March, 2015<br>
                                       Receipt 11772 for February, 2015<br>
                                       Receipt 11772 for January, 2015</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <h2>Kamarul Hadzam</h2>
                                    <p>29,Jln 9/9 M	</p>
                                    <p>Receipt 11772 for April, 2015<br>
                                       Receipt 11772 for March, 2015<br>
                                       Receipt 11772 for February, 2015<br>
                                       Receipt 11772 for January, 2015</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <h2>Kamarul Hadzam</h2>
                                    <p>29,Jln 9/9 M	</p>
                                    <p>Receipt 11772 for April, 2015<br>
                                       Receipt 11772 for March, 2015<br>
                                       Receipt 11772 for February, 2015<br>
                                       Receipt 11772 for January, 2015</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <h2>Kamarul Hadzam</h2>
                                    <p>29,Jln 9/9 M	</p>
                                    <p>Receipt 11772 for April, 2015<br>
                                       Receipt 11772 for March, 2015<br>
                                       Receipt 11772 for February, 2015<br>
                                       Receipt 11772 for January, 2015</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <h2>Kamarul Hadzam</h2>
                                    <p>29,Jln 9/9 M	</p>
                                    <p>Receipt 11772 for April, 2015<br>
                                       Receipt 11772 for March, 2015<br>
                                       Receipt 11772 for February, 2015<br>
                                       Receipt 11772 for January, 2015</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <h2>Kamarul Hadzam</h2>
                                    <p>29,Jln 9/9 M	</p>
                                    <p>Receipt 11772 for April, 2015<br>
                                       Receipt 11772 for March, 2015<br>
                                       Receipt 11772 for February, 2015<br>
                                       Receipt 11772 for January, 2015</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <h2>Kamarul Hadzam</h2>
                                    <p>29,Jln 9/9 M	</p>
                                    <p>Receipt 11772 for April, 2015<br>
                                       Receipt 11772 for March, 2015<br>
                                       Receipt 11772 for February, 2015<br>
                                       Receipt 11772 for January, 2015</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <h2>Kamarul Hadzam</h2>
                                    <p>29,Jln 9/9 M	</p>
                                    <p>Receipt 11772 for April, 2015<br>
                                       Receipt 11772 for March, 2015<br>
                                       Receipt 11772 for February, 2015<br>
                                       Receipt 11772 for January, 2015</p>
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
<!-- /page content -->
        <!-- /page sidebar/topnav/content -->


        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="js/nprogress.js"></script>
    <!-- Chart.js -->
    <!-- <script src="js/Chart.min.js"></script> -->
    <!-- gauge.js -->
    <!-- <script src="js/gauge.min.js"></script> -->
    <!-- bootstrap-progressbar -->
    <!-- <script src="js/bootstrap-progressbar.min.js"></script> -->
    <!-- iCheck -->
    <!-- <script src="js/icheck.min.js"></script> -->
    <!-- Skycons -->
    <!-- <script src="js/skycons.js"></script> -->
    <!-- Flot -->
    <!-- <script src="js/jquery.flot.js"></script>
    <script src="js/jquery.flot.pie.js"></script>
    <script src="js/jquery.flot.time.js"></script>
    <script src="js/jquery.flot.stack.js"></script>
    <script src="js/jquery.flot.resize.js"></script> -->
    <!-- Flot plugins -->
    <!-- <script src="js/jquery.flot.orderBars.js"></script>
    <script src="js/jquery.flot.spline.min.js"></script>
    <script src="js/curvedLines.js"></script> -->
    <!-- DateJS -->
    <!-- <script src="js/date.js"></script> -->
    <!-- JQVMap -->
    <!-- <script src="js/jquery.vmap.js"></script>
    <script src="js/jquery.vmap.world.js"></script>
    <script src="js/jquery.vmap.sampledata.js"></script> -->
    <!-- bootstrap-daterangepicker -->
    <!-- <script src="js/moment.min.js"></script>
    <script src="js/daterangepicker.js"></script> -->

    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>
    
  </body>
</html>
