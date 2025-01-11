<?php
// Array of treatment images and alt text
$treatments = [
    ["img" => "treatment/erectile.jpeg", "alt" => "Erectile Dysfunction"],
    ["img" => "treatment/unnamed1.jpg", "alt" => "Premature Ejaculation"],
    ["img" => "treatment/unnamed41.jpg", "alt" => "Low Libido in Men"],
    ["img" => "treatment/unnamed5.jpg", "alt" => "Penis Enlargement"],
    ["img" => "treatment/unnamed9.jpg", "alt" => "Low Sperm Count"],
    ["img" => "treatment/unnamed12.jpg", "alt" => "Nightfall"],
    ["img" => "treatment/unnamed15.jpg", "alt" => "Weight Gain"],
    ["img" => "treatment/unnamed18.jpg", "alt" => "Weight Loss"],
    ["img" => "treatment/unnamed21.jpg", "alt" => "Low Libido in Women"],
    ["img" => "treatment/unnamed24.jpg", "alt" => "Diabetes"],
    ["img" => "treatment/unnamed27.jpg", "alt" => "Breast Enlargement"],
    ["img" => "treatment/unnamed30.jpg", "alt" => "Leukorrhea"],
    ["img" => "treatment/unnamed35.jpg", "alt" => "Joint Pain"],
    ["img" => "treatment/unnamed36.jpg", "alt" => "DHT"]
];
?>

    <style>
        .tile {
            position: relative;
            padding: 15px;
            background-color: #f8f9fa;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .tile:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .tile img {
            max-height: 200px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        /* Center the section title */
        .section-title {
            text-align: center;
            margin-bottom: 30px;
        }

        /* Responsiveness for mobile */
        @media (max-width: 576px) {
            .tile img {
                max-height: 150px;
            }
        }
    </style>


<section class="treatmentoffer py-5">
    <div class="container">
        <div class="row">
            <!-- Section Title -->
            <div class="col-12 text-center mb-4">
                <h4>Treatment We Offer</h4>
                <h5>We Provide You The Best Treatment For Sex Problems</h5>
            </div>

            <!-- Loop through treatments array -->
            <?php foreach ($treatments as $treatment): ?>
                <div class="col-sm-3 col-6 mb-3">
                    <div class="tile animate__animated animate__fadeInLeft">
                        <img src="<?php echo $treatment['img']; ?>" alt="<?php echo $treatment['alt']; ?>" class="img-fluid">
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
