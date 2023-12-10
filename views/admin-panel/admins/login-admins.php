<?php
require "../../includes/admin-header.php";
require "../../../controllers/admincontroller.php";

if(isset($_SESSION["adminame"])) {
    echo "<script>window.location.href='".ADMINURL."'</script>";
}

if (isset($_POST["submit"])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        echo "<script>alert('One or more input fields are empty')</script>";
    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Validate the email with a prepared statement
        $login = new admincontroller();
        $result = $login->login($email);

        // Check if a matching user was found
        if ($result) {
            if (password_verify($password, $result["mypassword"])) {
                echo "<script>alert('LOGGED IN')</script>";
                $_SESSION['adminame'] = $result['adminame'];
                $_SESSION['id'] = $result['id'];
                header("Location: admins.php");
            } else {
                echo "<script>alert('Email or password is wrong')</script>";
            }
        } else {
            echo "<script>alert('User not found')</script>";
        }
    }
}
?>

      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mt-5">Login</h5>
              <form method="POST" class="p-auto" action="login-admins.php">
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" name="email" id="form2Example1" class="form-control" placeholder="Email" />
                   
                  </div>

                  
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" name="password" id="form2Example2" placeholder="Password" class="form-control" />
                    
                  </div>



                  <!-- Submit button -->
                  <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">Login</button>

                 
                </form>

            </div>
       </div>
     </div>
    </div>
</div>