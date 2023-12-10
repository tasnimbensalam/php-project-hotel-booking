<?php require "../../includes/admin-header.php";
require "../../../controllers/admincontroller.php";

   if(!isset($_SESSION['adminame'])){
    echo"<script>window.location.href='".ADMINURL."/admins/login-admins.php'</script>";
   }


  
  
   $adminController = new admincontroller();
$alladmins = $adminController->getAdmin();
   ?>

      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Admins</h5>
             <a  href="create-admins.php" class="btn btn-primary mb-4 text-center float-right">Create Admins</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">admin name</th>
                    <th scope="col">email</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach( $alladmins as $admin) : ?>
                  <tr>
                    <th scope="row"><?php echo $admin['id'];?></th>
                    <td><?php echo $admin['adminame'];?></td>
                    <td><?php echo $admin['email'];?></td>
                   
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