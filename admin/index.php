<?php include('design/menu.php'); ?>
<?php include('design/connect.php'); ?>

<?php 	

session_start();

include("design/connect.php");
include("functions.php");

$user_data = check_login($con);



?>
<!-- main section starts -->

<div class="main">
    <div class="wrapper">
	     <h1> DASHBOARD </h1>
	     <div>
	     	<br>
Hello, <?php echo $user_data['username']; ?>
	</div>
	    <br><br>
            

	     <div class="col-4 foot">
	     	<h1>5</h1>
	     	Admins
	     </div>

	     <div class="col-4 foot">
	     	<h1>5</h1>
	     	Categories
	     </div>

	     <div class="col-4 foot">
	     	<h1>5</h1>
	     	Foods
	     </div>

	     <div class="col-4 foot">
	     	<h1>5</h1>
	     	Orders
	     </div>

	     <div class="clearfix"></div>
	</div>
</div>

<!-- main section ends -->

<?php include('design/footer.php'); ?>
