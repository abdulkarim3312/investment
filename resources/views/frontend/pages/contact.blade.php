@extends('frontend.master')

@section('title')
    About Us
@endsection

@section('styles')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <style>

    </style>
@endsection

@section('content')
<!-- Page Title -->
<section class="page-title">
    <div class="page-title_shapes" style="background-image:url(assets/images/background/page-title_bg.png)"></div>
    <div class="page-title_bg" style="background-image:url(assets/images/background/page-title_bg.jpg)"></div>
    <div class="page-title_icons" style="background-image:url(assets/images/background/page-title_icons.png)"></div>
    <div class="auto-container">
        <h2>Contact</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="index.html">Home</a></li>
            <li>Contact Us</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Map One -->
<section class="map-one">
    <div class="map-outer">
        <iframe  class="map w-100" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
    </div>
</section>
<!-- End Map One -->

<!-- Contact One -->
<section class="contact-one">
    <div class="contact-one_icon" style="background-image:url(assets/images/icons/icon-11.png)"></div>
    <div class="auto-container">
        <div class="title-box">
            <h4>Are you ready to work smarter? How <br> can we help?</h4>
        </div>
        <div class="row clearfix">

            <!-- Info Block One -->
            <div class="info-block_one col-lg-4 col-md-6 col-sm-12">
                <div class="info-block_one-inner">
                    <div class="info-block_one-icon">
                        <i class="flaticon-targeting"></i>
                    </div>
                    <h5>Business queries:</h5>
                    <div class="text">12/6 Suite 80 Golden Street Germeney</div>
                    <div class="contact-info">Telephone: 00 313 1 3114504</div>
                </div>
            </div>

            <!-- Info Block One -->
            <div class="info-block_one col-lg-4 col-md-6 col-sm-12">
                <div class="info-block_one-inner">
                    <div class="info-block_one-icon">
                        <i class="flaticon-personal"></i>
                    </div>
                    <h5>Plan member queries:</h5>
                    <div class="text">12/6 Suite 80 Golden Street Germeney</div>
                    <div class="contact-info">Email: financial.planning@gmail.com</div>
                </div>
            </div>

            <!-- Info Block One -->
            <div class="info-block_one col-lg-4 col-md-6 col-sm-12">
                <div class="info-block_one-inner">
                    <div class="info-block_one-icon">
                        <i class="flaticon-phone-call"></i>
                    </div>
                    <h5>Have any question</h5>
                    <a class="phone_number" href="tel:+88017-00-14-999">+88 017 00 14 999</a> <br>
                    <a class="phone_number" href="tel:+88-017-27-44-222">+88 017 27 44 222</a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Contact One -->

<!-- Contact Two -->
<section class="contact-two">
    <div class="auto-container">
        <div class="inner-container">
            <div class="title-box">
                <h4>Complete the Form Below to <br> Get in Touch Today</h4>
            </div>
            @include('_message')
            <!-- Contact Form -->
            <div class="contact-form">
                <form id="contact-form" action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <input type="text" name="name" id="name" placeholder="Alex Jackson">
                        <span class="text-danger" id="name-input-error"></span>
                    </div>

                    <div class="form-group">
                        <input type="text" name="email" id="email" placeholder="Email address">
                        <span class="text-danger" id="email-input-error"></span>
                    </div>

                    <div class="form-group">
                        <textarea class="" name="message" id="message" placeholder="Type your comment"></textarea>
                        <span class="text-danger" id="message-input-error"></span>
                    </div>

                    <div class="form-group text-center">
                        <!-- Button Box -->
                        <div class="button-box">
                            <button type="submit" id="btn-signup" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Send  Message</span>
                                    <span class="text-two">Send  Message</span>
                                </span>
                            </button>
                        </div>
                    </div>

                </form>
            </div>
            <!-- End Contact Form -->

        </div>
    </div>
</section>
<!-- End Contact Two -->

<!-- Newsletter One -->
<section class="newsletter-one style-two">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">
                <!-- Title Column -->
                <div class="newsletter-one_title-column col-lg-7 col-md-12 col-sm-12">
                    <div class="newsletter-one_title-outer">
                        <div class="newsletter-one_title">Lets Work Together</div>
                        <h3 class="newsletter-one_heading">Subsrcibe for our upcoming <br> latest articles</h3>
                    </div>
                </div>
                <!-- Form Column -->
                <div class="newsletter-one_form-column col-lg-5 col-md-12 col-sm-12">
                    <div class="newsletter-one_form-outer">
                        <div class="newsletter-box">
                            <form method="post" action="https://themazine.com/html/Iconsl/inconsl/contact.html">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" name="search-field" value="" placeholder="name145@gmail.com" required>
                                    <button type="submit" class="theme-btn">Subscribe <i class="flaticon-arrow"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Newsletter One -->
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#inputImage').change(function(){
        let reader = new FileReader();

        reader.onload = (e) => {
            $('#preview-image').attr('src', e.target.result);
        }

        reader.readAsDataURL(this.files[0]);

    });

    $('#adminInputImage').change(function(){
        let reader = new FileReader();

        reader.onload = (e) => {
            $('#admin-preview-image').attr('src', e.target.result);
        }

        reader.readAsDataURL(this.files[0]);

    });

    $('#contact-form').submit(function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        console.log(formData)

        $('#name-input-error').text('');
        $('#email-input-error').text('');
        $('#message-input-error').text('');

        $.ajax({
            type:'POST',
            url: "{{ route('contact_form_store') }}",
            data: formData,
            contentType: false,
            processData: false,
            success: (response) => {
                if (response) {
                    this.reset();
                    toastr.success(response.message);
                }
            },
            error: function(response){
                $('#name-input-error').text(response.responseJSON.message);
                $('#email-input-error').text(response.responseJSON.message);
                $('#message-input-error').text(response.responseJSON.message);
            }
       });
    });

    $(document).ready(function(){
        $('.dropify').dropify();

        var drEvent = $('.dropify-event').dropify();
        drEvent.on('dropify.beforeClear', function(event, element) {
            // return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });
        drEvent.on('dropify.afterClear', function(event, element) {
            // alert('File deleted');
        });
    })
</script>
@endsection
