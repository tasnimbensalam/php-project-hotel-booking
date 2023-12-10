<?php require "../../includes/admin-header.php";

require "../../../controllers/roomcontroller.php";  
   
   

   if(!isset($_SESSION['adminame'])){
    echo"<script>window.location.href='".ADMINURL."/admins/login-admins.php'</script>";
   }


   $all=new roomcontroller();
   $allrooms=$all->listeRooms();
  
   ?>

          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Rooms</h5>
             <a  href="create-rooms.php" class="btn btn-primary mb-4 text-center float-right">Create Room</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">number of persons</th>
                    <th scope="col">size</th>
                    <th scope="col">view</th>
                    <th scope="col">number of beds</th>
                    <th scope="col">hotel name</th>
                    <th scope="col">status value</th>
                    <th scope="col">change status</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($allrooms as $room) : ?>
                  <tr>
                    <th scope="row"><?php echo $room->id ?></th>
                    <td><?php echo $room->name ?></td>
                    <td><?php echo $room->price ?></td>
                   
                    <td><?php echo $room->num_persons ?></td>
                    <td><?php echo $room->size ?></td>
                    <td><?php echo $room->view ?></td>
                    <td><?php echo $room->num_beds ?></td>
                    <td><?php echo $room->hotel_name ?></td>
                    <td><?php echo $room->status; ?></td>

                    <td><a href="status-rooms.php?id=<?php echo $room->id; ?>" class="btn btn-danger  text-center ">status</a></td>
                    <td><a  onclick="confirmDelete(<?php echo $room->id; ?>)" class="btn btn-danger  text-center ">Delete </a></td>
                  </tr>
             <?php endforeach;?>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>
     <script type="text/javascript">
            function confirmDelete(id) {
          if(confirm('Are you sure you want to delete this room?')) {
              window.location.href = 'delete-rooms.php?id=' + id;
          }
      }
      </script>



  </div>
<script type="text/javascript">

</script>
</body>
</html>