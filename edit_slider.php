<?php
require_once './middleware/isAuthenticated.php';
require_once './database/connect.php';
if ( ! isset( $_GET['id'] ) ) {
	header( 'Location: /' );
}

if ( isset( $_POST['form_type'] ) && $_POST['form_type'] === 'update_slider' ) {
	$slider_id           = $_POST['slider_id'];
	$slider_title         = $_POST['Title'];
	$slider_img    = $_POST['ImgSrc'];
	$updated_at        = date( 'Y-m-d H:i:s' );
	$slider_update_query = 'UPDATE Users SET Title = :slider_title , ImgSrc = :slider_img , updated_at = :updated_at WHERE id = :slider_id';
	$stmt              = $db->prepare( $slider_update_query );
	$stmt->bindParam( ':slider_id', $slider_id );
	$stmt->bindParam( ':Title', $slider_title );
	$stmt->bindParam( ':ImgSrc', $slider_img );
	$stmt->bindParam( ':updated_at', $updated_at );
	$stmt->execute();
}
$slider_query = 'SELECT * FROM Slider WHERE id = :slider_id';
$stmt       = $db->prepare( $slider_query );
$stmt->bindParam( ':slider_id', $_GET['id'] );
$stmt->execute();
$slider = $stmt->fetchObject();

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
             <meta name="viewport"
                   content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                         <meta http-equiv="X-UA-Compatible" content="ie=edge">
             <title>Edit User</title>
      <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/styles.css">
</head>
<body>
<div class="layout">
    <div class="bar">
        <div class="user-card">
            <div class="user-image">
                <img src="./assets/images/user_image.png" alt="User image" />
            </div>
            <div class="user-info">
                <span>Gaby Karam</span>
            </div>
            
        </div>
    </div>
    <div class="side">
        <?php require_once './templates/nav.php' ?>
    </div>
    <div class="content">
        <?php require_once './templates/sliders/edit.php'; ?>
    </div>
</div>
</body>
</html>
