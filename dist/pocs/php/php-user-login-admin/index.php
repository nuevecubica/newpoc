<?php

$DAO = $_SERVER["DOCUMENT_ROOT"] . 'assets/dao/';
require_once($DAO . 'init.php');
$pagename = "PHP User Index";
//include_layout_element('poc_header.php');
include_once ('../../poc_header.php');

If (!$session->is_logged_in()) {
    redirect_to("login.php");
}else{
    $logged_user = get_object_vars(User::find_by_id($_SESSION['id']));
}


?>
<div class="app-holder">
    <article>
        <button class="btn back"><a href="logout.php">logout</a></button>
        <div class="spacer"></div>
        <p>Welcome</p>
        <h2><?php echo 'User: '.  $logged_user['user_name'].' '.$logged_user['user_lastname']; ?></h2>
        <button class="btn  btn-primary"><a href="upload">upload a file</a></button>
        <button class="btn  btn-primary"><a href="admin.php"><i class="fa fa-arrow-circle-o-right"></i> Go to Admin</a></button>
        <button class="btn  btn-primary"><a href="logfile.php"><i class="fa fa-arrow-circle-o-right"></i> log file</a></button>
        <button class="btn  btn-primary"><a href="gallery.php"><i class="fa fa-arrow-circle-o-right"></i> Gallery</a></button>
        <button class="btn  btn-primary"><a href="admin_images.php"><i class="fa fa-arrow-circle-o-right"></i> Admin Gallery</a></button>
        <div class="spacer"></div>
        <p class="message"><?php echo output_message($message); ?></p>
        <div class="spacer"></div>
    </article>
</div>
<?php
include_layout_element('poc_footer.php');
?>
