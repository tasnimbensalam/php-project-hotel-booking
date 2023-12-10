
<?php require "../../includes/admin-header.php";
require "../../../controllers/Hotelscontroller.php";
 if(!isset($_SESSION['adminame'])){
  echo"<script>window.location.href='".ADMINURL."/admins/login-admins.php'</script>";
 }
 if(isset($_POST["submit"]) ) {
  if(empty($_POST['name']) OR empty($_POST['description']) OR empty($_POST['location'])) {
  echo"<script>alert('one or more input are empty')</script>";}
  else {
    $name =$_POST['name'];
    $description = $_POST['description'];	
    $location= $_POST['location'];
    $image=$_FILES['image']['name'];

    $dir ="hotel_images/".basename($image) ;
    $insert=new Hotelscontroller();
    $h=new Hotels($name,$image,$description,$location);
    $f=$insert->insert($h);
  
    if(move_uploaded_file($_FILES['image']['tmp_name'],$dir)){
      header("Location: show-hotels.php");
    }
  }}
?>
       <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Create Hotels</h5>
          <form method="POST" action="create-hotels.php" enctype="multipart/form-data">
                <!-- description input -->
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="name" id="form2Example1" class="form-control" placeholder="name" />
                 
                </div>

                <div class="form-outline mb-4 mt-4">
                  <input type="file" name="image" id="form2Example1" class="form-control"/>
                 
                </div>

                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Description</label>
                  <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="form-outline mb-4 mt-4">
                  <label for="exampleFormControlTextarea1">Location</label>

                  <input type="text" name="location" id="form2Example1" class="form-control"/>
                 
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