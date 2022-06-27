<?php include('design/menu.php') ?>
<?php 	

session_start();

include("design/connect.php");
include("functions.php");

$user_data = check_login($con);



?>
<!-- main section starts -->

<div class="main">
    <div class="wrapper">
	     <h1> Manage Order </h1>

	     <table class="content">
	     	<tr>
	     		<th>Number</th>
	     		<th>Full Name</th>
	     		<th>Username</th>
	     		<th>Actions</th>
	     	</tr>

            <tr>
	     	<td>1.</td>
	     	<td>Cedric Victor</td>
	     	<td>Grinel</td>
	     	<td>
	     	<button class="btn-secondary"> Update Admin</button>
	     	<button class="btn-danger"> Delete Admin</button>

	     	</td>
	     	</tr>

	     	<tr>
	     	<td>2.</td>
	     	<td>Cedric Victor</td>
	     	<td>Grinel</td>
	     	<td>
	     	<button class="btn-secondary"> Update Admin</button>
	     	<button class="btn-danger"> Delete Admin</button>
	     	</td>
	     	</tr>

	     	<tr>
	     	<td>3.</td>
	     	<td>Cedric Victor</td>
	     	<td>Grinel</td>
	     	<td>
	     	<button class="btn-secondary"> Update Admin</button>
	     	<button class="btn-danger"> Delete Admin</button>
	     	</td>
	     	</tr>


	     </table>
	     <div class="clearfix"></div>
	</div>
</div>

<!-- main section ends -->


<?php include('design/footer.php') ?>