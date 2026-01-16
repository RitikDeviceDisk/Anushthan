@extends('layouts.app')

@section('content')

<!-- Bootstrap 5 -->

    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }

        /* HERO SECTION */
        .hero-section {
            min-height: 90vh;
            background: linear-gradient(
                rgba(0,0,0,0.55),
                rgba(0,0,0,0.55)
            ),
            url('https://images.unsplash.com/photo-1581092334651-ddf26d9a09d0?auto=format&fit=crop&w=1600&q=80');
            background-size: cover;
            background-position: center;
            color: #fff;
        }

        .hero-section h1 {
            color: #ffffff;
        }

        .hero-section p {
            color: #f1f1f1;
        }

        /* SECTION SPACING */
        section {
            padding: 70px 0;
        }

        /* ICON BOX */
        .service-box {
            border: 1px solid #eee;
            padding: 30px;
            border-radius: 10px;
            transition: 0.3s;
            height: 100%;
        }

        .service-box:hover {
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .service-box i {
            font-size: 40px;
            color: #198754;
            margin-bottom: 15px;
        }

        /* //form */
        .enquiry-section {
    background: linear-gradient(135deg, #f5f9f6, #ffffff);
}

.enquiry-card {
    border-radius: 18px;
}

.enquiry-card h2 {
    color: #0f5132;
}

.form-control,
.form-select {
    border-radius: 10px;
    border: 1px solid #ced4da;
}

.form-control:focus,
.form-select:focus {
    border-color: #198754;
    box-shadow: 0 0 0 0.15rem rgba(25, 135, 84, 0.25);
}

.btn-success {
    background: linear-gradient(135deg, #198754, #157347);
    border: none;
}

.btn-success:hover {
    background: linear-gradient(135deg, #157347, #0f5132);
}

    </style>

<!-- ================= HERO / BANNER ================= -->
<section class="hero-section d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h1 class="display-5 fw-bold">
                    Anushthan Consultancies
                </h1>
                <p class="lead mt-3">
                    Strategic Consulting & Regulatory Compliance Solutions across
                    <strong>Agriculture, Education & IT</strong>
                </p>
                <a href="#enquiry" class="btn btn-success btn-lg mt-3">
                    Get Consultation
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ================= ABOUT ================= -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="fw-bold mb-3">About Us</h2>
                <p>
                    Anushthan Consultancies is a multi-domain advisory firm providing
                    strategic consulting and regulatory compliance solutions across
                    the Education, Agriculture and IT sectors.
                </p>
                <p>
                    We help organizations grow with confidence through ethical practices,
                    expert guidance, and insight-driven strategies.
                </p>
            </div>
            <div class="col-md-6">
                <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=900"
                     class="img-fluid rounded shadow"
                     alt="Consulting Image">
            </div>
        </div>
    </div>
</section>

<!-- ================= SERVICES ================= -->
<section class="bg-light py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Our Services</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card h-100 shadow-sm text-center p-3">
                    <i class="bi bi-leaf-fill fs-1 text-success"></i>
                    <h5 class="mt-3">Agriculture Compliance</h5>
                    <p class="small">
                        Fertilizer, seed, bio-stimulant registrations and agriculture
                        regulatory approvals.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm text-center p-3">
                    <i class="bi bi-shield-check fs-1 text-primary"></i>
                    <h5 class="mt-3">Pollution Control</h5>
                    <p class="small">
                        Consent to Establish (CTE) and Consent to Operate (CTO)
                        from State Pollution Control Boards.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm text-center p-3">
                    <i class="bi bi-mortarboard-fill fs-1 text-warning"></i>
                    <h5 class="mt-3">Educational Consulting</h5>
                    <p class="small">
                        Career counselling, mentorship, internship and placement services.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm text-center p-3">
                    <i class="bi bi-briefcase-fill fs-1 text-dark"></i>
                    <h5 class="mt-3">Business Registration</h5>
                    <p class="small">
                        GST, MSME, Trademark, FSSAI, ISO and Company registrations.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm text-center p-3">
                    <i class="bi bi-bar-chart-fill fs-1 text-info"></i>
                    <h5 class="mt-3">Digital Marketing</h5>
                    <p class="small">
                        Social media marketing, PPC, email marketing and content strategies.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm text-center p-3">
                    <i class="bi bi-brush-fill fs-1 text-danger"></i>
                    <h5 class="mt-3">Image Editing & Designing</h5>
                    <p class="small">
                        Photo retouching, background removal, restoration and creative design.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ================= LEADERSHIP ================= -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 text-center">
                <img src="https://images.pexels.com/photos/3184418/pexels-photo-3184418.jpeg?auto=compress&cs=tinysrgb&w=400"
                     class="img-fluid rounded-circle shadow"
                     alt="Leadership">
            </div>
            <div class="col-md-8">
                <h3 class="fw-bold">Pankaj K. Yadav</h3>
                <p class="text-muted">Principal Consultant</p>
                <p>
                    With over two decades of experience, Mr. Yadav provides leadership
                    across agriculture, education, business registration, digital marketing
                    and creative design services.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ================= ENQUIRY FORM ================= -->
<section id="enquiry" class="enquiry-section py-5">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-8">
                <div class="card enquiry-card shadow-lg border-0">
                    <div class="card-body p-4 p-md-5">

                        <h2 class="text-center fw-bold mb-2">
                            Request a Free Consultation
                        </h2>
                        <p class="text-center text-muted mb-4">
                            Tell us your requirement and our expert will contact you
                        </p>

                        <form class="row g-4">

                            <div class="col-md-6">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control form-control-lg"
                                       placeholder="Enter your name">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Contact Number</label>
                                <input type="text" class="form-control form-control-lg"
                                       placeholder="+91 XXXXX XXXXX">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control form-control-lg"
                                       placeholder="City, State">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Preferred Time</label>
                                <select class="form-select form-select-lg">
                                    <option selected disabled>Select time</option>
                                    <option>Morning</option>
                                    <option>Afternoon</option>
                                    <option>Evening</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Service / Issue</label>
                                <input type="text" class="form-control form-control-lg"
                                       placeholder="Your requirement">
                            </div>

                            <div class="col-12 text-center mt-3">
                                <button type="submit"
                                        class="btn btn-success btn-lg px-5 rounded-pill">
                                    Submit Enquiry
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


@endsection

@push('styles')
<style>
.hero-section{
    min-height: 80vh;
    background:
        linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)),
        url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=1600&q=80');
    background-size: cover;
    background-position: center;
}
</style>
@endpush
