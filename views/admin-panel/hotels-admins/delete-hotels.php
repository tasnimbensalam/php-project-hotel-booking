
<?php
require '../../includes/admin-header.php';
require '../../../controllers/Hotelscontroller.php';

if (isset($_GET['id'])) {
    $hotelId = $_GET['id'];
    $controller = new Hotelscontroller();
    $controller->delete($hotelId);
}

// Redirect to a confirmation page or back to the list
header('Location: show-hotels.php');
exit;
?>