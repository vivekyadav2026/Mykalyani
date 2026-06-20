<?php
$pageTitle = "Our Programs | Kalyani Foundation";
$pageDescription = "Explore our high-impact operations across free skill training, financial loan schemes, and micro-employment generation.";
$activePage = "programs";
include 'includes/header.php';
?>

    <!-- Page Header -->
    <header class="page-header bg-white">
        <div class="container" data-aos="fade-up">
            <span class="eyebrow-tag">Active Initiatives</span>
            <h1 class="page-header-title">Our <span class="text-gradient">Programs</span></h1>
            <p class="lead text-muted mx-auto" style="max-width: 650px; font-size: 1.05rem;">We drive sustainable change through targeted interventions in free training, accessible loans, and micro-business employment.</p>
        </div>
    </header>

    <!-- Comprehensive Programs Layout -->
    <section class="section-padding position-relative bg-canvas">
        <div class="hero-shape hero-shape-2" style="background: var(--primary-light); top: 10%; right: -10%;"></div>

        <div class="container position-relative z-1">
            
            <!-- Pillar 1: Free Training -->
            <div class="row align-items-center g-5 mb-5 pb-5 border-bottom border-dark border-opacity-10">
                <div class="col-lg-6 pe-lg-5" data-aos="fade-right">
                    <span class="badge bg-primary text-white py-2 px-3 rounded-pill mb-3" style="font-size: 0.75rem; font-weight: 800; letter-spacing: 1px;">PILLAR 1</span>
                    <h2 class="display-6 fw-bold mb-3">Free Skill Training <br><span class="text-primary h4">(फ्री प्रशिक्षण)</span></h2>
                    <p class="text-muted fs-5 mb-4">हमारी संस्था के ओर से दी जाने वाली फ्री प्रशिक्षण योजना। We provide comprehensive, 100% free skill development programs tailored for women to become financially independent.</p>
                    
                    <ul class="list-unstyled d-flex flex-column gap-3 mb-4">
                        <a href="training-tailoring.php" class="text-decoration-none">
                            <li class="d-flex align-items-center gap-3 glass-panel p-3 hover-shadow transition-all">
                                <i class="fa-solid fa-scissors text-primary fs-4"></i>
                                <span class="fw-bold fs-5 text-dark">Tailoring Scheme <span class="text-muted fw-normal ms-1">(सिलाई योजना)</span></span>
                            </li>
                        </a>
                        <a href="training-beauty.php" class="text-decoration-none">
                            <li class="d-flex align-items-center gap-3 glass-panel p-3 hover-shadow transition-all">
                                <i class="fa-solid fa-spa text-primary fs-4"></i>
                                <span class="fw-bold fs-5 text-dark">Beauty Parlor Training <span class="text-muted fw-normal ms-1">(ब्यूटी पार्लर प्रशिक्षण)</span></span>
                            </li>
                        </a>
                        <a href="training-computer.php" class="text-decoration-none">
                            <li class="d-flex align-items-center gap-3 glass-panel p-3 hover-shadow transition-all">
                                <i class="fa-solid fa-laptop text-primary fs-4"></i>
                                <span class="fw-bold fs-5 text-dark">Computer Training <span class="text-muted fw-normal ms-1">(कम्प्यूटर प्रशिक्षण)</span></span>
                            </li>
                        </a>
                    </ul>
                    <a href="volunteer.php" class="btn btn-pill-outline mt-2">Volunteer to Teach <i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <img src="images/hero_education.png" class="img-fluid rounded-4 shadow-lg w-100" style="height: 500px; object-fit: cover;" alt="Skill Training">
                </div>
            </div>

            <!-- Pillar 2: Loan Schemes -->
            <div class="row align-items-center g-5 mb-5 pb-5 border-bottom border-dark border-opacity-10 flex-lg-row-reverse">
                <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
                    <span class="badge bg-secondary text-white py-2 px-3 rounded-pill mb-3" style="font-size: 0.75rem; font-weight: 800; letter-spacing: 1px;">PILLAR 2</span>
                    <h2 class="display-6 fw-bold mb-3">Financial Loan Schemes <br><span class="text-secondary h4">(लोन योजना)</span></h2>
                    <p class="text-muted fs-5 mb-4">हमारी संस्था के ओर से दी जाने वाली लोन योजना। We offer accessible capital to help rural entrepreneurs and self-help groups (स्वयं सहायता समूह) establish and expand their businesses.</p>
                    
                    <ul class="list-unstyled d-flex flex-column gap-3 mb-4">
                        <a href="loan-personal.php" class="text-decoration-none">
                            <li class="d-flex align-items-center gap-3 glass-panel p-3 hover-shadow transition-all">
                                <i class="fa-solid fa-user-tie text-secondary fs-4"></i>
                                <span class="fw-bold fs-5 text-dark">Personal Loan Scheme <span class="text-muted fw-normal ms-1">(PERSONAL लोन योजना)</span></span>
                            </li>
                        </a>
                        <a href="loan-business.php" class="text-decoration-none">
                            <li class="d-flex align-items-center gap-3 glass-panel p-3 hover-shadow transition-all">
                                <i class="fa-solid fa-shop text-secondary fs-4"></i>
                                <span class="fw-bold fs-5 text-dark">Business Loan Scheme <span class="text-muted fw-normal ms-1">(BUSSINESS लोन योजना)</span></span>
                            </li>
                        </a>
                        <a href="loan-group.php" class="text-decoration-none">
                            <li class="d-flex align-items-center gap-3 glass-panel p-3 hover-shadow transition-all">
                                <i class="fa-solid fa-users text-secondary fs-4"></i>
                                <span class="fw-bold fs-5 text-dark">Group Loan Scheme <span class="text-muted fw-normal ms-1">(GROUP लोन योजना)</span></span>
                            </li>
                        </a>
                    </ul>
                    <a href="contact.php" class="btn btn-pill-outline mt-2 border-secondary text-secondary">Apply for a Loan <i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                    <img src="images/program_healthcare.png" class="img-fluid rounded-4 shadow-lg w-100" style="height: 500px; object-fit: cover;" alt="Financial Loan Schemes">
                </div>
            </div>

            <!-- Pillar 3: Employment Generation -->
            <div class="row align-items-center g-5">
                <div class="col-lg-6 pe-lg-5" data-aos="fade-right">
                    <span class="badge bg-info text-white py-2 px-3 rounded-pill mb-3" style="font-size: 0.75rem; font-weight: 800; letter-spacing: 1px;">PILLAR 3</span>
                    <h2 class="display-6 fw-bold mb-3">Micro-Employment <br><span class="text-info h4">(रोजगार योजना)</span></h2>
                    <p class="text-muted fs-5 mb-4">हमारी संस्था के ओर से दी जाने वाली रोजगार योजना। We teach women how to manufacture household goods that can be sold locally to generate immediate income.</p>
                    
                    <ul class="list-unstyled d-flex flex-column gap-3 mb-4">
                        <a href="employment-pickle.php" class="text-decoration-none">
                            <li class="d-flex align-items-center gap-3 glass-panel p-3 border-start border-info border-4 hover-shadow transition-all">
                                <span class="fw-bold fs-5 text-dark">Pickle Making <span class="text-muted fw-normal ms-1">(आचार बनाने का प्रशिक्षण)</span></span>
                            </li>
                        </a>
                        <a href="employment-papad.php" class="text-decoration-none">
                            <li class="d-flex align-items-center gap-3 glass-panel p-3 border-start border-info border-4 hover-shadow transition-all">
                                <span class="fw-bold fs-5 text-dark">Papad Making <span class="text-muted fw-normal ms-1">(पापड़ बनाने का प्रशिक्षण)</span></span>
                            </li>
                        </a>
                        <a href="employment-agarbatti.php" class="text-decoration-none">
                            <li class="d-flex align-items-center gap-3 glass-panel p-3 border-start border-info border-4 hover-shadow transition-all">
                                <span class="fw-bold fs-5 text-dark">Agarbatti Making <span class="text-muted fw-normal ms-1">(अगरबत्ती बनाने का प्रशिक्षण)</span></span>
                            </li>
                        </a>
                        <a href="employment-spice.php" class="text-decoration-none">
                            <li class="d-flex align-items-center gap-3 glass-panel p-3 border-start border-info border-4 hover-shadow transition-all">
                                <span class="fw-bold fs-5 text-dark">Spice Making <span class="text-muted fw-normal ms-1">(मसाला बनाने का प्रशिक्षण)</span></span>
                            </li>
                        </a>
                    </ul>
                    <a href="donate.php" class="btn btn-pill-outline mt-2 border-info text-info">Sponsor Equipment <i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <img src="images/hero_empowerment.png" class="img-fluid rounded-4 shadow-lg w-100" style="height: 500px; object-fit: cover;" alt="Micro Employment Making">
                </div>
            </div>

        </div>
    </section>

    <!-- Call to Action -->
    <section class="section-padding bg-dark text-white text-center position-relative overflow-hidden">
        <div class="hero-shape hero-shape-1" style="background: var(--accent); opacity: 0.3; top: -50%; left: 50%; transform: translateX(-50%);"></div>
        <div class="container position-relative z-1" data-aos="zoom-in">
            <h2 class="text-white mb-4">Become a Change Agent</h2>
            <p class="lead text-white-50 mb-5 mx-auto" style="max-width: 600px;">Join our mission to build self-sufficient communities. Whether through monthly giving or corporate CSR, your impact matters.</p>
            <div class="d-flex justify-content-center gap-4">
                <a href="donate.php" class="btn btn-pill btn-pill-accent px-5">Give Monthly</a>
                <a href="contact.php" class="btn btn-pill btn-pill-outline text-white border-white border-opacity-25 px-5">Corporate CSR</a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
