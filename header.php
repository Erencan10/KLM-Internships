<?php
if (!isset($pageTitle)) {
    $pageTitle = 'KLM Internship Market';
}
if (!isset($basePath)) {
    $basePath = '.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    <header>
        <nav>
            <div class="logo">
            <a href="<?php echo $basePath; ?>""><img src="<?php echo $basePath; ?>/images/logo_klm2.png" alt="KLM Logo" class="logo"></a>
            </div>
            <ul>
                <li><a href="<?php echo $basePath; ?>/pages/safety.php">Safety</a></li>
                <li><a href="<?php echo $basePath; ?>/pages/map.php">Map</a></li>
                <li><a href="<?php echo $basePath; ?>/pages/schedule.php">Schedule</a></li>
                <li><a href="<?php echo $basePath; ?>/pages/em.php">About KLM E&M</a></li>
                <li><a href="<?php echo $basePath; ?>/pages/innovation.php">Innovation</a></li>
                <li><a href="<?php echo $basePath; ?>/pages/vacancy.php">Vacancy</a></li>
                <li><a href="<?php echo $basePath; ?>/pages/faq.php">FAQ</a></li>
            </ul>
        </nav>
    </header>
    <main>
