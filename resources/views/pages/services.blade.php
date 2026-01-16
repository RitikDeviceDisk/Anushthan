@extends('layouts.app')

@section('content')

<Style>
    .services-hero {
    min-height: 60vh;
    background:
        linear-gradient(rgba(15,81,50,0.8), rgba(15,81,50,0.8)),
        url('https://images.pexels.com/photos/3184418/pexels-photo-3184418.jpeg?auto=compress&cs=tinysrgb&w=1600')
        center / cover no-repeat;
}

.services-cta {
    background:
        linear-gradient(rgba(25,135,84,0.9), rgba(15,81,50,0.9)),
        url('https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=1600')
        center / cover no-repeat;
}

</Style>

<!-- ================= SERVICES HERO ================= -->
<section class="services-hero d-flex align-items-center">
    <div class="container-fluid px-0">
        <div class="container text-white">
            <h1 class="fw-bold display-5">Our Services</h1>
            <p class="lead mt-3">
                Comprehensive consulting and compliance solutions tailored for your growth
            </p>
        </div>
    </div>
</section>

<!-- ================= SERVICE 1 ================= -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-4">

            <div class="col-lg-6">
                <h3 class="fw-bold">Agriculture Department Compliance</h3>
                <p class="text-muted mt-3">
                    We assist agriculture-related businesses with licenses, registrations,
                    and pollution control approvals to ensure full regulatory compliance.
                </p>
                <ul class="text-muted">
                    <li>Fertilizer, seed & bio-stimulant registrations</li>
                    <li>State & district level licenses</li>
                    <li>Consent to Establish (CTE)</li>
                    <li>Consent to Operate (CTO)</li>
                </ul>
            </div>

            <div class="col-lg-6 text-center">
                <img src="https://images.pexels.com/photos/2886937/pexels-photo-2886937.jpeg?auto=compress&cs=tinysrgb&w=700"
                     class="img-fluid rounded shadow"
                     alt="Agriculture Compliance">
            </div>

        </div>
    </div>
</section>

<!-- ================= SERVICE 2 ================= -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row align-items-center g-4 flex-lg-row-reverse">

            <div class="col-lg-6">
                <h3 class="fw-bold">Educational Business Consulting</h3>
                <p class="text-muted mt-3">
                    End-to-end consulting solutions for educational institutions,
                    startups and career-focused organizations.
                </p>
                <ul class="text-muted">
                    <li>Career Development & Mentorship</li>
                    <li>Internship & Placement Services</li>
                    <li>Career Counselling & Guidance</li>
                    <li>Industry collaboration support</li>
                </ul>
            </div>

            <div class="col-lg-6 text-center">
                <img src="https://images.pexels.com/photos/3184633/pexels-photo-3184633.jpeg?auto=compress&cs=tinysrgb&w=700"
                     class="img-fluid rounded shadow"
                     alt="Education Consulting">
            </div>

        </div>
    </div>
</section>

<!-- ================= SERVICE 3 ================= -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-4">

            <div class="col-lg-6">
                <h3 class="fw-bold">Business Registration & Compliance</h3>
                <p class="text-muted mt-3">
                    Simplifying registrations and legal formalities so you can focus
                    on growing your business.
                </p>
                <p class="text-muted">
                    GST, MSME, Trademark, FSSAI, ISO Certifications, Professional Tax,
                    Shop & Establishment, Company Registration and more.
                </p>
            </div>

            <div class="col-lg-6 text-center">
                <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=700"
                     class="img-fluid rounded shadow"
                     alt="Business Registration">
            </div>

        </div>
    </div>
</section>

<!-- ================= SERVICE 4 ================= -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row align-items-center g-4 flex-lg-row-reverse">

            <div class="col-lg-6">
                <h3 class="fw-bold">Digital Marketing</h3>
                <p class="text-muted mt-3">
                    Data-driven digital marketing strategies to boost visibility,
                    engagement and conversions.
                </p>
                <ul class="text-muted">
                    <li>Social Media Marketing (SMM)</li>
                    <li>Pay-Per-Click Advertising (PPC)</li>
                    <li>Email Marketing</li>
                    <li>Content Marketing</li>
                </ul>
            </div>

            <div class="col-lg-6 text-center">
                <img src="https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg?auto=compress&cs=tinysrgb&w=700"
                     class="img-fluid rounded shadow"
                     alt="Digital Marketing">
            </div>

        </div>
    </div>
</section>

<!-- ================= SERVICE 5 ================= -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-4">

            <div class="col-lg-6">
                <h3 class="fw-bold">Image Editing & Designing</h3>
                <p class="text-muted mt-3">
                    Professional image editing services to enhance your brand’s
                    visual identity and marketing impact.
                </p>
                <ul class="text-muted">
                    <li>Photo Retouching & Restoration</li>
                    <li>Background Removal & Replacement</li>
                    <li>Product Photo Editing</li>
                    <li>Creative Design & Manipulation</li>
                </ul>
            </div>

            <div class="col-lg-6 text-center">
                <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=700"
                     class="img-fluid rounded shadow"
                     alt="Image Editing">
            </div>

        </div>
    </div>
</section>

<!-- ================= SERVICES CTA ================= -->
<section class="services-cta text-white text-center py-5">
    <div class="container">
        <h2 class="fw-bold">Need Expert Guidance?</h2>
        <p class="lead mt-2 mb-4">
            Get in touch with our consultants to discuss your requirements.
        </p>
        <a href="#enquiry" class="btn btn-light btn-lg rounded-pill px-5">
            Request Consultation
        </a>
    </div>
</section>

@endsection
