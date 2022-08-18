<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper navbar-brand valign">
            <a href="index2.html">
                <div class="logo"> <img src="frontend-files/img/logo-light.png" class="logo-img" alt=""> </div>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="ti-line-double"></i></span> </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown"> <span class="nav-link active"> Home <i class="ti-angle-down"></i></span>
                    <ul class="dropdown-menu last">
                        <li class="dropdown-item"><a href="index-2.html">Home Layout 1</a></li>
                        <li class="dropdown-item active"><a href="index2.html">Home Layout 2</a></li>
                        <li class="dropdown-item"><a href="index3.html">Home Layout 3</a></li>
                        <li class="dropdown-item"><a href="index4.html">Home Layout 4</a></li>
                        <li class="dropdown-item"><a href="index5.html">Home Layout 5</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                <li class="nav-item dropdown"> <span class="nav-link"> Tours <i class="ti-angle-down"></i></span>
                    <ul class="dropdown-menu last">
                        <li class="dropdown-item"><a href="tours.html">Tours 1</a></li>
                        <li class="dropdown-item"><a href="tours2.html">Tours 2</a></li>
                        <li class="dropdown-item"><a href="tours3.html">Tours 3</a></li>
                        <li class="dropdown-item"><a href="tour-details.html">Tour Details</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="destination.html">Destinations</a></li>
                <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                <li class="nav-item dropdown"> <span class="nav-link"> Blog <i class="ti-angle-down"></i></span>
                    <ul class="dropdown-menu last">
                        <li class="dropdown-item"><a href="blog.html">Blog 1</a></li>
                        <li class="dropdown-item"><a href="blog2.html">Blog 2</a></li>
                        <li class="dropdown-item"><a href="post.html">Single Post</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Slider -->
<header class="header slider-fade">
    <div class="owl-carousel owl-theme">
        <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
        <div class="text-center item bg-img" data-overlay-dark="5" data-background="frontend-files/img/slider/1.jpg">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <h4>Let's travel the world with us</h4>
                            <h1>Explore The World With <span>Travol</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center item bg-img" data-overlay-dark="5" data-background="frontend-files/img/slider/2.jpg">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <h4>Let's travel the world with us</h4>
                            <h1>Explore Rome With <span>Travol</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center item bg-img" data-overlay-dark="5" data-background="frontend-files/img/slider/3.jpg">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <h4>Let's travel the world with us</h4>
                            <h1><span>Discover</span> the world with our guide</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Tour Search -->


<!-- Tour Search -->
<div class="booking-wrapper">
    <div class="container">
        <div class="tour-inner clearfix form-inline justify-content-center">
            <form action="https://duruthemes.com/demo/html/travol/tours.html" class="form1 clearfix">
                <div class="col1 c1">
                    <div class="input2_wrapper">
                        <label>Where to?</label>
                        <div class="input2_inner">
                            <input type="text" class="form-control input" placeholder="Where to?">
                        </div>
                    </div>
                </div>
                <div class="col1 c2">
                    <div class="select1_wrapper">
                        <label>Destinations</label>
                        <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                                <option value="0">Destinations</option>
                                <option value="1">Greece</option>
                                <option value="2">London</option>
                                <option value="3">Maldives</option>
                                <option value="4">Paris</option>
                                <option value="5">Rome</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col1 c4">
                    <div class="select1_wrapper">
                        <label>Duration</label>
                        <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                                <option value="0">Duration</option>
                                <option value="1">1 Day Tour</option>
                                <option value="2">2-4 Days Tour</option>
                                <option value="3">5-7 Days Tour</option>
                                <option value="4">7+ Days Tour</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col1 c5">
                    <button type="submit" class="btn-form1-submit"><i class="ti-search"></i> Find Now</button>
                </div>
            </form>
        </div>
    </div>
</div>