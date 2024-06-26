﻿<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Edumin - The Shanti Niketan International</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
	<!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <?php
		include("menu.php");
		?>
		
		
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				    
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>All Student</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Students</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">All Student</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-12">
						<ul class="nav nav-pills mb-3">
							<li class="nav-item"><a href="#list-view" data-toggle="tab" class="nav-link btn-primary mr-1 show active">List View</a></li>
							<li class="nav-item"><a href="#grid-view" data-toggle="tab" class="nav-link btn-primary">Grid View</a></li>
						</ul>
					</div>
					<div class="col-lg-12">
						<div class="row tab-content">
							<div id="list-view" class="tab-pane fade active show col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">All Students List  </h4>
										<a href="add-student.html" class="btn btn-primary">+ Add new</a>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example3" class="display" style="min-width: 845px">
												<thead>
													<tr>
														<th>#</th>
														<th>Roll No.</th>
														<th>Name</th>
														<th>Education</th>
														<th>Mobile</th>
														<th>Email</th>
														<th>Admission Date</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
														<td><strong>01</strong></td>
														<td>Tiger Nixon</td>
														<td>M.COM., P.H.D.</td>
														<td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2011/04/25</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>												
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
														<td><strong>02</strong></td>
														<td>Garrett Winters</td>
														<td>M.COM., P.H.D.</td>
														<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2011/07/25</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
														<td><strong>03</strong></td>
														<td>Ashton Cox</td>
														<td>B.COM., M.COM.</td>
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2009/01/12</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
														<td><strong>04</strong></td>
														<td>Cedric Kelly</td>
														<td>B.COM., M.COM.</td>
														<td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2012/03/29</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
														<td><strong>05</strong></td>
														<td>Airi Satou</td>
														<td>B.A, B.C.A</td>
														<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2008/11/28</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
														<td><strong>06</strong></td>
														<td>Brielle Williamson</td>
														<td>B.COM., M.COM.</td>
														<td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2012/12/02</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic7.jpg" alt=""></td>
														<td><strong>07</strong></td>
														<td>Herrod Chandler</td>
														<td>B.A, B.C.A</td>
														<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2012/08/06</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic8.jpg" alt=""></td>
														<td><strong>08</strong></td>
														<td>Rhona Davidson</td>
														<td>B.TACH, M.TACH</td>
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2010/10/14</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic9.jpg" alt=""></td>
														<td><strong>09</strong></td>
														<td>Colleen Hurst</td>
														<td>B.A, B.C.A</td>
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2009/09/15</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td>
														<td><strong>10</strong></td>
														<td>Sonya Frost</td>
														<td>B.COM., M.COM.</td>
														<td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2008/12/13</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
														<td><strong>11</strong></td>
														<td>Jena Gaines</td>
														<td>B.TACH, M.TACH</td>
														<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2008/12/19</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
														<td><strong>12</strong></td>
														<td>Quinn Flynn</td>
														<td>B.TACH, M.TACH</td>
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2013/03/03</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
														<td><strong>13</strong></td>
														<td>Charde Marshall</td>
														<td>B.A, B.C.A</td>
														<td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2008/10/16</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
														<td><strong>14</strong></td>
														<td>Haley Kennedy</td>
														<td>B.COM., M.COM.</td>
														<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2012/12/18</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
														<td><strong>15</strong></td>
														<td>Tatyana Fitzpatrick</td>
														<td>B.TACH, M.TACH</td>
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2010/03/17</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
														<td><strong>16</strong></td>
														<td>Michael Silva</td>
														<td>B.A, B.C.A</td>
														<td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2012/11/27</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic7.jpg" alt=""></td>
														<td><strong>17</strong></td>
														<td>Paul Byrd</td>
														<td>B.TACH, M.TACH</td>
														<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2010/06/09</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic8.jpg" alt=""></td>
														<td><strong>18</strong></td>
														<td>Gloria Little</td>
														<td>B.A, B.C.A</td>
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2009/04/10</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic9.jpg" alt=""></td>
														<td><strong>19</strong></td>
														<td>Bradley Greer</td>
														<td>B.COM., M.COM.</td>
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2012/10/13</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td>
														<td><strong>20</strong></td>
														<td>Dai Rios</td>
														<td>B.TACH, M.TACH</td>
														<td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2012/09/26</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
														<td><strong>21</strong></td>
														<td>Jenette Caldwell</td>
														<td>B.A, B.C.A</td>
														<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2011/09/03</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
														<td><strong>22</strong></td>
														<td>Yuri Berry</td>
														<td>B.TACH, M.TACH</td>
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2009/06/25</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
														<td><strong>23</strong></td>
														<td>Caesar Vance</td>
														<td>B.TACH, M.TACH</td>
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2011/12/12</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
														<td><strong>24</strong></td>
														<td>Doris Wilder</td>
														<td>B.A, B.C.A</td>
														<td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2010/09/20</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
														<td><strong>25</strong></td>
														<td>Angelica Ramos</td>
														<td>B.COM., M.COM.</td>
														<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2009/10/09</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
														<td><strong>26</strong></td>
														<td>Gavin Joyce</td>
														<td>B.TACH, M.TACH</td>
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2010/12/22</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic7.jpg" alt=""></td>
														<td><strong>27</strong></td>
														<td>Jennifer Chang</td>
														<td>B.A, B.C.A</td>
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2010/11/14</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic8.jpg" alt=""></td>
														<td><strong>28</strong></td>
														<td>Brenden Wagner</td>
														<td>B.TACH, M.TACH</td>
														<td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2011/06/07</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic9.jpg" alt=""></td>
														<td><strong>29</strong></td>
														<td>Fiona Green</td>
														<td>B.A, B.C.A</td>
														<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2010/03/11</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td>
														<td><strong>30</strong></td>
														<td>Shou Itou</td>
														<td>B.COM., M.COM.</td>
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2011/08/14</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
                                </div>
                            </div>
							<div id="grid-view" class="tab-pane fade col-lg-12">
								<div class="row">
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic2.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Alexander</h3>
													<p class="text-muted">M.COM., P.H.D.</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span>Roll No.</span><strong>02</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Admission Date. :</span><strong>01 July 2020</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="about-student.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic3.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Elizabeth</h3>
													<p class="text-muted">B.COM., M.COM.</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span>Roll No.</span><strong>03</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Admission Date. :</span><strong>01 July 2020</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="about-student.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic4.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Amelia</h3>
													<p class="text-muted">M.COM., P.H.D.</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span>Roll No.</span><strong>04</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Admission Date. :</span><strong>01 July 2020</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="about-student.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic5.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Charlotte</h3>
													<p class="text-muted">B.COM., M.COM.</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span>Roll No.</span><strong>05</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Admission Date. :</span><strong>01 July 2020</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="about-student.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic6.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Isabella</h3>
													<p class="text-muted">B.A, B.C.A</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span>Roll No.</span><strong>06</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Admission Date. :</span><strong>01 July 2020</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="about-student.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic7.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Sebastian</h3>
													<p class="text-muted">M.COM., P.H.D.</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span>Roll No.</span><strong>07</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Admission Date. :</span><strong>01 July 2020</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="about-student.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic8.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Olivia</h3>
													<p class="text-muted">B.COM., M.COM.</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span>Roll No.</span><strong>08</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Admission Date. :</span><strong>01 July 2020</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="about-student.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic9.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Emma</h3>
													<p class="text-muted">B.A, B.C.A</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span>Roll No.</span><strong>09</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Admission Date. :</span><strong>01 July 2020</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="about-student.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic10.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Jackson</h3>
													<p class="text-muted">M.COM., P.H.D.</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span>Roll No.</span><strong>10</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Admission Date. :</span><strong>01 July 2020</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="about-student.html">Read More</a>
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
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <?php
		include("footer.php");
		?>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>	
	
	<!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>
	
    <!-- Svganimation scripts -->
    <script src="vendor/svganimation/vivus.min.js"></script>
    <script src="vendor/svganimation/svg.animation.js"></script>
    <script src="js/styleSwitcher.js"></script>
	
</body>
</html>