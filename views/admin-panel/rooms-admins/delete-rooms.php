
<?php
require '../../includes/admin-header.php';
require '../../../controllers/roomcontroller.php';

if (isset($_GET['id'])) {
    $roomId = $_GET['id'];
    $controller = new roomcontroller();
    $controller->delete($roomId);
}


header('Location: show-rooms.php');
exit;
?>