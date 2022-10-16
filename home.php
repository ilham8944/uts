<?php include 'crud/connect.php'; ?>


<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>LIFII</title>

	<meta name="author" content="themsflat.com">

	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Boostrap style -->
	<link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css">

	<!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">

	<!-- Theme style -->
	<link rel="stylesheet" type="text/css" href="stylesheet/style.css">

	<!-- Colors -->
    <link rel="stylesheet" type="text/css" href="stylesheet/colors/color1.css" id="colors">

	<!-- Reponsive -->
	<link rel="stylesheet" type="text/css" href="stylesheet/responsive.css">

	<!-- Favicon and touch icons  -->
    <link href="icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="icon/favicon.png" rel="shortcut icon">

</head>
	<body>
		<div class="boxed">
		<!-- Preloader -->
	    <div id="loading-overlay">
	        <div class="loader"></div>
	    </div>
		
		<div class="themesflat-top">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="flat-infomation">
							<li class="email"><a href="mailto:themesflat@gmail.com" title="email">Email: lifii@gmail.com</a></li>
							<li class="phone"><a href="#" title="phone">Call Us: +62 895 1487 0709</a></li>
						</ul>
						<ul class="box-account">
							<!-- <li class="login">
								<a href="php/login.php" title="">Login</a>
							</li> -->
							<li class="sign-in">
								<a href="login/logout.php" title="">Logout</a>
							</li>
						</ul><!-- /.box-account -->
						<div class="clearfix"></div><!-- /.clearfix -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.themesflat-top -->
		

		<header id="header" class="header bg-color">
			<div class="container">
				<div class="row">
					<div class="header-wrap">
						<div style="float: left;margin-top: 14px;">
							<a href="index.html" title="">
								<img src="images/logofinalcrop.png" alt="" width="190"  />
							</a>
						</div><!-- /#logo -->
						<div class="flat-show-search">
							<div class="show-search">
                                <i class="fa fa-search"></i>                                             
                            </div>
                            <div class="top-search">                        
                                <form action="#" id="searchform-all" method="get">
                                    <div>
                                        <input type="text" id="s" class="sss" placeholder="Search...">
                                        <input type="submit" value="" id="searchsubmit">
                                    </div>
                                </form>
                            </div> <!-- /.top-search -->
                        </div>	<!-- /.flat-show-search -->
						
						<div class="nav-wrap">
							<div class="btn-menu">
                                <span></span>
                            </div><!-- //mobile menu button -->
							<nav id="mainnav" class="mainnav">
								<ul class="menu">
									<li>
                                        <a href="index.html" title="">HOME</a>
                                    </li>
                                    <li class="active">
                                        <a href="home.php" title="">FORECASTING</a>
                                    </li>
                                    <li >
                                        <a href="app.html" title="">APP</a>
                                    </li>
									
                                    <li>
                                        <a href="about.html" title="">ABOUT</a>
                                    </li>

                                    <li >
                                        <a href="contact.html" title="">CONTACT</a>
                                    </li>
								</ul><!-- /.menu -->
							</nav><!-- /#mainnav -->
						</div><!-- /.nav-wrap -->
					</div><!-- /.header-wrap -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</header><!-- /#header -->
		
		<div class="page-title">
			<div class="title-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="page-title-heading">
								<h1 class="h1-title">FORECASTING</h1>
							</div><!-- /.page-title-heading -->
							<ul class="breadcrumbs">
								<li><a href="index.html" title="">Home</a></li>
								<li class="dot">/</li>
								<li>Forecasting</li>
							</ul><!-- /.breadcrumbs -->
						</div><!-- /.col-md-12 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.title-heading -->
		</div><!-- /.page-title -->

		<section class="flat-price-coin">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="top-title center">
							<h2>LIST REKSADANA </h2>
							<p>Berikut beberapa list Reksadana  yang memiliki return tertinggi untuk 3 tahun.</p>
						</div>
						<!-- btn btn-sm btn-info mb-3 -->
						<table>
							<td>
								<div style="margin-right: 20px; margin-bottom:20px ">
									<form class="" action="crud/formtambah.php" >
										<button type="submit" name="tambah" >Tambah</button>
									</form>
								</div>
								
							</td>

							<td>
								<div style="margin-right: 20px;margin-bottom:20px">
									<form class="" action="chart/chart.php" >
										<button type="submit" name="grafik" >Grafik</button>
									</form>
								</div>
							</td>
						</table>
						
						
						
						<!-- <div class="table-price" style="margin-bottom: 20px;">
							<a href="crud/formtambah.php" class="btn btn-sm btn-warning mb-3">Tambah</a>
							<a href="chart/chart.php" class="btn btn-sm btn-warning mb-3">Grafik</a>
						</div> -->
						

						<div class="table-price">
							<table>
								<thead>
									<tr>
										<th>No</th>
										<th>Name</th>
                                        <th>Jenis</th>
										<th>1 Tahun</th>
										<th>3 Tahun</th>
										<th>aksi</th>

									</tr>
								</thead>
								<tbody>
								<?php
									$sql = 'SELECT * FROM listrdr' ;

									$query = mysqli_query($conn, $sql);

									while ($row = mysqli_fetch_object($query)) {
								?>
								
								<tr>
									<td><?php echo $row->no; ?></td>
									<td><?php echo $row->nama; ?></td>
									<td><?php echo $row->jenis; ?></td>
									<td><?php echo $row->satuthn; ?></td>
									<td><?php echo $row->tigathn; ?></td>
									<td>
										<a href="crud/formtambah.php?no=<?php echo $row->no?>" class="btn btn-sm btn-warning">Ubah</a>
										<a href="crud/deletedata.php?no=<?php echo $row->no?>" class="btn btn-sm btn-danger"
										onclick="return confirm('Apakah Anda yakin akan menghapus data');">Hapus</a>
											
									</td>
								</tr>

								<?php
									} if (!mysqli_num_rows($query)) {
										echo '<tr><td colspan="6" class="text-center">Tidak ada data.</td></tr>';
									}
								?>
									
								</tbody>
							</table>
						</div><!-- /.table-price -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-price-coin -->

		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<form class="" action="" method="post" enctype="multipart/form-data">
							<input type="file" name="excel" required value="">
							<button type="submit" name="import" >Import</button>
						</form>
						<hr>
						<div class="table-price" style="margin-bottom: 200px;">
							<table>
								<tr>
									<th>No</th>
									<th>Name</th>
									<th>Jenis</th>
									<th>1 Tahun</th>
									<th>3 Tahun</th>
								</tr>
								<?php
								$i = 1;
								$rows = mysqli_query($conn, "SELECT * FROM rdpu");
								foreach($rows as $row) :
								?>
								<tr>
									<td> <?php echo $i++; ?> </td>
									<td> <?php echo $row["nama"]; ?> </td>
									<td> <?php echo $row["jenis"]; ?> </td>
									<td> <?php echo $row["satuthn"]; ?> </td>
									<td> <?php echo $row["tigathn"]; ?> </td>

								</tr>
								<?php endforeach; ?>
							</table>
						</div>		
						<?php
						if(isset($_POST["import"])){
							$fileName = $_FILES["excel"]["name"];
							$fileExtension = explode('.', $fileName);
					$fileExtension = strtolower(end($fileExtension));
							$newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

							$targetDirectory = "uploads/" . $newFileName;
							move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);

							error_reporting(0);
							ini_set('display_errors', 0);

							require 'excelReader/excel_reader2.php';
							require 'excelReader/SpreadsheetReader.php';

							$reader = new SpreadsheetReader($targetDirectory);
							foreach($reader as $key => $row){
								$nama = $row[0];
								$jenis = $row[1];
								$satuthn = $row[2];
								$tigathn = $row[3];
								mysqli_query($conn, "INSERT INTO rdpu VALUES('', '$nama', '$jenis', '$satuthn', '$tigathn')");
							}

							echo
							"
							<script>
							alert('Succesfully Imported');
							document.location.href = '';
							</script>
							";
						}
						?>
					</div>
				</div>	
			</div>
		</section>

        <section>
            <div class="container">
                <div class="top-title center">
                    <h2>Sucorinvest Flexi Fund</h2>
                    <p>Berikut merupakan grafik dari reksadana saham Sucorinvest Flexi Fund.</p>
                </div>
                <div align="center" style="margin-bottom: 100px;">
                    <img src="images/saham.png" width="900">
                </div>

                <div class="top-title center">
                    <h2>FORECASTING</h2>
                    <p>Berikut adalah forecasting jika kita menyisihkan 2 juta setiap bulannya selama 10 tahun di Sucorinvest Flexi Fund.</p>
                </div>
                <div align="center">
                    <img src="images/saham2.png" width="700">
                </div>
                <div class="top-title center">
                    <p>Jadi jika kita bisa menyisihkan beberapa uang kita dan diinvestasikan setiap bulannya secara konsisten, kita bisa mendapat
                        banyak keuntungan dari investasi tersebut. Namun perlu digarisbawahi lagi bahwa kita harus betul-betul paham akan instrumen 
                        investasi yang kita pilih. Maka dari ayo tingkatkan literasi finansial kita semua.
                    </p>
                </div>
            </div>
        </section>
        

		

		

		

		

		<footer id="footer_background">
			<div class="footer">
				<div class="container">
					<div class="row">
						<div class="footer-widgets">
							<div class="col-md-4">
								<div class="widget widget-about">
									<div class="widget-text">
										<div >
											<a href="index.html" title="">
												<img src="images/logofinalcrop.png" alt="" width="190">
											</a>
										</div>
										<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a rhoncus risus atione Pellentesque sodales risus aut -->
										</p>
									</div>
									<div class="widget widget-newletter">
										<h3 class="widget-title">NEWSLETTER</h3>
										<form id="subscribe-form" action="#" method="post" accept-charset="utf-8" data-mailchimp="true">
			                                <div id="subscribe-content">
												<div class="input-email">
													<input type="email" name="email-form" id="subscribe-email" placeholder="Email address" />
												</div>
												<button type="button" id="subscribe-button" class="button-subscribe"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
			                                </div>
			                                <div id="subscribe-msg"></div>
										</form>
									</div>
								</div><!-- /.widget-about -->
							</div><!-- /.col-md-4 -->
							<div class="col-md-4">
								<div class="widget widget_nav_menu">
									<h3 class="widget-title">SITE MAP</h3>
									<ul class="menu-footer one-half">
										<li><a href="index.html" title=""><i class="fa fa-angle-double-right"></i> Home</a></li>
										<li><a href="forecasting.html" title=""><i class="fa fa-angle-double-right"></i> Forecasting</a></li>
										<li><a href="app.html" title=""><i class="fa fa-angle-double-right"></i> App</a></li>
									</ul><!-- /.one-half -->
									<ul class="menu-footer one-half">
										<li><a href="about.html" title=""><i class="fa fa-angle-double-right"></i> About</a></li>
										<li><a href="contact.html" title=""><i class="fa fa-angle-double-right"></i> Contact</a></li>
									</ul><!-- /.one-half -->
									<div class="clearfix"></div>
								</div><!-- /.widget_nav_menu -->
							</div><!-- /.col-md-4 -->
							<div class="col-md-4">
								<div class="widget widget_contact">
									<h3 class="widget-title">CONTACT</h3>
									<ul class="contact-list">
										<li>
											Address: <span>Jl. Kumbang No.39 Kota Bogor 16128</span>
										</li>
										<li>
											Phone: <span>+62 895 1487 0709</span>
										</li>
										<li>
											Email: <span>lifii@gmail.com</span>
										</li>
									</ul>
									
								</div><!-- /.widget_contact -->
							</div><!-- /.col-md-4 -->
						</div><!-- /.footer-widgets -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.footer -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="menu-ft-bottom">
								<li>
									<a href="index.html" title="">Home</a>
								</li>
								<li>
									<a href="about.html" title="">About</a>
								</li>
								<li>
									<a href="forecasting.html" title="">Forecasting</a>
								</li>
								<li>
									<a href="app.html" title="">App</a>
								</li>
								<li>
									<a href="contact.html" title="">Contact</a>
								</li>
							</ul>
							<div class="copyright">
								<p>© Copyright <a href="#" title="">LIFII</a>  </a> 2022</p>	
							</div>
						</div>
					</div>
				</div><!-- /.container -->
			</div><!-- /.footer-bottom -->	
		</footer><!-- /#footer_background -->
		
		<div class="button-go-top">
			<a href="#" title="" class="go-top">
				<i class="fa fa-chevron-up"></i>
			</a>
		</div><!-- /.button-go-top -->
	
	</div> <!-- /.boxed -->

	<!-- Javascript -->
    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/tether.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="javascript/owl.carousel.js"></script>
    <script type="text/javascript" src="javascript/jquery.easing.js"></script>
    
    <script type="text/javascript" src="javascript/jquery-countTo.js"></script>
    <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
    <script type="text/javascript" src="javascript/waypoints.min.js"></script>
    <script type="text/javascript" src="javascript/main.js"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="revolution/js/slider_v1.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>


	</body>
</html>