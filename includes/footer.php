    <!-- Footer Dense -->
    <footer class="footer-dense-dark mt-0">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 pe-lg-5 text-center text-md-start">
                    <a class="navbar-brand-custom mb-4 d-inline-flex align-items-center" href="index.php" style="color: var(--white);">
                        <img src="images/logo.jpg" alt="Kalyani Foundation Logo" style="height: 48px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); background: var(--white); padding: 4px;" class="me-2"> 
                        Kalyani<span class="text-primary">Foundation</span>
                    </a>
                    <p class="mb-4 text-white-50 lh-lg">A registered public charitable trust dedicated to rural education, woman empowerment, clean healthcare, and ecological sustainability.</p>
                    <div class="d-flex flex-column align-items-center align-items-md-start gap-2 mb-4">
                        <span class="d-block small text-white-50"><i class="fa-solid fa-check text-primary me-2"></i> Exemption Ref No: AAETM2345RF20241</span>
                        <span class="d-block small text-white-50"><i class="fa-solid fa-check text-primary me-2"></i> CSR Registry No: CSR0004512</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center text-md-start">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled d-flex flex-column align-items-center align-items-md-start gap-3 mt-4">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="programs.php">Programs</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="volunteer.php">Volunteer</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="donate.php" class="text-accent fw-bold">Donate Now</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 text-center text-md-start">
                    <h5>Contact Info</h5>
                    <ul class="list-unstyled d-flex flex-column align-items-center align-items-md-start gap-4 mt-4 text-white-50">
                        <li class="d-flex align-items-start text-start gap-3">
                            <i class="fa-solid fa-location-dot text-primary mt-1"></i> 
                            <span>Plot 45, Sector 12, Dwarka, New Delhi - 110075</span>
                        </li>
                        <li class="d-flex align-items-start text-start gap-3">
                            <i class="fa-solid fa-phone text-primary mt-1"></i> 
                            <span>+91 98765 43210</span>
                        </li>
                        <li class="d-flex align-items-start text-start gap-3">
                            <i class="fa-solid fa-envelope text-primary mt-1"></i> 
                            <span>contact@mykalyani.org</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 text-center text-lg-start">
                    <h5>Newsletter</h5>
                    <p class="mb-4 text-white-50 mt-4">Subscribe to get monthly field-impact summaries directly in your inbox.</p>
                    <form class="input-group">
                        <input type="email" class="form-control footer-input-field" placeholder="Email Address" required style="border-radius: 30px 0 0 30px; border-right: none;">
                        <button class="btn btn-pill-primary" type="submit" style="border-radius: 0 30px 30px 0; padding: 14px 28px; box-shadow: none;"><i class="fa-regular fa-paper-plane"></i></button>
                    </form>
                    <div class="d-flex justify-content-center justify-content-lg-start gap-3 mt-4 mt-lg-5">
                        <a href="#" class="footer-circle-btn"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="footer-circle-btn"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="footer-circle-btn"><i class="fa-brands fa-x-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-line text-center text-white-50 d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
                <p class="mb-0">&copy; 2026 Mykalyani Foundation. All rights reserved.</p>
                <div class="d-flex gap-4">
                    <a href="privacy.php" class="text-white-50 small text-decoration-none">Privacy Policy</a>
                    <a href="terms.php" class="text-white-50 small text-decoration-none">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile App Bottom Navigation Bar -->
    <div class="mobile-bottom-nav">
        <a href="index.php" class="mobile-bottom-nav-item <?php echo (isset($activePage) && $activePage === 'home') ? 'active' : ''; ?>">
            <i class="fa-solid fa-house"></i>
            <span>Home</span>
        </a>
        <a href="training-tailoring.php" class="mobile-bottom-nav-item <?php echo (isset($activePage) && strpos($activePage, 'training') !== false) ? 'active' : ''; ?>">
            <i class="fa-solid fa-chalkboard-user"></i>
            <span>Training</span>
        </a>
        <a href="loan-personal.php" class="mobile-bottom-nav-item <?php echo (isset($activePage) && strpos($activePage, 'loan') !== false) ? 'active' : ''; ?>">
            <i class="fa-solid fa-hand-holding-dollar"></i>
            <span>Loans</span>
        </a>
        <a href="donate.php" class="mobile-bottom-nav-item <?php echo (isset($activePage) && $activePage === 'donate') ? 'active' : ''; ?>">
            <i class="fa-solid fa-heart"></i>
            <span>Donate</span>
        </a>
        <a href="contact.php" class="mobile-bottom-nav-item <?php echo (isset($activePage) && $activePage === 'contact') ? 'active' : ''; ?>">
            <i class="fa-solid fa-phone"></i>
            <span>Contact</span>
        </a>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/main.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 50
        });
    </script>
    <?php if (isset($extraScripts)) echo $extraScripts; ?>
</body>
</html>
