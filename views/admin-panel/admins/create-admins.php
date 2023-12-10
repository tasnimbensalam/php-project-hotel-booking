<?php require "../../includes/admin-header.php";
require "../../../controllers/admincontroller.php";
$adctr=new admincontroller();
if(!isset($_SESSION['adminame'])){
  echo"<script>window.location.href='".ADMINURL."/admins/login-admins.php'</script>";
 }


 if(isset($_POST["submit"]) ) {
  if(empty($_POST['adminame']) OR empty($_POST['email']) OR empty($_POST['password'])) {
  echo"<script>alert('one or more input are empty')</script>";}
  else {
    $adminame =$_POST['adminame'];
    $email = $_POST['email'];	
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $adctr->createadmin($adminame,$email,$password);
    header("Location: admins.php");
    exit();
}

} 
?>
        <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Create Admins</h5>
          <form method="POST" action="create-admins.php" enctype="multipart/form-data">
                <!-- Email input -->
                <div class="form-outline mb-4 mt-4">
                  <input type="email" name="email" id="form2Example1" class="form-control" placeholder="email" />
                 
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="adminame" id="form2Example1" class="form-control" placeholder="adminame" />
                </div>
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form2Example1" class="form-control" placeholder="password" />
                </div>

               
            
                
              


                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>

          
              </form>

            </div>
          </div>
        </div>
      </div>
  </div>
<script type="text/javascript">

</script>
</body>
</html>