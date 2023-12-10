<?php 
require "../../includes/admin-header.php";
require "../../../controllers/Hotelscontroller.php";


if (isset($_GET['id'])) {
    $id = $_GET['id']; 

    
    if (isset($_POST['submit'])) {
        $status = $_POST['status'];

        // Create an instance of the bookingcontroller
        $bookingController = new Hotelscontroller();

        // Update the booking with the new status and the ID
        $bookingController->update($status, $id);

       
        header("location: show-hotels.php");
        exit; 
    }
}
?>
       <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline" >Update Status</h5>
          <form method="POST" action="status-hotels.php?id=<?php echo $id ; ?>" enctype="multipart/form-data">
                <!-- Email input -->
                <select  name="status" style="margin-top: 15px;" class="form-control">
                    <option>Choose Status</option>
                    <option value="1">1</option>
                    <option value="0">0</option>
                </select>

      
                <!-- Submit button -->
                <button style="margin-top: 10px;" type="submit" name="submit" class="btn btn-primary  mb-4 text-center">update</button>

          
              </form>

            </div>
          </div>
        </div>
      </div>
  </div>
<script type="text/javascript">

</script>
</body>