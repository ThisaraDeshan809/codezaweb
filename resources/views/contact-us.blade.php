@extends('layouts.main')

@section('content')
    <div class="breadcrumbs" data-aos="fade-in" style="background-color: rgb(29, 29, 29);">
        <div class="container">
            <h2>Contact Us</h2>
            <p>We value your feedback, inquiries, and collaboration opportunities. Feel free to reach out to us regarding
                our software and web design services. Our team at Codeza is ready to assist you and provide prompt and
                professional support. Let's connect and embark on a journey of digital success together.</p>
        </div>
    </div>


    <section id="contact" class="contact">
        <div data-aos="fade-up">
            <img src="assets/img/map.PNG" alt="" style="border:0; width: 100%; height: 350px;">
        </div>

        <div class="container" data-aos="fade-up">

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Anuradhapura</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>codeza@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+94 77 12 55 809</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">
                    <form id="contactForm" action="" method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading" style="display: none;">Loading...</div>
                            {{-- <div class="error-message" style="display: none;"></div>
                            <div class="sent-message" style="display: none;">Your message has been sent. Thank you!</div> --}}
                        </div>
                        <div class="text-center"><button id="btn_send_message" type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        $(document).ready(function() {

            toastr.options = {
                'closeButton': true,
                'debug': false,
                'newestOnTop': false,
                'progressBar': false,
                'positionClass': 'toast-top-right',
                'preventDuplicates': false,
                'showDuration': '1000',
                'hideDuration': '1000',
                'timeOut': '5000',
                'extendedTimeOut': '1000',
                'showEasing': 'swing',
                'hideEasing': 'linear',
                'showMethod': 'fadeIn',
                'hideMethod': 'fadeOut',
            }

            $('#btn_send_message').on('click', function(event) {
                event.preventDefault(); // Prevent the default form submission
                $('.loading').show();

                // Gather form data
                let formData = {
                    name: $('#name').val(),
                    email: $('#email').val(),
                    subject: $('#subject').val(),
                    message: $('textarea[name="message"]').val(),
                };

                // Send AJAX request
                $.ajax({
                    url: 'store/contact-message', // Adjust the URL as needed
                    type: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                            'content') // Add CSRF token for Laravel
                    },
                    success: function(response) {
                        if (response.success == true) {
                            // Hide loading spinner
                            $('.loading').hide();
                            toastr.success(response.message);
                            $('#contactForm')[0].reset(); // Reset the form
                        } else {
                            // Hide loading spinner
                            $('.loading').hide();
                            toastr.error(response.message);
                        }
                    },
                    error: function(xhr) {
                        // Hide loading spinner
                        $('.loading').hide();
                        toastr.error(response.message);
                    }
                });
            });
        });
    </script>
@endsection
