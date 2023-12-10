<?php 
require "../../includes/admin-header.php";
require "../../../controllers/bookingcontroller.php";

// Check if the 'id' GET parameter is set
if (isset($_GET['id'])) {
    $id = $_GET['id']; // Retrieve the ID

    // Check if the form has been submitted
    if (isset($_POST['submit'])) {
        $status = $_POST['status']; // Retrieve the status from the form submission

        // Create an instance of the bookingcontroller
        $bookingController = new Bookingcontroller();

        // Update the booking with the new status and the ID
        $bookingController->update($status, $id);

        // Redirect to the show-bookings page
        header("location: show-bookings.php");
        exit; // Make sure to call exit after headers to ensure no further script execution
    }
}
?>
       <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline" >Update Status</h5>
          <form method="POST" action="status-bookings.php?id=<?php echo $id ; ?>" enctype="multipart/form-data">
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