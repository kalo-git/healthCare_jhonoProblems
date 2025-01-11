<!-- Hero Section (Carousel) -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel"style="margin-top: 55px;">
    <div class="carousel-inner">
        <?php
        // Array of image paths
        $images = [
            'assets/images/Q8DUeOwUv.jpg',
            'assets/images/M2IC-6pXh.jpg',
            'assets/images/duq72_8B7.jpg',
            'assets/images/9tBsoPzt8.jpg'
        ];

        // Loop to generate carousel items
        foreach ($images as $index => $image) {
            $activeClass = ($index === 0) ? 'active' : '';  // Make the first image active
            echo "
                <div class='carousel-item $activeClass'>
                    <img src='$image' class='d-block w-100 carousel-img' alt='Slide $index'>
                </div>
            ";
        }
        ?>
    </div>
    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<style>
    /* Apply styles for the carousel images */
    .carousel-item img.carousel-img {
        height: 550px;
        object-fit: cover;
        object-position: top center;
    }

    /* Ensure the carousel inner has correct width and height */
    .carousel-inner {
        width: 100%;
        height: 550px;
    }
</style>

    <style>
        /* Custom styles */
        .service-box {
            padding: 15px;
            border-radius: 10px;
            background-color: #f8f9fa;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        /* Hover effect */
        .service-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        /* Text styling */
        .service-box p {
            font-size: 1rem;
            font-weight: 500;
            margin-top: 10px;
        }

        /* Centering the section title */
        .section-title {
            text-align: center;
            margin-bottom: 30px;
        }

        /* Ensure images are responsive */
        .service-box img {
            max-height: 150px;
            object-fit: cover;
            margin-bottom: 10px;
        }
    </style>


    <!-- Container for services -->
    <div class="container mt-5">
        <div class="row">

            <!-- Service Boxes -->
            <div class="col-sm-2 col-6 mb-4">
                <div class="service-box animate__animated animate__fadeInDown text-center">
                    <img src="assets\images\doctor.jpg" class="img-fluid" alt="Experienced Doctor">
                    <p>Experienced Doctor</p>
                </div>
            </div>

            <div class="col-sm-2 col-6 mb-4">
                <div class="service-box animate__animated animate__fadeInDown text-center">
                    <img src="assets\images\medicine.jpg" class="img-fluid" alt="Customized Medicines">
                    <p>Customized Medicines</p>
                </div>
            </div>

            <div class="col-sm-2 col-6 mb-4">
                <div class="service-box animate__animated animate__fadeInDown text-center">
                    <img src="assets\images\result.jpg" class="img-fluid" alt="Result Oriented">
                    <p>Result Oriented</p>
                </div>
            </div>

            <div class="col-sm-2 col-6 mb-4">
                <div class="service-box animate__animated animate__fadeInDown text-center">
                    <img src="assets\images\vegetarian.jpg" class="img-fluid" alt="Pure Vegetarian">
                    <p>Pure Vegetarian</p>
                </div>
            </div>

            <div class="col-sm-2 col-6 mb-4">
                <div class="service-box animate__animated animate__fadeInDown text-center">
                    <img src="assets\images\care.jpg" class="img-fluid" alt="Personal Care">
                    <p>Personal Care</p>
                </div>
            </div>

            <div class="col-sm-2 col-6 mb-4">
                <div class="service-box animate__animated animate__fadeInDown text-center">
                    <img src="assets\images\privacy.jpg" class="img-fluid" alt="Assured Privacy">
                    <p>Assured Privacy</p>
                </div>
            </div>
        </div>
    </div>

