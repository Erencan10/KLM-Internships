<?php
if (!isset($basePath)) {
    $basePath = '..';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
  
</head>
<body>
<?php require('../header.php'); ?>

<main>
    <section class="safety-section">
        <h2>Safety First!</h2>
        <p>Your safety is our top priority. Please watch the video below to understand our safety protocols and guidelines.</p>
        <div class="video-container">

            <video controls autplay>
                <source src="../assets/video/safety.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

        </div>
        
    </section>

</main>
<?php include('../footer.php'); ?>

</body>
</html>

