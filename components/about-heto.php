<?php
// About section content
$aboutContent = [
    'image' => 'assets\images\Ayurveda.jpg',
    'heading' => 'About Shraman Healthcare',
    'paragraph' => 'Shraman Health Care is one of the oldest and well-reputed names in the list of the best Ayurvedic doctors. We are at your service since 1951 and specialize in sex-related problems (male and female), weight gain/lose, joint pain, diabetes, and many other chronic diseases. With the blessings of our mentors and ancestors, we have succeeded in providing the best treatments for the mentioned problems.
    
    Since long, we have earned a good name in the market for providing the best service and quality medicines, not only in India but also abroad. We put our best efforts to give maximum satisfaction to our customers.
    
    We do not believe in making fake promises to our customers, as it is not our policy. We aim at providing quality treatment so that our patients can lead a healthy and happy life.
    
    So, if you are suffering from any kind of such problems, do not hesitate to contact us from any corner of the world. We are here to help you in any manner in which we can.'
];
?>

<section class="aboutsection py-5">
    <div class="container">
        <div class="row">
            <!-- About Image (Left Side) -->
            <div class="col-sm-6 col-12 animate__animated animate__fadeInLeft mb-4 mb-sm-0">
                <img src="<?php echo $aboutContent['image']; ?>" alt="About Us" class="img-fluid rounded-3">
            </div>
            
            <!-- About Text (Right Side) -->
            <div class="col-sm-6 col-12 animate__animated animate__fadeInRight">
                <h4><?php echo $aboutContent['heading']; ?></h4>
                <p><?php echo $aboutContent['paragraph']; ?></p>
            </div>
        </div>
    </div>
</section>
