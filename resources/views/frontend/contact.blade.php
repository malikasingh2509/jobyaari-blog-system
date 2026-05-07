@extends('layouts.frontend')

@section('content')

<div class="hero">

    <div class="container">

        <h1>

            Contact Us

        </h1>

        <p>

            We'd Love To Hear From You

        </p>

    </div>

</div>

<div class="container py-5">

    <div class="row">

        <div class="col-lg-8 mb-4">

            <div class="sidebar-box">

                <h2 class="fw-bold mb-4">

                    Get In Touch

                </h2>

                <form>

                    <div class="row">

                        <div class="col-md-6 mb-4">

                            <label class="mb-2 fw-semibold">

                                Full Name

                            </label>

                            <input type="text"
                                   class="form-control"
                                   placeholder="Enter your name">

                        </div>

                        <div class="col-md-6 mb-4">

                            <label class="mb-2 fw-semibold">

                                Email Address

                            </label>

                            <input type="email"
                                   class="form-control"
                                   placeholder="Enter your email">

                        </div>

                    </div>

                    <div class="mb-4">

                        <label class="mb-2 fw-semibold">

                            Subject

                        </label>

                        <input type="text"
                               class="form-control"
                               placeholder="Enter subject">

                    </div>

                    <div class="mb-4">

                        <label class="mb-2 fw-semibold">

                            Message

                        </label>

                        <textarea class="form-control"
                                  rows="7"
                                  placeholder="Write your message"></textarea>

                    </div>

                    <button class="btn btn-primary">

                        Send Message

                    </button>

                </form>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="sidebar-box mb-4">

                <h4 class="fw-bold mb-4">

                    Contact Information

                </h4>

                <div class="mb-4">

                    <h5>

                        📧 Email

                    </h5>

                    <p>

                        smalika7489@gmail.com

                    </p>

                </div>

                <div class="mb-4">

                    <h5>

                        📞 Phone

                    </h5>

                    <p>

                        +91 6200833035

                    </p>

                </div>

                <div>

                    <h5>

                        📍 Address

                    </h5>

                    <p>

                        Delhi, India

                    </p>

                </div>

            </div>

            <div class="sidebar-box">

                <h4 class="fw-bold mb-4">

                    Office Hours

                </h4>

                <p>

                    Monday - Friday:
                    9:00 AM - 6:00 PM

                </p>

                <p>

                    Saturday:
                    10:00 AM - 4:00 PM

                </p>

                <p>

                    Sunday:
                    Closed

                </p>

            </div>

        </div>

    </div>

</div>

@endsection