<?php
// Example PHP variables for the Google Maps embed URL
$address = "Shraman Health Care"; // You can change this dynamically if needed
$latitude = 31.327835; // Latitude for Shraman Health Care
$longitude = 75.57986; // Longitude for Shraman Health Care
$zoom = 13; // You can change zoom level based on your preference

// Construct the Google Maps Embed URL with the PHP variables
$mapUrl = "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6816.256213245186!2d{$longitude}!3d{$latitude}!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1ba4a577d1db35b!2s" . urlencode($address) . "!5e0!3m2!1sen!2sin!4v1591031934793!5m2!1sen!2sin";
?>

<div class="map-route">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                <iframe title="shraman healthcare address" src="<?php echo $mapUrl; ?>" height="450" frameborder="0" aria-hidden="false" tabindex="0" style="width: 100%;"></iframe>
            </div>
        </div>
    </div>
</div>
