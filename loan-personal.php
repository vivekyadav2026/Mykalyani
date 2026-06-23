<?php
$pageTitle = "Personal Loan Scheme | Financial Support | Kalyani Foundation";
$pageDescription = "Apply for a personal loan through Kalyani Foundation. Accessible financial support for your personal needs.";
$activePage = "programs-personal-loan";
include 'includes/header.php';
?>

    <!-- Page Header -->
    <header class="page-header bg-white position-relative overflow-hidden py-5">
        <div class="hero-shape hero-shape-1" style="background: var(--primary-light); opacity: 0.15; top: -50%; right: -20%; width: 400px; height: 400px;"></div>
        <div class="container position-relative z-1" data-aos="fade-up">
            <span class="eyebrow-tag text-primary mx-auto d-table mb-3">Financial Loan Schemes (लोन योजना)</span>
            <h1 class="page-header-title mb-3">Personal Loan <span class="text-gradient">Scheme</span></h1>
            <div class="mx-auto" style="width: 60px; height: 4px; background: linear-gradient(90deg, var(--primary), var(--secondary)); border-radius: var(--radius-pill); margin-bottom: 20px;"></div>
            <p class="lead text-muted mx-auto" style="max-width: 650px; font-size: 1.1rem; line-height: 1.6;">पर्सनल लोन योजना - Accessible, low-interest financial support designed to help you meet urgent personal and family needs without relying on exploitative moneylenders.</p>
        </div>
    </header>

    <!-- Program Details -->
    <section class="section-padding bg-canvas position-relative">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 pe-lg-5 text-center text-lg-start" data-aos="fade-right">
                    <span class="eyebrow-tag mx-auto mx-lg-0 d-table d-lg-inline-block mb-3">Program Overview</span>
                    <h2 class="mb-4 text-dark font-heading">Scheme Details</h2>
                    <p class="text-muted mb-4 lh-lg" style="font-size: 1.05rem;">We understand that emergencies and personal milestones require financial stability. Our Personal Loan Scheme offers small-ticket, accessible capital with flexible repayment terms specifically designed for rural and semi-urban communities.</p>
                    
                    <div class="row g-4 mt-2 text-start">
                        <div class="col-md-6">
                            <div class="p-4 bg-white rounded-4 border-start border-primary border-4 shadow-sm h-100">
                                <h4 class="fw-bold h6 mb-3 text-dark d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-circle-check text-primary"></i> Key Benefits
                                </h4>
                                <ul class="list-unstyled d-flex flex-column gap-2 mb-0" style="font-size: 0.9rem; line-height: 1.5;">
                                    <li class="d-flex align-items-start gap-2">
                                        <i class="fa-solid fa-chevron-right text-success mt-1" style="font-size: 0.75rem;"></i>
                                        <span>Low interest compared to informal markets.</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2">
                                        <i class="fa-solid fa-chevron-right text-success mt-1" style="font-size: 0.75rem;"></i>
                                        <span>Minimal documentation & processing.</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2">
                                        <i class="fa-solid fa-chevron-right text-success mt-1" style="font-size: 0.75rem;"></i>
                                        <span>Flexible repayment timelines.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 bg-white rounded-4 border-start border-accent border-4 shadow-sm h-100">
                                <h4 class="fw-bold h6 mb-3 text-dark d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-user-shield text-accent"></i> Eligibility Criteria
                                </h4>
                                <p class="text-muted mb-0" style="font-size: 0.9rem; line-height: 1.6;">
                                    Must be an active participant in our community programs or self-help groups. Valid government ID card (Aadhar/PAN) and proof of residence are required.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="position-relative px-2">
                        <div class="image-offset-wrapper">
                            <img src="images/personal_loan_woman.png" class="img-fluid rounded-4 shadow-lg w-100" style="height: 440px; object-fit: cover;" alt="Personal Loan">
                            <!-- Floating Badge -->
                            <div class="glass-badge position-absolute bottom-0 start-0 m-4 p-3 d-flex align-items-center gap-3 border-radius-md" style="border-radius: var(--radius-md);">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center text-white" style="width: 44px; height: 44px;">
                                    <i class="fa-solid fa-indian-rupee-sign fs-5"></i>
                                </div>
                                <div>
                                    <h4 class="fw-extrabold text-primary mb-0 h4">₹50K - ₹100K</h4>
                                    <p class="small text-muted mb-0 fw-bold text-uppercase" style="letter-spacing: 0.5px; font-size: 0.7rem;">Loan Bracket</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 bg-dark text-white text-center position-relative overflow-hidden">
        <div class="hero-shape hero-shape-1" style="background: var(--primary); opacity: 0.1; top: -50%; left: -20%; width: 300px; height: 300px;"></div>
        <div class="container position-relative z-1" data-aos="zoom-in">
            <h3 class="mb-2 text-white fw-bold">Need Financial Support?</h3>
            <p class="text-white-50 mb-4" style="max-width: 500px; margin: 0 auto 24px;">Visit our nearest center to discuss your financial needs with our advisors.</p>
            <a href="contact.php" class="btn btn-pill-accent px-5 py-3 shadow">Apply Now <i class="fa-solid fa-arrow-right ms-2"></i></a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>

