 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <!-- Logo on the left -->
            <a class="navbar-brand" href="index.php">MyWebsite</a>

            <!-- Navbar Toggler for smaller screens -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="treatment.php">treatment</a></li>
                    
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="RefundPolicy.php">Refund Policy</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <!-- Google Translate Button -->
                    <li class="nav-item">
                        <button class="translate-button" onclick="toggleTranslate()">Translate</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Google Translate Widget (hidden by default) -->
    <div id="google_translate_element" style="display: none;"></div>

