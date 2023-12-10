

<?php 
require "../includes/header.php";
require "../../models/users.php";
require "../../controllers/Userscontroller.php";
if(isset($_SESSION["username"])) {
	echo"<script>window.location.href='".APPURL."'</script>";
}
if(isset($_POST["submit"]) ) {
	if(empty($_POST['username']) OR empty($_POST['email']) OR empty($_POST['password'])) {
	echo"<script>alert('one or more input are empty')</script>";}
	else {
		$username =$_POST['username'];
		$email = $_POST['email'];	
		$password = password_hash($_POST['password'],PASSWORD_DEFAULT);

		$user=new Users($username,$email,$password);
		$userctr=new Userscontroller();
		$res=$userctr->insert($user);
		if($res==true){
			
		header("Location: login.php");
		exit();


		}


	}
  
} 


?>
    <div class="hero-wrap js-fullheight" style="background-image: url('<?php echo APPURL;?>../images/image_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<!-- <h2 class="subheading">Welcome to Vacation Rental</h2>
          	<h1 class="mb-4">Rent an appartment for your vacation</h1>
            <p><a href="#" class="btn btn-primary">Learn more</a> <a href="#" class="btn btn-white">Contact us</a></p> -->
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
    	<div class="container">
	    	<div class="row justify-content-middle" style="margin-left: 397px;">
	    		<div class="col-md-6 mt-5">
						<form action="register.php" method="POST" class="appointment-form" style="margin-top: -568px;">
							<h3 class="mb-3">Register</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
			    					    <input type="text" name="username" class="form-control" placeholder="Username">
			    				    </div>
								</div>
                                <div class="col-md-12">
									<div class="form-group">
			    					    <input type="email" name="email" class="form-control" placeholder="Email">
			    				    </div>
								</div>
                                <div class="col-md-12">
									<div class="form-group">
			    					    <input type="password" name="password" class="form-control" placeholder="Password">
			    				    </div>
								</div>
								
							
							
								<div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" name="submit" value="Register" class="btn btn-primary py-3 px-4">
                                    </div>
								</div>
							</div>
	    			</form>
	    		</div>
	    	</div>
	    </div>
    </section>

    <?php require "../includes/footer.php"; ?>