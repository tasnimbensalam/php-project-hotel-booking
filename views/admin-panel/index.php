<?php
 require "../includes/admin-header.php"; 
require "../../controllers/Hotelscontroller.php";
require "../../controllers/roomcontroller.php"; 
require "../../controllers/Bookingcontroller.php"; 
require "../../controllers/admincontroller.php"; 
$bctr=new bookingcontroller();
$allbookings=$bctr->getCountBoking();
$h= new Hotelscontroller();
$allHotels=$h->getCountHotels();
$a=new admincontroller();
$alladmins=$a->getCountAdmins();
$r=new roomcontroller();
$allrooms=$r->getCountRooms();
?>
<div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Hotels</h5>
              <p class="card-text">Number of hotels: <?php echo $allHotels->count_hotels; ?> </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Rooms</h5>
              <p class="card-text">Number of rooms: <?php echo $allrooms->count_rooms; ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Admins</h5>
              <p class="card-text">Number of admins: <?php echo $alladmins->count_admins; ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bookings</h5>
              <p class="card-text">Number of bookings: <?php echo $allbookings->count_bookings; ?></p>
            </div>
          </div>
        </div>
      </div>

<script type="text/javascript">

</script>
</body>
</html>
