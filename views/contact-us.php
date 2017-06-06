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

<!--Contact Deatils -->
<section id="contact" class="padding">
    <div class="container">
        <div class="row padding-bottom">
            <div class="col-md-4 contact_address heading_space wow fadeInLeft" data-wow-delay="400ms">
                <h2 class="heading heading_space"><span>Get</span> in Touch <span class="divider-left"></span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                <div class="address">
                    <i class="icon icon-map-pin border_radius"></i>
                    <h4>Visit Us</h4>
                    <p>Tottenham Road, Japan.</p>
                </div>
                <div class="address second">
                    <i class="icon icon-envelope border_radius"></i>
                    <h4>Email Us</h4>
                    <p><a href="mailto:xwin@info.com">xwin@info.com</a></p>
                </div>
                <div class="address">
                    <i class="icon icon-phone4 border_radius"></i>
                    <h4>Call Us</h4>
                    <p>(+01) 123 456 7890</p>
                </div>
            </div>
            <div class="col-md-8 wow fadeInRight" data-wow-delay="4500ms">
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
                                <input type="text" class="form-control" placeholder="Website" name="website" id="website" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <textarea placeholder="Comment"  name="message" id="message"></textarea>
                            <button class="btn_common yellow border_radius" id="btn_submit">Submit</button>
                        </div>
                    </div>
                </form>
                <ul class="social_icon black top30">
                    <li><a href="#." class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#." class="twitter"><i class="icon-twitter4"></i></a></li>
                    <li><a href="#." class="dribble"><i class="icon-dribbble5"></i></a></li>
                    <li><a href="#." class="instagram"><i class="icon-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row wow bounceIn" data-wow-delay="300ms">
            <div class="col-md-12">
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>
<!--/ Contact Details -->

<?php include 'molecules/testimonials.php'; ?>
<?php include 'molecules/layout/footer.php'; ?>
