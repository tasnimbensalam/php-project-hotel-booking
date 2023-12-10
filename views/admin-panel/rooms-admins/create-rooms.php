<?php require "../../includes/admin-header.php";
require "../../../controllers/Hotelscontroller.php";
require "../../../controllers/roomcontroller.php"; 
   


   if(!isset($_SESSION['adminame'])){
    echo"<script>window.location.href='".ADMINURL."/admins/login-admins.php'</script>";
   }
   $hotel=new Hotelscontroller();
   $allhotels=$hotel->listeHotels();
   if(isset($_POST["submit"]) ) {
    if(empty($_POST['name']) OR empty($_POST['hotel_name']) OR empty($_POST['hotel_id']) OR empty($_POST['num_beds']) OR empty($_POST['num_persons']) or empty($_POST['size']) or empty($_POST['view']) or empty($_POST['price'])) {
    echo"<script>alert('one or more input are empty')</script>";}
    else {
      $name =$_POST['name'];
      $price = $_POST['price'];	
      $num_persons= $_POST['num_persons'];
      $num_beds=$_POST['num_beds'];
      $size =$_POST['size'];
      $view =$_POST['view'];
      $hotel_name =$_POST['hotel_name'];
      $hotel_id =$_POST['hotel_id'];
      $image=$_FILES['image']['name'];
      $dir ="room_images/".basename($image) ;
     $insert=new roomcontroller();
      $h=new Rooms( $name, $image, $num_persons, $size, $view, $num_beds, $hotel_id, $hotel_name,  $price);
      $f=$insert->insert($h);
   

      if(move_uploaded_file($_FILES['image']['tmp_name'],$dir)){
        header("Location: show-rooms.php");
      }

      
  
    }
    
  } ?>
       <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Create Rooms</h5>
          <form method="POST" action="create-rooms.php" enctype="multipart/form-data">
                <!-- Email input -->
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="name" id="form2Example1" class="form-control" placeholder="name" />
                 
                </div>
                <div class="form-outline mb-4 mt-4">
                  <input type="file" name="image" id="form2Example1" class="form-control" />
                 
                </div>  
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="price" id="form2Example1" class="form-control" placeholder="price" />
                 
                </div> 
                 <div class="form-outline mb-4 mt-4">
                  <input type="text" name="num_persons" id="form2Example1" class="form-control" placeholder="num_persons" />
                 
                </div> 
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="num_beds" id="form2Example1" class="form-control" placeholder="num_beds" />
                 
                </div> 
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="size" id="form2Example1" class="form-control" placeholder="size" />
                 
                </div> 
               <div class="form-outline mb-4 mt-4">
                <input type="text" name="view" id="form2Example1" class="form-control" placeholder="view" />
               
               </div> 
               <select class="form-control" name="hotel_name">
                <option>Choose Hotel Name</option>
                <?php foreach($allhotels as $hotel): ?>
                  <option value="<?php echo $hotel->name;?>">  <?php echo $hotel->name;?>  </option>
                  <?php endforeach;?>
               </select>
               <br>
                  
               <select class="form-control" name="hotel_id">
                <option>Choose Same Hotel Once Again</option>
                <?php foreach($allhotels as $hotel): ?>
                  <option value="<?php echo $hotel->id;?>"><?php echo $hotel->name;?></option>
                 <?php endforeach; ?>
               </select>
               <br>

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