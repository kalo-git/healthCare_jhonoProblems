<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Animate.css (optional for animation) -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        /* Ensure Google Translate widget is positioned correctly */
        #google_translate_element {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 1000;
        }

        /* Optional: Styling for the translate button */
        .translate-button {
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            padding: 5px 10px;
            cursor: pointer;
        }

        .translate-button:hover {
            background-color: #0056b3;
        }

        /* Ensure proper navbar alignment */
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #000000;
        }

        .navbar-nav .nav-link:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
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


   