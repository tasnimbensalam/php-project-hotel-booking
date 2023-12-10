
<?php require "../../includes/admin-header.php";
require "../../../controllers/Hotelscontroller.php";
$hotel = new Hotelscontroller();

if(isset($_GET['id'])) {
    $id = $_GET['id']; 
    if(isset($_POST['submit'])){
        // Collect input from form
        $name = $_POST['name'];
        $description = $_POST['description'];
        $location = $_POST['location'];
        
        if(empty($name) or empty($description) or empty($location)){
            echo "<script>alert('One or more fields are empty.')</script>";
        } else {
            $hotel->updatee($id, $name, $description, $location);
            header("Location: show-hotels.php");
            exit();
        }
    } else {
        
        $hotelSingle = $hotel->getHotelById($id); 
       print_r ($hotelSingle);
       
            }
}
?>
     <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Update Hotel</h5>
          <form method="POST" action="update-hotels.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                <!-- Email input -->
                <div class="form-outline mb-4 mt-4">
                  <input type="text" value="<?php echo $hotelSingle['name']; ?>" name="name" id="form2Example1" class="form-control" placeholder="name" />
                 
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Description</label>
                  <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"><?php echo $hotelSingle['description']; ?></textarea>
                </div>

                <div class="form-outline mb-4 mt-4">
                  <label for="exampleFormControlTextarea1">Location</label>

                  <input type="text" value="<?php echo $hotelSingle['location']; ?>" name="location" id="form2Example1" class="form-control"/>
                 
                </div>

      
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">update</button>

          
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