<?php include "includes/header.php"; ?>
<style>


.page-heading {
    background-size: cover;
    width: 100%;
    height: 225px;
    background-position: top;
    display: flex;
    justify-content: center; /* Center the content horizontally */
    align-items: center; /* Center the content vertically */
    color: white; /* Ensures text is visible on dark backgrounds */
    text-align: center; /* Centers the text inside the div */
}

.animate__fadeInDown {
    -webkit-animation-name: fadeInDown;
    animation-name: fadeInDown;
    animation-duration: 1s; /* Controls how long the animation takes */
    animation-timing-function: ease-out; /* Controls the speed curve of the animation */
}

@keyframes fadeInDown {
    0% {
        opacity: 0;
        transform: translateY(-20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<div id="siteContent" class="page-heading animate__animated animate__fadeInDown mt-5" style="background-image: url('assets/images/refund-policy.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2>Refund Policy</h2>
      </div>
    </div>
  </div>
</div>

<div class="refund-policy my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 animate__animated animate__fadeInDown">
                    <h1>Refund Policy is valid only for those customers who have:</h1>
                    <ol>
                        <li>Taken medicine for not less than 30 days.</li>
                        <li>Opted for medicine of ‘Fat Loss’, ‘Breast Enlargement’—must inform within the time span of 30 days about recovery. The return policy is not valid after 31 days.</li>
                        <li>Taken medicine for problems like Sex Weakness, Early Discharge, Weight Gain—must inform within 10 days about the medicine. On the 11th day, the cashback policy is no longer valid.</li>
                        <li>Cashback policy is not valid for problems like Low Sperm Count, Penis Size not Increasing, as these may take time to cure. Patients can either receive changed medicine or get a 15-day extension of the current medicine after the completion of the course.</li>
                    </ol>
                    <p><strong>Important Note:</strong> <strong>Patients informing within 10 days can either get the medication changed or receive a refund</strong>. However, Rs. 1000/- and courier charges will be deducted from the refunded amount.</p>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="refundimg animate__animated animate__fadeInDown">
                        <img src="assets/images/refundpolicy.jpg" class="img-fluid" alt="refund policy">
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "includes/footer.php"; ?>
