<?php
require_once './config.php';
require_once './middleware/isAuthenticated.php';
require_once './database/connect.php';

if ( isset( $_POST['form_type'] ) && $_POST['form_type'] === 'create_slider' ) {
	$slider_title   = $_POST['Title'];
	$slider_img     = $_POST['ImgSrc'];
    $created_at    = date( 'Y-m-d H:i:s' );
    $updated_at    = date( 'Y-m-d H:i:s' );
	$insert        = "INSERT INTO Slider (Title, ImgSrc, created_at, updated_at)
                VALUES ( :Title, :ImgSrc, :created_at, :updated_at )";
	$stmt          = $db->prepare( $insert );
	
	// Bind parameters to statement variables
	$stmt->bindParam( ':Title', $slider_title );
	$stmt->bindParam( ':ImgSrc', $slider_img );
    $stmt->bindParam( ':created_at', $created_at );
	$stmt->bindParam( ':updated_at', $updated_at );
    
	
	if($stmt->execute()){
	   header('Location: ' . WEBSITE_URL. '/slider.php');
    }else {
		header('Location: ' . WEBSITE_URL. '/slider.php?error=Error505');
	}
	
}

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
             <meta name="viewport"
                   content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                         <meta http-equiv="X-UA-Compatible" content="ie=edge">
             <title>Add User</title>
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
                <span>Ashraf El Jurdi</span>
            </div>
            
        </div>
    </div>
    <div class="side">
        <?php require_once './templates/nav.php' ?>
    </div>
    <div class="content">
        <?php require_once './templates/sliders/add.php'; ?>
    </div>
</div>
</body>
</html>
