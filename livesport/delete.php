<?php
//load model
require_once('admin/models/livesports.php');
$iid = intval($_GET['id']);
livesport_delete($iid);
header('location:admin.php?controller=livesport');