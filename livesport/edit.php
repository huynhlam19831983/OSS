<?php
//load model
require_once('admin/models/livesports.php');
if (!empty($_POST)) {
    $livesport = array(
        'Id' => intval($_POST['id']),
        'Title' => escape($_POST['title']),
        'Description' => ($_POST['content']),
        'Link' => escape($_POST['linkyoutube']),
        'Url1' => escape($_POST['url1']),
        'Url2' => escape($_POST['url2'])
    );
    save('livesport', $livesport);
    header('location:admin.php?controller=livesport');
} else {
}
if (isset($_GET['id'])) $iid = intval($_GET['id']); else $iid=0;
$title = ($iid==0) ? 'Thêm phần phát trực tuyến' : 'Sửa phần phát trực tuyến';
$user = $_SESSION['user'];
$livesport = get_a_record('livesport', $iid);
//load view
require('admin/views/livesport/edit.php');