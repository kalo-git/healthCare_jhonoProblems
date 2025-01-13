<?php
include 'includes/header.php';
?>


<?php
$backgroundImage = "./assets/images/contactus.jpg"; // Path to the background image
$pageHeading = "Contact Us"; // Page heading text
?>

<div id="siteContent" class="page-heading animate__animated animate__fadeInDown" 
     style="
        background-image: url('<?php echo $backgroundImage; ?>');
        background-size: cover;
        width: 100%;
        height: 225px;
        background-position: top;
        display: flex;
        justify-content: flex-start;
        align-items: center;
            margin-top: 55px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2><?php echo htmlspecialchars($pageHeading); ?></h2>
            </div>
        </div>
    </div>
</div>

    <div class="container m-from">
        <h1 class="my-4 text-center">Contact Us</h1>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <form id="contactForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <script>
        // Form submission handler
        document.getElementById('contactForm').addEventListener('submit', function (event) {
            event.preventDefault();

            // Retrieve form values
            const name = document.getElementById('name').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const email = document.getElementById('email').value.trim();
            const message = document.getElementById('message').value.trim();

            // Validate the form data
            if (name && phone && email && message) {
                // WhatsApp Number
                const whatsappNumber = '9937062438';

                // Correct the WhatsApp message format
                const whatsappMessage = `Vitality Health Care:\nName: ${name}\nPhone: ${phone}\nEmail: ${email}\nMessage: ${message}`;

                // Create WhatsApp URL with properly encoded message
                const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;

                // Redirect to WhatsApp
                window.location.href = whatsappUrl;
            } else {
                // Show an alert if any form fields are empty
                alert('Please fill in all fields');
            }
        });
    </script>

<div class="contactus-content my-5">
    <div class="container">
        <div class="row">
            <!-- Heading -->
            <div class="col-sm-12 mb-5 animate__animated animate__fadeInLeft">
                <h1>Shraman HealthCare</h1>
            </div>
            
            <!-- Address Section -->
            <div class="col-sm-4">
                <div class="contact mb-3 animate__animated animate__fadeInDown animate__delay-1s">
                    <div class="contact-box">
                        <h5>Address</h5>
                        <p>235, Monika Towers, Jalandhar, Punjab, India</p>
                    </div>
                </div>
            </div>

            <!-- Email Section -->
            <div class="col-sm-4">
                <div class="contact mb-3 animate__animated animate__fadeInDown animate__delay-2s">
                    <div class="contact-box">
                        <h5>Email Address</h5>
                        <p>
                            <a href="mailto:shramanhealthcare@gmail.com">shramanhealthcare@gmail.com</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Phone Number Section -->
            <div class="col-sm-4">
                <div class="contact mb-3 animate__animated animate__fadeInDown animate__delay-3s">
                    <div class="contact-box">
                        <h5>Phone Number</h5>
                        <p>
                            <a href="tel:+919317770773">+91 93177-70773</a>, 
                            <a href="tel:+919872813954">+91 98728-13954</a>, 
                            0181 4153002
                        </p>
                    </div>
                </div>
            </div>

            <!-- Google Maps Embed -->
            <div class="col-md-12 mt-5">
                <iframe 
                    title="Shraman Healthcare Address" 
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6816.256213245186!2d75.57986!3d31.327835!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1ba4a577d1db35b!2sShraman%20Health%20Care!5e0!3m2!1sen!2sin!4v1591031934793!5m2!1sen!2sin" 
                    height="450" 
                    frameborder="0" 
                    style="width: 100%;" 
                    allowfullscreen 
                    aria-hidden="false" 
                    tabindex="0">
                </iframe>
            </div>
        </div>
    </div>
</div>


<?php include 'includes/footer.php';?>