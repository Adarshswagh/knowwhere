<?php
session_start();
require("config.php");
 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}

$error="";
$msg="";
if(isset($_POST['add']))
{
	
	$project_title=$_POST['project_title'];
	$project_description=$_POST['project_description'];
	$project_location=$_POST['project_location'];
	$project_area=$_POST['project_area'];
	$total_towers=$_POST['total_towers'];
	$total_units=$_POST['total_units'];
	$possession=$_POST['possession'];
	$status=$_POST['status'];
	$total_floor=$_POST['total_floor'];
	$feature=$_POST['feature'];
	$city=$_POST['city'];
	$psf=$_POST['psf'];
	$developer=$_POST['developer'];

	    // Initialize unit arrays
		$unit_names = isset($_POST['unit_name']) ? $_POST['unit_name'] : [];
		$unit_sizes = isset($_POST['unit_size']) ? $_POST['unit_size'] : [];
		$unit_prices = isset($_POST['unit_price']) ? $_POST['unit_price'] : [];


	$image1=$_FILES['image1']['name'];
	$image2=$_FILES['image2']['name'];
	$image3=$_FILES['image3']['name'];
	$image4=$_FILES['image4']['name'];
	$image5=$_FILES['image5']['name'];


	$featured=$_POST['featured'];
	
	$temp_name  =$_FILES['image1']['tmp_name'];
	$temp_name1 =$_FILES['image2']['tmp_name'];
	$temp_name2 =$_FILES['image3']['tmp_name'];
	$temp_name3 =$_FILES['image4']['tmp_name'];
	$temp_name4 =$_FILES['image5']['tmp_name'];

	
	move_uploaded_file($temp_name,"property/$image1");
	move_uploaded_file($temp_name1,"property/$image2");
	move_uploaded_file($temp_name2,"property/$image3");
	move_uploaded_file($temp_name3,"property/$image4");
	move_uploaded_file($temp_name4,"property/$image5");


	

// Prepare unit details as JSON
$unit_details = [];
for ($i = 0; $i < count($unit_names); $i++) {
	$unit_details[] = [
		'name' => $unit_names[$i],
		'size' => $unit_sizes[$i],
		'price' => $unit_prices[$i]
	];
}
$unit_details_json = json_encode($unit_details); // Convert to JSON

// Insert into residential_projects table
$sql = "INSERT INTO residential_projects (project_title, project_description, project_location, project_area, total_towers, total_units, possession,  feature, total_floor, status,image1,image2,image3,image4,image5,featured, unit_details, city, psf, developer)
		VALUES ('$project_title', '$project_description', '$project_location', '$project_area', '$total_towers', '$total_units', '$possession',  '$feature', '$total_floor', '$status','$image1','$image2','$image3','$image4','$image5','$featured', '$unit_details_json', '$city', '$psf', '$developer')";

$result = mysqli_query($con, $sql);
if ($result) {
	$msg = "<p class='alert alert-success'>Residential Project Inserted Successfully</p>";
} else {
	$error = "<p class='alert alert-warning'>Something went wrong. Please try again: " . mysqli_error($con) . "</p>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>LM HOMES | Property</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </head>
    <body>

		
			<!-- Header -->
			<?php include("header.php"); ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header --><br>
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Residential Project</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Property</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->



						

					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Add Residential Project Details</h4>
								</div>
								<form method="post" enctype="multipart/form-data">
								<div class="card-body">
									<h5 class="card-title">Project Detail</h5>
									<?php echo $error; ?>
									<?php echo $msg; ?>
									
										<div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Title</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="project_title"      placeholder="Enter Title">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Content</label>
													<div class="col-lg-9">
														<textarea class=" form-control" name="project_description" placeholder="Enter Description" rows="10" cols="30"></textarea>
													</div>
												</div>
												
											</div>
											
										</div>
										
										<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Project Developer</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="developer"      placeholder="Enter Project Developer">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Address</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="project_location"      placeholder="Enter Address">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Total Towers</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="total_towers"      placeholder="Enter Total Towers">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Possession</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="possession"      placeholder="Enter Possession">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">City</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="cuty"      placeholder="Enter City">
													</div>
												</div>
												
							
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Project Area</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="project_area"      placeholder="Enter Project Area">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Total Units</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="total_units"      placeholder="Enter Total Units">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Total Floor</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="total_floor"      placeholder="Enter Total Floor">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 col-form-label">PSF</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="psf"      placeholder="Enter PSF">
													</div>
												</div>
											
												

												

											</div>
										</div>

										<h4 class="card-title">Per Units Detail</h4>
										<div class="row">
											<div class="col-xl-12">
												<!-- Container for dynamic units -->
												<div id="units-container">
													<!-- First unit fields -->
													<div class="unit-detail">
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Unit One</label>
															<div class="col-lg-7">
																<input type="text" class="form-control" name="unit_name[]"      placeholder="Enter Unit Name">
															</div>
															<div class="col-lg-2">
																<button type="button" class="btn btn-danger remove-unit-btn">Remove</button>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Unit One Size</label>
															<div class="col-lg-7">
																<input type="text" class="form-control" name="unit_size[]"      placeholder="Enter Unit Size">
															</div>
														</div>
														
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Unit One Price</label>
															<div class="col-lg-7">
																<input type="text" class="form-control" name="unit_price[]"      placeholder="Enter Unit Price">
															</div>
															
														</div>

																												
														<hr>
													</div>
												</div>
												<!-- Add More Button -->
												<button type="button" id="add-unit-btn" class="btn btn-primary">Add More Units</button>

												
											</div>
										</div><br><br><br><br><br>


										
										
										<div class="form-group row">
											<label class="col-lg-2 col-form-label">Feature</label>
											<div class="col-lg-9">
											<p class="alert alert-danger">* Important Please Do Not Remove Below Content Only Change <b>Yes</b> Or <b>No</b> or Details and Do Not Add More Details</p>
											
											<textarea class="tinymce form-control" name="feature" rows="10" cols="30">
												<!---feature area start--->
												<div class="col-md-4">
														<ul>
														
														<li class="mb-3"><span class="text-secondary font-weight-bold">Swiming Pool : </span>Yes</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Parking : </span>Yes</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">GYM : </span>Yes</li>
														</ul>
													</div>
													<div class="col-md-4">
														<ul>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Type : </span>Apartment</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Security : </span>Yes</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Dining Capacity : </span>10 People</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Church/Temple  : </span>No</li>
														
														</ul>
													</div>
													<div class="col-md-4">
														<ul>
														<li class="mb-3"><span class="text-secondary font-weight-bold">3rd Party : </span>No</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Alivator : </span>Yes</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">CCTV : </span>Yes</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Water Supply : </span>Ground Water / Tank</li>
														</ul>
													</div>
												<!---feature area end---->
											</textarea>
											</div>
										</div>
												
										<h4 class="card-title">Image & Status</h4>
										<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image1</label>
													<div class="col-lg-9">
														<input class="form-control" name="image1" type="file"     ="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 3</label>
													<div class="col-lg-9">
														<input class="form-control" name="image3" type="file"     ="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 5</label>
													<div class="col-lg-9">
														<input class="form-control" name="image4" type="file"     ="">
													</div>
												</div>
												
												
											</div>
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 2</label>
													<div class="col-lg-9">
														<input class="form-control" name="image2" type="file"     ="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">image 4</label>
													<div class="col-lg-9">
														<input class="form-control" name="image5" type="file"     ="">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Status</label>
													<div class="col-lg-9">
														<select class="form-control"       name="status">
															<option value="">Select Status</option>
															<option value="Ready To Move">Ready To Move</option>
															<option value="New Launch">New Launch</option>
															<option value="Early Possession">Early Possession</option>
															<option value="Pre Launch">Pre Launch</option>
														</select>
													</div>
												</div>
												
												
											</div>
										</div>

										<hr>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><b>Best Sale?</b></label>
													<div class="col-lg-9">
														<select class="form-control"       name="featured">
															<option value="">Select...</option>
															<option value="0">No</option>
															<option value="1">Yes</option>
														</select>
													</div>
												</div>
											</div>
										</div>

										
											<input type="submit" value="Submit" class="btn btn-primary"name="add" style="margin-left:500px; max-width:500px">
										
								</div>
								</form>
							</div>
						</div>
					</div>
				
				</div>			
			</div>
			<!-- /Main Wrapper -->



			<script>
				$(document).ready(function() {
					// Function to add new unit detail fields dynamically
					$('#add-unit-btn').click(function() {
						var newUnit = `
						<div class="unit-detail">
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Unit Name</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="unit_name[]"      placeholder="Enter Unit Name">
								</div>
								<div class="col-lg-2">
									<button type="button" class="btn btn-danger remove-unit-btn">Remove</button>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Unit Size</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="unit_size[]"      placeholder="Enter Unit Size">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Unit Price</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="unit_price[]"      placeholder="Enter Unit Price">
								</div>
								
							</div>
							<hr>
						</div>`;
						$('#units-container').append(newUnit);
					});

					// Function to remove unit details
					$(document).on('click', '.remove-unit-btn', function() {
						$(this).closest('.unit-detail').remove(); // Remove the closest unit-detail div
					});
				});
			</script>

		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		<script src="assets/plugins/tinymce/tinymce.min.js"></script>
		<script src="assets/plugins/tinymce/init-tinymce.min.js"></script>
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

</html>