
<?php require "../../includes/admin-header.php";
require "../../../controllers/Bookingcontroller.php";
if(!isset($_SESSION['adminame'])){
  echo"<script>window.location.href='".ADMINURL."/admins/login-admins.php'</script>";
 }

$Bookingcontroller=new Bookingcontroller();
$allbookings=$Bookingcontroller->listebookingss();


?>
            <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Bookings</h5>
            
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">check in</th>
                    <th scope="col">check out</th>
                    <th scope="col">email</th>
                    <th scope="col">phone number</th>
                    <th scope="col">full name</th>
                    <th scope="col">hotel name</th>
                    <th scope="col">booking name</th>
                    <th scope="col">status</th>
                    <th scope="col">created at</th>
                  
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php foreach($allbookings as $booking) : ?>
                  <tr>
                    <th scope="row"><?php echo $booking['id']?></th>
                    <td><?php echo $booking['check_in'] ?></td>
                    <td><?php echo $booking['check_out'] ?></td>
                   
                    <td><?php echo $booking['email'] ?></td>
                    <td><?php echo $booking['phone_number'] ?></td>
                    <td><?php echo $booking['full_name']?></td>
                    <td><?php echo $booking['hotel_name']?></td>
                    <td><?php echo $booking['room_name'] ?></td>
                    <td><?php echo $booking['status']; ?></td>
                    <td><?php echo $booking['created_at']; ?></td>
                   
                  </tr>
                 
                     <td><a href="status-bookings.php?id=<?php echo $booking['id']; ?>" class="btn btn-danger  text-center ">Status</a></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>



  </div>
<script type="text/javascript">

</script>
</body>
</html>