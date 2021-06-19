@extends('layouts.app')

@section('content')
{{-- <div class="container"> --}}
    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>Bienvenue sur votre <span> plateforme</span></h1>
                        <h2>de gestion des Centres de Collecte et de Tri de la ville de Ouagadougou</h2>
                        <div class="text-center text-lg-start">
                            <a href="#about" class="btn-get-started scrollto">En savoir plus...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                </defs>
                <g class="wave1">
                    <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
                    </g>
                    <g class="wave2">
                        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
                        </g>
                        <g class="wave3">
                            <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
                            </g>
                        </svg>

                    </section><!-- End Hero -->

                    <main id="main">

                        <!-- ======= About Section ======= -->
                        <section id="about" class="about">
                            <div class="container-fluid">

                                <div class="row">
                                    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
                                        <a href="#" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                                    </div>
                                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
                                        <h3>A propos</h3>
                                        <p>OuagaSania est une plateforme permettant de regrouper les 60 Centres de Collecte de Tri (CCT) et les Centres de Traitement et de Valorisation de Déchets (CTVD) de la ville de Ouagadougou et d'en faire un suivi scrupuleux du niveau de remplissage de ceux-ci afin d'améliorer leur efficacité. </p>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                                                    <div class="icon"><i class="bx bx-pointer"></i></div>
                                                    <div style="visibility: hidden">.</div>

                                                    <h4 class="title"><a href="">Simple</a></h4>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                                                    <div class="icon"><i class="bx bx-trip"></i></div>
                                                    <div style="visibility: hidden">.</div>
                                                    <h4 class="title"><a href="">Rapide</a></h4>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                                                    <div class="icon"><i class="bx bx-check-shield"></i></div>
                                                    <div style="visibility: hidden">.</div>
                                                    <h4 class="title"><a href="">Efficace</a></h4>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </section><!-- End About Section -->

                        <!-- ======= Features Section ======= -->
                        <section id="features" class="features">
                            <div class="container">

                                <div class="section-title" data-aos="fade-up">
                                    <h2>Autres</h2>
                                    <p>Services</p>
                                </div>

                                <div class="row" data-aos="fade-left">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                                            <i class="ri-store-line" style="color: #ffbb2c;"></i>
                                            <h3><a href="">Alerte</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
                                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                                            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                                            <h3><a href="">Sensibilisation</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
                                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
                                            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                                            <h3><a href="">Forum</a></h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section><!-- End Features Section -->

                        <!-- ======= Counts Section ======= -->
                        <section id="counts" class="counts">
                            <div class="container">

                                <div class="row" data-aos="fade-up">

                                    <div class="col-lg-4 col-md-6">
                                        <div class="count-box">
                                            <i class="bi bi-emoji-smile"></i>
                                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                                            <p>Happy Clients</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                                        <div class="count-box">
                                            <i class="bi bi-journal-richtext"></i>
                                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                                            <p>Projects</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
                                        <div class="count-box">
                                            <i class="bi bi-headset"></i>
                                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                                            <p>Hours Of Support</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section><!-- End Counts Section -->

                        <!-- ======= F.A.Q Section ======= -->
                        <section id="faq" class="faq section-bg">
                            <div class="container">

                                <div class="section-title" data-aos="fade-up">
                                    <h2>F.A.Q</h2>
                                    <p>Foire A Questions</p>
                                </div>

                                <div class="faq-list">
                                    <ul>
                                        <li data-aos="fade-up">
                                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                                <p>
                                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                                </p>
                                            </div>
                                        </li>

                                        <li data-aos="fade-up" data-aos-delay="100">
                                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                                <p>
                                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                                </p>
                                            </div>
                                        </li>

                                        <li data-aos="fade-up" data-aos-delay="200">
                                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                                <p>
                                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                                </p>
                                            </div>
                                        </li>

                                        <li data-aos="fade-up" data-aos-delay="300">
                                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                                <p>
                                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                                                </p>
                                            </div>
                                        </li>

                                        <li data-aos="fade-up" data-aos-delay="400">
                                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                                <p>
                                                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                                                </p>
                                            </div>
                                        </li>

                                    </ul>
                                </div>

                            </div>
                        </section><!-- End F.A.Q Section -->

                        <!-- ======= Contact Section ======= -->
                        <section id="contact" class="contact">
                            <div class="container">

                                <div class="section-title" data-aos="fade-up">
                                    <h2>Contact</h2>
                                    <p>Contactez Nous</p>
                                </div>

                                <div class="row">

                                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                                        <div class="info">
                                            <div class="address">
                                                <i class="bi bi-geo-alt"></i>
                                                <h4>Location:</h4>
                                                <p>A108 Adam Street, New York, NY 535022</p>
                                            </div>

                                            <div class="email">
                                                <i class="bi bi-envelope"></i>
                                                <h4>Email:</h4>
                                                <p>info@example.com</p>
                                            </div>

                                            <div class="phone">
                                                <i class="bi bi-phone"></i>
                                                <h4>Call:</h4>
                                                <p>+1 5589 55488 55s</p>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

                                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                                </div>
                                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                                </div>
                                            </div>
                                            <div class="form-group mt-3">
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                            </div>
                                            <div class="form-group mt-3">
                                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                            </div>
                                            <div class="my-3">
                                                <div class="loading">Loading</div>
                                                <div class="error-message"></div>
                                                <div class="sent-message">Your message has been sent. Thank you!</div>
                                            </div>
                                            <div class="text-center"><button type="submit">Send Message</button></div>
                                        </form>

                                    </div>

                                </div>

                            </div>
                        </section><!-- End Contact Section -->

                    </main><!-- End #main -->



@endsection
