<?php
session_start();
require("config.php");
////code
 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}

//// code insert
//// add code
$error="";
$msg="";
if(isset($_POST['add']))
{
	
	$title=$_POST['title'];
	$content=$_POST['content'];
	$ptype=$_POST['ptype'];
	$bhk=$_POST['bhk'];
	$bed=$_POST['bed'];
	$balc=$_POST['balc'];
	$hall=$_POST['hall'];
	$stype=$_POST['stype'];
	$bath=$_POST['bath'];
	$kitc=$_POST['kitc'];
	$floor=$_POST['floor'];
	$price=$_POST['price'];
	$city=$_POST['city'];
	$asize=$_POST['asize'];
	$loc=$_POST['loc'];
	$state=$_POST['state'];
	$status=$_POST['status'];
	$uid=$_POST['uid'];
	$feature=$_POST['feature'];
	
	$totalfloor=$_POST['totalfl'];
	
	$aimage=$_FILES['aimage']['name'];
	$aimage1=$_FILES['aimage1']['name'];
	$aimage2=$_FILES['aimage2']['name'];
	$aimage3=$_FILES['aimage3']['name'];
	$aimage4=$_FILES['aimage4']['name'];
	
	$fimage=$_FILES['fimage']['name'];
	$fimage1=$_FILES['fimage1']['name'];
	$fimage2=$_FILES['fimage2']['name'];

	$isFeatured=$_POST['isFeatured'];
	
	$temp_name  =$_FILES['aimage']['tmp_name'];
	$temp_name1 =$_FILES['aimage1']['tmp_name'];
	$temp_name2 =$_FILES['aimage2']['tmp_name'];
	$temp_name3 =$_FILES['aimage3']['tmp_name'];
	$temp_name4 =$_FILES['aimage4']['tmp_name'];
	
	$temp_name5 =$_FILES['fimage']['tmp_name'];
	$temp_name6 =$_FILES['fimage1']['tmp_name'];
	$temp_name7 =$_FILES['fimage2']['tmp_name'];
	
	move_uploaded_file($temp_name,"property/$aimage");
	move_uploaded_file($temp_name1,"property/$aimage1");
	move_uploaded_file($temp_name2,"property/$aimage2");
	move_uploaded_file($temp_name3,"property/$aimage3");
	move_uploaded_file($temp_name4,"property/$aimage4");
	
	move_uploaded_file($temp_name5,"property/$fimage");
	move_uploaded_file($temp_name6,"property/$fimage1");
	move_uploaded_file($temp_name7,"property/$fimage2");
	
	$sql="INSERT INTO property (title,pcontent,type,bhk,stype,bedroom,bathroom,balcony,kitchen,hall,floor,size,price,location,city,state,feature,pimage,pimage1,pimage2,pimage3,pimage4,uid,status,mapimage,topmapimage,groundmapimage,totalfloor,isFeatured)
	VALUES('$title','$content','$ptype','$bhk','$stype','$bed','$bath','$balc','$kitc','$hall','$floor','$asize','$price',
	'$loc','$city','$state','$feature','$aimage','$aimage1','$aimage2','$aimage3','$aimage4','$uid','$status','$fimage','$fimage1','$fimage2','$totalfloor','$isFeatured')";
	$result=mysqli_query($con,$sql);
	if($result)
		{
			$msg="<p class='alert alert-success'>Property Inserted Successfully</p>";
					
		}
		else
		{
			$error="<p class='alert alert-warning'>Something went wrong. Please try again</p>";
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


        <style>
        .hidden { display: none; }
    </style>
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>

		
			<!-- Header -->
			<?php include("header.php"); ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Property</h3>
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
									<h4 class="card-title">Add Property Details</h4>
								</div>
								<form method="post" enctype="multipart/form-data">
								<div class="card-body">
									<h5 class="card-title">Property Detail</h5>
									<?php echo $error; ?>
									<?php echo $msg; ?>
									
										<div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Title</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="title" required placeholder="Enter Title">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Content</label>
													<div class="col-lg-9">
														<textarea class="tinymce form-control" name="content" rows="10" cols="30"></textarea>
													</div>
												</div>
												
											</div>
                                            <div class="col-xl-12">
                                                <div class="form-group row">
													<label class="col-lg-3 col-form-label">Property Type</label>
													<div class="col-lg-9">
														<select class="form-control" required id="property-type" name="property_type">
															<option value="">Select Property Type</option>
															<option value="RESIDENTIAL PROPERTY">RESIDENTIAL PROPERTY</option>
															<option value="COMMERCIAL PROPERTY">COMMERCIAL PROPERTY</option>
															<option value="PLOTTING PROPERTY">PLOTTING PROPERTY</option>
															
														</select>
													</div>
												</div>
                                             </div>
                                             <hr style="width:100%">

                                            <div id="residential-fields" class="hidden">
                                                <div class="col-xl-6">
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-form-label fields-form">Property Type</label>
                                                        <div class="col-lg-9">
                                                            <select class="form-control" required id="property-type" name="property_type">
                                                                <option value="">Select Property Type</option>
                                                                <option value="RESIDENTIAL PROPERTY">RESIDENTIAL PROPERTY</option>
                                                                <option value="COMMERCIAL PROPERTY">COMMERCIAL PROPERTY</option>
                                                                <option value="PLOTTING PROPERTY">PLOTTING PROPERTY</option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
													<label class="col-lg-3 col-form-label">Selling Type</label>
													<div class="col-lg-9">
														<select class="form-control" required name="stype">
															<option value="">Select Status</option>
															<option value="rent">Rent</option>
															<option value="sale">Sale</option>
														</select>
													</div>
												</div>
                                                </div>
                                            </div>



                                            

                                            <!-- Fields for Residential -->
                                            <div id="residential-fields" class="hidden">
                                                
                                                <label for="bedrooms">Number of Bedrooms:</label>
                                                <input type="number" id="bedrooms" name="bedrooms"><br>

                                                <label for="bathrooms">Number of Bathrooms:</label>
                                                <input type="number" id="bathrooms" name="bathrooms"><br>

                                                <label for="parking">Parking Available:</label>
                                                <input type="checkbox" id="parking" name="parking"><br>
                                            </div>

                                            <!-- Fields for Commercial -->
                                            <div id="commercial-fields" class="hidden">
                                            
                                                <label for="office-space">Office Space (sq. ft.):</label>
                                                <input type="number" id="office-space" name="office_space"><br>

                                                <label for="conference-rooms">Number of Conference Rooms:</label>
                                                <input type="number" id="conference-rooms" name="conference_rooms"><br>

                                                <label for="cafeteria">Cafeteria:</label>
                                                <input type="checkbox" id="cafeteria" name="cafeteria"><br>
                                            </div>

                                            <!-- Fields for Land -->
                                            <div id="land-fields" class="hidden">
                    
                                                <label for="plot-size">Plot Size (sq. ft.):</label>
                                                <input type="number" id="plot-size" name="plot_size"><br>

                                                <label for="zoning">Zoning Type:</label>
                                                <input type="text" id="zoning" name="zoning"><br>
                                            </div>

                                            <!-- JavaScript to dynamically show/hide fields -->
                                            <script>
                                                document.getElementById('property-type').addEventListener('change', function() {
                                                    // Hide all sections
                                                    document.getElementById('residential-fields').classList.add('hidden');
                                                    document.getElementById('commercial-fields').classList.add('hidden');
                                                    document.getElementById('land-fields').classList.add('hidden');

                                                    // Show the relevant section based on selected property type
                                                    var selectedType = this.value;
                                                    if (selectedType === 'RESIDENTIAL PROPERTY') {
                                                        document.getElementById('residential-fields').classList.remove('hidden');
                                                    } else if (selectedType === 'COMMERCIAL PROPERTY') {
                                                        document.getElementById('commercial-fields').classList.remove('hidden');
                                                    } else if (selectedType === 'PLOTTING PROPERTY') {
                                                        document.getElementById('land-fields').classList.remove('hidden');
                                                    }
                                                });
                                            </script>
                                                    <!-- /Main Wrapper -->

		
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