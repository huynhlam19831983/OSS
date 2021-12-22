<?php
//load model
require_once('admin/models/livesports.php');


if (isset($_POST['id'])) {
    foreach ($_POST['id'] as $iid) {
        $iid = intval($iid);
        livesport_delete($iid);
    }
}
$url = 'admin.php?controller=livesport';
$options = array(
    'order_by' => 'Id ASC'
);
$title = 'Quản lý thể thao trực tuyến';
$user = $_SESSION['user'];
$livesports = get_all('livesport', $options);
//load view
require('admin/views/livesport/index.php');