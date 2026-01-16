@extends('layouts.app')

@section('content')

<style>
    .about-hero {
    min-height: 60vh;
    background:
        linear-gradient(rgba(15,81,50,0.8), rgba(15,81,50,0.8)),
        url('https://images.pexels.com/photos/3184418/pexels-photo-3184418.jpeg?auto=compress&cs=tinysrgb&w=1600') center/cover no-repeat;
}
.cta-section {
    min-height: 50vh;
    background:
        linear-gradient(rgba(25,135,84,0.85), rgba(15,81,50,0.85)),
        url('https://images.pexels.com/photos/3184418/pexels-photo-3184418.jpeg?auto=compress&cs=tinysrgb&w=1600')
        center/cover no-repeat;
}


</style>

<!-- ================= ABOUT BANNER ================= -->
<section class="about-hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-white">
                <h1 class="fw-bold display-5">About Anushthan Consultancies</h1>
                <p class="lead mt-3">
                    Strategic consulting & regulatory compliance solutions across
                    Agriculture, Education and IT sectors.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ================= ABOUT INTRO ================= -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-4">

            <div class="col-lg-6">
                <h2 class="fw-bold mb-3">Who We Are</h2>
                <p class="text-muted">
                    Anushthan Consultancies is a multi-domain advisory firm delivering
                    strategic consulting and regulatory compliance solutions across
                    the Education, Agriculture and IT sectors.
                </p>
                <p class="text-muted">
                    We support businesses, institutions and entrepreneurs by simplifying
                    complex regulatory processes and enabling sustainable growth through
                    insight-driven and ethical consulting practices.
                </p>
            </div>

            <div class="col-lg-6 text-center">
                <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=600"
                     class="img-fluid rounded shadow"
                     alt="Consulting Team">
            </div>

        </div>
    </div>
</section>

<!-- ================= WHY CHOOSE US ================= -->
<section class="bg-light py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Why Choose Us</h2>
            <p class="text-muted">What makes Anushthan Consultancies your trusted partner</p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 text-center p-4">
                    <i class="bi bi-briefcase fs-1 text-success mb-3"></i>
                    <h5 class="fw-bold">Multi-Domain Expertise</h5>
                    <p class="text-muted">
                        Expertise across agriculture, education, IT, business registration
                        and digital services.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 text-center p-4">
                    <i class="bi bi-shield-check fs-1 text-success mb-3"></i>
                    <h5 class="fw-bold">Regulatory Compliance</h5>
                    <p class="text-muted">
                        End-to-end support for licenses, registrations and statutory
                        compliance.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 text-center p-4">
                    <i class="bi bi-graph-up-arrow fs-1 text-success mb-3"></i>
                    <h5 class="fw-bold">Growth-Oriented Approach</h5>
                    <p class="text-muted">
                        We focus on long-term growth, efficiency and sustainable business
                        outcomes.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ================= LEADERSHIP ================= -->
<section class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Leadership</h2>
            <p class="text-muted">Driving vision, growth and innovation</p>
        </div>

        <div class="row align-items-center g-4">

            <div class="col-lg-5 text-center">
                <img src="https://images.pexels.com/photos/3184418/pexels-photo-3184418.jpeg?auto=compress&cs=tinysrgb&w=400"
                     class="img-fluid rounded-circle shadow"
                     alt="Pankaj K. Yadav">
            </div>

            <div class="col-lg-7">
                <h4 class="fw-bold">Pankaj K. Yadav</h4>
                <p class="text-success fw-semibold">Principal Consultant</p>

                <p class="text-muted">
                    Pankaj K. Yadav is the Principal Consultant at Anushthan Consultancies,
                    bringing over two decades of professional experience across diverse
                    industries.
                </p>

                <p class="text-muted">
                    With strong foundations in management, technology and legal frameworks,
                    he leads the organization with a commitment to ethical practices,
                    innovation and client-centric solutions.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- ================= CTA WITH IMAGE ================= -->
<section class="cta-section text-white d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-8 text-center text-lg-start">
                <h2 class="fw-bold display-6">Let’s Work Together</h2>
                <p class="mt-3 mb-4 lead">
                    Partner with us to simplify compliance and accelerate your business growth.
                </p>
                <a href="#enquiry" class="btn btn-light btn-lg rounded-pill px-5">
                    Contact Us
                </a>
            </div>

            <div class="col-lg-4 text-center mt-4 mt-lg-0">
                <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=400"
                     class="img-fluid rounded shadow"
                     alt="Business Consulting">
            </div>

        </div>
    </div>
</section>


@endsection
