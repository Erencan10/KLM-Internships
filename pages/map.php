<?php 
if (!isset($basePath)) {
    $basePath = '..';
}
include('../header.php'); ?>
<main>
<link rel="stylesheet" href="../css/style.css">

    <section class="map-section">
        <h2>Road to Building 411</h2>
        
        <div class="map-step">
            <h3>1. Schiphol Airport</h3>
            <p>
                Starting from Schiphol airport your best chance of getting to Building 411 will be through taking the bus.<br> 
                Preferably bus numbers 180, 199, 300, 341, and 397. These buses will take you to Knooppunt Schiphol Noord.
            </p>
        </div>

        <div class="map-step">
            <h3>2. Knooppunt Schiphol Noord</h3>
            <p>
                After you arrive at the Knooppunt Schiphol Noord station,<br> take bus 180 or 186 to Knooppunt Schiphol Oost.
            </p>
        </div>

        <div class="map-step">
            <h3>3. Knooppunt Schiphol Oost</h3>
            <p>
                Almost there! After taking bus 180 or 186, you’ll have a 5-minute walk to the security gate of Schiphol-Oost.<br> 
                Exit the bus, turn left, and shortly thereafter, turn right.<br> This route takes you to the security gate, where 
                you’ll pick up your visitor pass.<br> Bring your passport or ID card (driver licenses are not allowed). 
                After the security gate, walk straight at the roundabout for about 5 minutes.<br> Building 411 will be on your right-hand side.
            </p>
        </div>

        <div class="map-step">
            <h3>4. Building 411</h3>
            <p>
                Congrats, you’ve made it! The E&M internship market is on the ground floor at location Arena. After entering the revolving door, 
                take the first door on your left and walk straight ahead.
            </p>
        </div>

        <div class="map-image">
            <img src="../images/route_to_411.png" alt="Route to Building 411">
        </div>
    </section>
</main>
<?php include('../footer.php'); ?>
