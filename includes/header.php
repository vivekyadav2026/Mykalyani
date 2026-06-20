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
    <link rel="stylesheet" href="css/style.css?v=1.1.2">
    <?php if (isset($extraHead)) echo $extraHead; ?>
</head>
<body class="<?php echo isset($bodyClass) ? $bodyClass : 'bg-canvas'; ?>">

    <!-- Red Top Utility Bar -->
    <div class="top-utility-bar d-block">
        <div class="container-fluid px-3 px-lg-4">
            <!-- Desktop Layout (All side-by-side, visible on lg and above) -->
            <div class="d-none d-lg-flex justify-content-between align-items-center w-100">
                <!-- Left Side: Social Media Icons -->
                <div class="d-flex align-items-center gap-2 flex-shrink-0">
                    <a href="#" class="top-social-icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="top-social-icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="top-social-icon"><i class="fa-brands fa-youtube"></i></a>
                </div>
                
                <!-- Middle Side: News & Updates Marquee -->
                <div class="news-ticker-container d-flex align-items-center mx-4 flex-grow-1">
                    <div class="news-ticker-badge">
                        <i class="fa-solid fa-bolt me-1"></i> समाचार एवं अपडेट
                    </div>
                    <div class="news-ticker-content">
                        <div class="news-ticker-scroll">
                            <span>“हमसे जुड़ें और सूचित रहें: जीवन को सशक्त बनाना, समुदायों को बदलना!”</span>
                            <span class="ticker-separator"></span>
                            <span>“हमसे जुड़ें और सूचित रहें: जीवन को सशक्त बनाना, समुदायों को बदलना!”</span>
                            <span class="ticker-separator"></span>
                            <span>“हमसे जुड़ें और सूचित रहें: जीवन को सशक्त बनाना, समुदायों को बदलना!”</span>
                            <span class="ticker-separator"></span>
                            <span>“हमसे जुड़ें और सूचित रहें: जीवन को सशक्त बनाना, समुदायों को बदलना!”</span>
                        </div>
                    </div>
                </div>
                
                <!-- Right Side: Phone Contact -->
                <div class="top-contact-info d-flex align-items-center flex-shrink-0">
                    <a href="tel:+917463014750" class="text-white text-decoration-none fw-bold d-flex align-items-center gap-2 text-nowrap" style="font-size: 0.95rem; letter-spacing: 0.5px;">
                        <i class="fa-solid fa-phone"></i> +91 74630 14750
                    </a>
                </div>
            </div>
            
            <!-- Mobile/Tablet Layout (Stacked, visible below lg) -->
            <div class="d-lg-none d-flex flex-column gap-2 py-1">
                <!-- Row 1: Social Icons & Phone Contact -->
                <div class="d-flex justify-content-between align-items-center w-100">
                    <div class="d-flex align-items-center gap-2">
                        <a href="#" class="top-social-icon" style="width: 26px; height: 26px; font-size: 0.8rem;"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="top-social-icon" style="width: 26px; height: 26px; font-size: 0.8rem;"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="top-social-icon" style="width: 26px; height: 26px; font-size: 0.8rem;"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                    <div class="top-contact-info d-flex align-items-center">
                        <a href="tel:+917463014750" class="text-white text-decoration-none fw-bold d-flex align-items-center gap-2 text-nowrap" style="font-size: 0.85rem; letter-spacing: 0.3px;">
                            <i class="fa-solid fa-phone"></i> +91 74630 14750
                        </a>
                    </div>
                </div>
                <!-- Row 2: News Updates Marquee -->
                <div class="news-ticker-container d-flex align-items-center w-100" style="height: 30px;">
                    <div class="news-ticker-badge px-2" style="font-size: 0.75rem; height: 100%;">
                        <i class="fa-solid fa-bolt me-1"></i> समाचार एवं अपडेट
                    </div>
                    <div class="news-ticker-content">
                        <div class="news-ticker-scroll" style="animation-duration: 25s;">
                            <span>“हमसे जुड़ें और सूचित रहें: जीवन को सशक्त बनाना, समुदायों को बदलना!”</span>
                            <span class="ticker-separator"></span>
                            <span>“हमसे जुड़ें और सूचित रहें: जीवन को सशक्त बनाना, समुदायों को बदलना!”</span>
                            <span class="ticker-separator"></span>
                            <span>“हमसे जुड़ें और सूचित रहें: जीवन को सशक्त बनाना, समुदायों को बदलना!”</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container-fluid px-3 px-lg-4">
            <a class="navbar-brand-custom" href="index.php">
                <img src="images/logo.jpg" alt="Kalyani Foundation Logo" style="height: 82px; border-radius: 8px; box-shadow: var(--shadow-sm); border: 1px solid var(--border); background: var(--white); padding: 4px;" class="me-2"> 
                <span style="color: #0E7A3D !important;">Kalyani</span><span style="color: #E52F37 !important; margin-left: 2px;">Foundation</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link <?php echo (isset($activePage) && $activePage === 'home') ? 'active' : ''; ?>" href="index.php">मुख्य पृष्ठ</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo (isset($activePage) && $activePage === 'about') ? 'active' : ''; ?>" href="about.php">हमारे बारे में</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo (isset($activePage) && strpos($activePage, 'training') !== false) ? 'active' : ''; ?>" href="#" id="trainingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            निःशुल्क प्रशिक्षण
                        </a>
                        <ul class="dropdown-menu border-0 shadow-lg" aria-labelledby="trainingDropdown" style="border-radius: var(--radius-md);">
                            <li><a class="dropdown-item py-2" href="training-tailoring.php">सिलाई योजना</a></li>
                            <li><a class="dropdown-item py-2" href="training-beauty.php">ब्यूटी पार्लर प्रशिक्षण</a></li>
                            <li><a class="dropdown-item py-2" href="training-computer.php">कम्प्यूटर प्रशिक्षण</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo (isset($activePage) && strpos($activePage, 'loan') !== false) ? 'active' : ''; ?>" href="#" id="loanDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ऋण योजनाएं
                        </a>
                        <ul class="dropdown-menu border-0 shadow-lg" aria-labelledby="loanDropdown" style="border-radius: var(--radius-md);">
                            <li><a class="dropdown-item py-2" href="loan-personal.php">व्यक्तिगत ऋण (Personal Loan)</a></li>
                            <li><a class="dropdown-item py-2" href="loan-business.php">व्यावसायिक ऋण (Business Loan)</a></li>
                            <li><a class="dropdown-item py-2" href="loan-group.php">सामूहिक ऋण (Group Loan)</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo (isset($activePage) && strpos($activePage, 'employment') !== false) ? 'active' : ''; ?>" href="#" id="employmentDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            रोजगार
                        </a>
                        <ul class="dropdown-menu border-0 shadow-lg" aria-labelledby="employmentDropdown" style="border-radius: var(--radius-md);">
                            <li><a class="dropdown-item py-2" href="employment-pickle.php">अचार निर्माण (Pickle Making)</a></li>
                            <li><a class="dropdown-item py-2" href="employment-papad.php">पापड़ निर्माण (Papad Making)</a></li>
                            <li><a class="dropdown-item py-2" href="employment-agarbatti.php">अगरबत्ती निर्माण (Agarbatti Making)</a></li>
                            <li><a class="dropdown-item py-2" href="employment-spice.php">मसाला निर्माण (Spice Making)</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link <?php echo (isset($activePage) && $activePage === 'gallery') ? 'active' : ''; ?>" href="gallery.php">गैलरी</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo (isset($activePage) && $activePage === 'volunteer') ? 'active' : ''; ?>" href="volunteer.php">स्वयंसेवक बनें</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo (isset($activePage) && $activePage === 'contact') ? 'active' : ''; ?>" href="contact.php">संपर्क करें</a></li>
                    <li class="nav-item ms-lg-4 mt-3 mt-lg-0">
                        <a href="donate.php" class="btn btn-pill btn-pill-accent btn-navbar">
                            <i class="fa-solid fa-heart me-2"></i> अभी दान करें
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
