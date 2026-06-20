<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Mykalyani Foundation'; ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'A registered public charitable trust dedicated to rural education, woman empowerment, clean healthcare, and ecological sustainability.'; ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- AOS.js CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <?php if (isset($extraHead)) echo $extraHead; ?>
</head>
<body class="<?php echo isset($bodyClass) ? $bodyClass : 'bg-canvas'; ?>">

    <!-- Utility Bar -->
    <div class="utility-bar py-2 d-none d-md-block" style="background: var(--dark); color: var(--light); font-size: 0.85rem; border-bottom: 1px solid rgba(255,255,255,0.05);">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-4 text-white-50">
                <span class="d-flex align-items-center gap-2"><i class="fa-solid fa-phone text-secondary"></i> +91 98765 43210</span>
                <span class="d-flex align-items-center gap-2"><i class="fa-solid fa-envelope text-secondary"></i> contact@mykalyani.org</span>
            </div>
            <div class="d-flex align-items-center gap-3">
                <span class="badge bg-white bg-opacity-10 text-white rounded-pill px-3 py-1 fw-normal border border-white border-opacity-10"><i class="fa-solid fa-certificate text-secondary me-1"></i> 80G & 12A Exemption</span>
                <?php if (isset($activePage) && $activePage === 'home') : ?>
                <span class="badge bg-white bg-opacity-10 text-white rounded-pill px-3 py-1 fw-normal border border-white border-opacity-10"><i class="fa-solid fa-shield-halved text-secondary me-1"></i> NITI Aayog Verified</span>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container-xl">
            <a class="navbar-brand-custom" href="index.php">
                <img src="images/logo.jpg" alt="Kalyani Foundation Logo" style="height: 68px; border-radius: 8px; box-shadow: var(--shadow-sm); border: 1px solid var(--border); background: var(--white); padding: 4px;" class="me-2"> 
                Kalyani<span>Foundation</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link <?php echo (isset($activePage) && $activePage === 'home') ? 'active' : ''; ?>" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo (isset($activePage) && $activePage === 'about') ? 'active' : ''; ?>" href="about.php">About Us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo (isset($activePage) && strpos($activePage, 'training') !== false) ? 'active' : ''; ?>" href="#" id="trainingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Free Training
                        </a>
                        <ul class="dropdown-menu border-0 shadow-lg" aria-labelledby="trainingDropdown" style="border-radius: var(--radius-md);">
                            <li><a class="dropdown-item py-2" href="training-tailoring.php">Tailoring (सिलाई योजना)</a></li>
                            <li><a class="dropdown-item py-2" href="training-beauty.php">Beauty Parlor (ब्यूटी पार्लर)</a></li>
                            <li><a class="dropdown-item py-2" href="training-computer.php">Computer (कम्प्यूटर)</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo (isset($activePage) && strpos($activePage, 'loan') !== false) ? 'active' : ''; ?>" href="#" id="loanDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Loan Schemes
                        </a>
                        <ul class="dropdown-menu border-0 shadow-lg" aria-labelledby="loanDropdown" style="border-radius: var(--radius-md);">
                            <li><a class="dropdown-item py-2" href="loan-personal.php">Personal Loan (PERSONAL)</a></li>
                            <li><a class="dropdown-item py-2" href="loan-business.php">Business Loan (BUSSINESS)</a></li>
                            <li><a class="dropdown-item py-2" href="loan-group.php">Group Loan (GROUP)</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo (isset($activePage) && strpos($activePage, 'employment') !== false) ? 'active' : ''; ?>" href="#" id="employmentDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Employment
                        </a>
                        <ul class="dropdown-menu border-0 shadow-lg" aria-labelledby="employmentDropdown" style="border-radius: var(--radius-md);">
                            <li><a class="dropdown-item py-2" href="employment-pickle.php">Pickle Making (आचार)</a></li>
                            <li><a class="dropdown-item py-2" href="employment-papad.php">Papad Making (पापड़)</a></li>
                            <li><a class="dropdown-item py-2" href="employment-agarbatti.php">Agarbatti Making (अगरबत्ती)</a></li>
                            <li><a class="dropdown-item py-2" href="employment-spice.php">Spice Making (मसाला)</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link <?php echo (isset($activePage) && $activePage === 'gallery') ? 'active' : ''; ?>" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo (isset($activePage) && $activePage === 'volunteer') ? 'active' : ''; ?>" href="volunteer.php">Volunteer</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo (isset($activePage) && $activePage === 'contact') ? 'active' : ''; ?>" href="contact.php">Contact</a></li>
                    <li class="nav-item ms-lg-4 mt-3 mt-lg-0">
                        <a href="donate.php" class="btn btn-pill btn-pill-accent btn-navbar">
                            <i class="fa-solid fa-heart me-2"></i> Donate Now
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
