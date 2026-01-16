@extends('layouts.app')

@section('content')

<style>
    .leadership-hero {
    min-height: 60vh;
    background:
        linear-gradient(rgba(15,81,50,0.8), rgba(15,81,50,0.8)),
        url('https://images.pexels.com/photos/3184418/pexels-photo-3184418.jpeg?auto=compress&cs=tinysrgb&w=1600')
        center / cover no-repeat;
}

.leadership-cta {
    background:
        linear-gradient(rgba(25,135,84,0.9), rgba(15,81,50,0.9)),
        url('https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=1600')
        center / cover no-repeat;
}

</style>

<!-- ================= LEADERSHIP HERO ================= -->
<section class="leadership-hero d-flex align-items-center">
    <div class="container-fluid px-0">
        <div class="container text-white">
            <h1 class="fw-bold display-5">Leadership</h1>
            <p class="lead mt-3">
                Vision, experience and ethical leadership driving Anushthan Consultancies
            </p>
        </div>
    </div>
</section>

<!-- ================= LEADERSHIP PROFILE ================= -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-4">

            <div class="col-lg-5 text-center">
                <img src="https://images.pexels.com/photos/5668481/pexels-photo-5668481.jpeg?auto=compress&cs=tinysrgb&w=500"
                     class="img-fluid rounded-circle shadow"
                     alt="Pankaj K. Yadav">
            </div>

            <div class="col-lg-7">
                <h2 class="fw-bold">Pankaj K. Yadav</h2>
                <p class="text-success fw-semibold mb-2">Principal Consultant</p>

                <p class="text-muted">
                    Pankaj K. Yadav is the Principal Consultant at Anushthan Consultancies,
                    bringing over two decades of professional experience across diverse
                    industries and consulting domains.
                </p>

                <p class="text-muted">
                    His leadership is rooted in insight-driven strategy, strong ethical
                    practices and a commitment to delivering sustainable business solutions.
                </p>

                <p class="text-muted">
                    Under his guidance, Anushthan Consultancies continues to empower
                    organizations with compliance clarity, strategic direction and
                    long-term growth.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- ================= VALUES ================= -->
<section class="bg-light py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Leadership Values</h2>
            <p class="text-muted">Principles that guide our consulting approach</p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <h5 class="fw-bold text-success">Integrity</h5>
                    <p class="text-muted mt-2">
                        Upholding honesty, transparency and ethical standards in every
                        engagement.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <h5 class="fw-bold text-success">Expertise</h5>
                    <p class="text-muted mt-2">
                        Leveraging decades of experience to deliver practical and
                        effective solutions.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <h5 class="fw-bold text-success">Innovation</h5>
                    <p class="text-muted mt-2">
                        Continuously evolving to meet modern business and regulatory
                        challenges.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ================= LEADERSHIP CTA ================= -->
<section class="leadership-cta text-white text-center py-5">
    <div class="container">
        <h2 class="fw-bold">Connect With Our Leadership</h2>
        <p class="lead mt-2 mb-4">
            Let us guide you with experience, insight and integrity.
        </p>
        <a href="#enquiry" class="btn btn-light btn-lg rounded-pill px-5">
            Get in Touch
        </a>
    </div>
</section>

@endsection
