


<?php 
require "../includes/header.php";

require "../../controllers/Userscontroller.php";

/*if (!isset($_SESSION["username"])) {
    echo "<script>window.location.href='" . APPURL . "'</script>";
}*/

if (isset($_POST["submit"])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        echo "<script>alert('One or more input fields are empty')</script>";
    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $userCtr = new Userscontroller();
        
        try {
            $fetch = $userCtr->getUserByEmail($email);

            // Check if a matching user was found
            if ($fetch) {
                // Verify the entered password with the hashed password from the database
                if (password_verify($password, $fetch["mypassword"])) {
                    $_SESSION['username'] = $fetch['username'];
                    $_SESSION['id'] = $fetch['id'];
                    header("Location: " . APPURL);
                } else {
                    echo "<script>alert('Email or password is wrong')</script>";
                }
            } else {
                echo "<script>alert('User not found')</script>";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>

<div class="hero-wrap js-fullheight" style="background-image: url('<?php echo APPURL ; ?> ../images/image_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate">
                <!-- Your content goes here -->
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row justify-content-middle" style="margin-left: 397px;">
            <div class="col-md-6 mt-5">
                <form action="login.php" method="POST" class="appointment-form" style="margin-top: -568px;">
                    <h3 class="mb-3">Login</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" name="submit" value="Login" class="btn btn-primary py-3 px-4">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require "../includes/footer.php"; ?>
