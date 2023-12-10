

    <?php
   require "includes/header.php"; 
    require "../controllers/Bookingcontroller.php";
    $allBookings = [];
    if(isset($_GET['id']))
    {
      $id = $_GET['id'];
      echo $id;
       $bookingctr=new Bookingcontroller();
        $allBookings = $bookingctr->listebookings($id);
    }
   
    ?>
<?php if (count ($allBookings)>0) :?>
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">check_in </th>
      <th scope="col">check_out</th>
      <th scope="col">full_name</th>
      <th scope="col">email</th>
      <th scope="col">phone_number</th>
      <th scope="col">room_name</th>
      <th scope="col">hotel_name</th>
      <th scope="col">created_at</th>
      
    </tr>
  </thead>
  <tbody>
    <?php foreach ($allBookings as $booking):?>

    <tr>
      <th scope="row"><?php echo $booking['check_in'];?></th>
      <td><?php echo $booking['check_out'];?></td>
      <td><?php echo $booking['full_name'];?></td>
      <td><?php echo $booking['email'];?></td>
      <td><?php echo $booking['phone_number'];?></td>
      <td><?php echo $booking['room_name'];?></td>
     
      <td><?php echo $booking['hotel_name'];?></td>
    
      <td><?php echo $booking['created_at'];?></td>
    
    </tr>
<?php endforeach ;?>
  </tbody>
</table>
<?php else : ?>
    <div class="alert alert-primary" role="alert">
  Make your Bookings with us Now ! 
</div>
<?php endif;?>



<?php require "includes/footer.php"; ?>
