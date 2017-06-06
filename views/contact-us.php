<?php include 'molecules/layout/header.php'; ?>

<!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
</section>
<!--/ Page Header-->

<!-- Contact -->
<section id="contact" class="padding">
    <div class="container">
        <div class="row padding-bottom">
            <div class="col-md-4 contact_address heading_space wow fadeInLeft" data-wow-delay="400ms">
                <h2 class="heading heading_space"><span>Get</span> in Touch <span class="divider-left"></span></h2>
                <p>Choose type of inquiry:</p>
                <div class="type-contact address<?php if($_GET['type'] == 'contact'){ echo ' active';}; ?>">
                    <i class="icon icon-envelope border_radius"></i>
                    <h4>General Inquiry</h4>
                    <p>I have a general question.</p>
                </div>
                <div class="type-demo address second<?php if($_GET['type'] == 'demo'){ echo ' active';}; ?>">
                    <i class="icon icon-calendar border_radius"></i>
                    <h4>Request a Demo</h4>
                    <p>I would like to request a demo.</p>
                </div>
                <div class="type-support address<?php if($_GET['type'] == 'support'){ echo ' active';}; ?>">
                    <i class="icon icon-wrench border_radius"></i>
                    <h4>Technical Support</h4>
                    <p>I have a techincal question.</p>
                </div>
            </div>
            <div class="col-md-8 wow fadeInRight" data-wow-delay="1400ms">
                <h2 class="heading heading_space"> <span>Contact</span> Form<span class="divider-left"></span></h2>
                <form class="form-inline findus" id="contact-form" onSubmit="return false">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="result"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name"  name="name" id="name" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Municipality / City" name="website" id="website" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="hidden" class="form-control" name="type" id="type">
                            <textarea placeholder="Message"  name="message" id="message"></textarea>
                            <button class="btn_common yellow border_radius" id="btn_submit">
                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                                &nbsp; Send
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--/ Contact -->

<?php include 'molecules/testimonials.php'; ?>
<?php include 'molecules/layout/footer.php'; ?>
