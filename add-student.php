<?php
	include("../config.php");
if($_SESSION['permission']=='superadmin')
{
	if(isset($_POST))
	{
		if($_POST['submit']=="Submit")
		{
			print_r($_POST);
			exit;
			$rschk=mysqli_query($link,"insert into studentdtl set adm_no='".$_POST['uname']."', adm_ses='".$_POST['password']."', stu_firstname='".$_POST['firstname']."', stu_lastname='".$_POST['lastname']."', email='".$_POST['email']."', registrationdate='".$_POST['datepicker']."', rollno='".$_POST['rollno']."', class='".$_POST['class']."', gender='".$_POST['gender']."', mobileno='".$_POST['mobileno']."', parentname='".$_POST['pname']."', dateofbirth='".$_POST['uname']."', bloodgr='".$_POST['uname']."', address='".$_POST['uname']."', photo='".$_POST['uname']."', status='".$_POST['status']."' ;");
			//print_r(mysqli_num_rows($link, $rschk));
			if(mysqli_num_rows($rschk))
			{
				
				echo "<script>alert('Data Saved Successfully');</script>";
			}
		}
	}
?>
<!DOCTYPE html>

<html lang="en">

<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Edumin - The Shanti Niketan International </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/style.css">
	
	<!-- Pick date -->
    <link rel="stylesheet" href="vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="vendor/pickadate/themes/default.date.css">

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
                            <h4>Add Student</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Students</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Student</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
								<h5 class="card-title">Basic Info</h5>
							</div>
							<div class="card-body">
                                <form action="add-student.php" method="post">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">First Name</label>
												<input type="text" class="form-control" name="firstname">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Last Name</label>
												<input type="text" class="form-control" name="lastname">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Email</label>
												<input type="email" class="form-control" name="email">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Registration Date</label>
												<input name="datepicker" class="datepicker-default form-control" id="datepicker">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Roll No.</label>
												<input type="text" class="form-control" name="rollno">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Class</label>
												<select class="form-control" name="class">
													<option value="PlayGroup">Playgroup</option>
													<option value="Nursery">Nursery</option>
													<option value="Grade 1st">Grade 1st</option>
													<option value="Grade 2nd">Grade 2nd</option>
													<option value="Grade 3rd">Grade 3rd</option>
													<option value="Grade 4th">Grade 4th</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Session</label>
												<select class="form-control" name="session">
													<option value="Male">2024-25</option>
													<option value="Female">2025-26</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Status</label>
												<select class="form-control" name="status">
													<option value="Active">Active</option>
													<option value="Not Active">Not Active</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Gender</label>
												<select class="form-control" name="gender">
													<option value="Gender">Gender</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Mobile Number</label>
												<input type="text" class="form-control" maxlength="10" name="mobileno">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Parents Name</label>
												<input type="text" class="form-control" name="pname">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Parents Mobile Number</label>
												<input type="text" class="form-control" maxlength="10" name="pmobileno" >
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Date of Birth</label>
												<input name="datepicker" class="datepicker-default form-control" id="datepicker1">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Blood Group</label>
												<input type="text" class="form-control" name="bgroup">
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="form-label">Address</label>
												<textarea class="form-control" rows="5" name="address"></textarea>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group fallback w-100">
												<input type="file" class="dropify" data-default-file="" name="photo">
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<input type="submit" class="btn btn-primary" name="submit" value="Submit">
											<button type="reset" class="btn btn-light">Cancel</button>
										</div>
									</div>
								</form>
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

	<!-- Svganimation scripts -->
    <script src="vendor/svganimation/vivus.min.js"></script>
    <script src="vendor/svganimation/svg.animation.js"></script>
    <script src="js/styleSwitcher.js"></script>
	
	<!-- pickdate -->
    <script src="vendor/pickadate/picker.js"></script>
    <script src="vendor/pickadate/picker.time.js"></script>
    <script src="vendor/pickadate/picker.date.js"></script>
	
	<!-- Pickdate -->
    <script src="js/plugins-init/pickadate-init.js"></script>
	
</body>
</html>
<?php
}
else{
	header("Location: index.php");
}
?>