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
                        <h2>dediée à la gestion des centres de collecte <br> et de tri de la ville de Ouagadougou</h2>
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
                                        <p>Notre solution innovante vous permet d'être alerté du niveau de remplissage des conteneurs à déchets dans les centres de collecte de tri. Le système est basé sur l'envoi en un clic d'un message d'alerte de la part d'une personne surveillant ces lieux. La technologie est facile à installer et prête à l’emploi. Toutes les informations sont envoyées à des serveurs hautement sécurisés pour la sauvegarde et la consultation des données. Ces informations vous offrent un grand avantage pour optimiser vos tournées de collect. <br>
                                        Via le portail <b>Login</b>, vous obtenez un aperçu de tous les conteneurs placés, y compris leur emplacement, le niveau de remplissage et l’heure de la dernière vidange. Vous pouvez voir les conteneurs par zone ainsi que l’historique de tous les dépôts.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </section><!-- End About Section -->

                        <!-- ======= Avantages Section ======= -->
                        <section id="avantage" class="avantage">
                            <div class="container">

                                <div class="section-title" data-aos="fade-up">
                                    <h2>Principaux</h2>
                                    <p>Avantages</p>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                                            <div class="icon"><i class="bx bx-check-shield"></i></div>
                                            <div style="visibility: hidden">.</div>
                                            <h4 class="title"><a href="">Fiable</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                                            <div class="icon"><i class="bx bx-pointer"></i></div>
                                            <div style="visibility: hidden">.</div>

                                            <h4 class="title"><a href="">Simple</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                                            <div class="icon"><i class="bx bx-trip"></i></div>
                                            <div style="visibility: hidden">.</div>
                                            <h4 class="title"><a href="">Rapide</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                                            <div class="icon"><i class="bx bx-stats"></i></div>
                                            <div style="visibility: hidden">.</div>
                                            <h4 class="title"><a href="">Statistiques</a></h4>
                                        </div>
                                    </div>


                                    <div class="col-4" style="visibility: hidden">
                                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                                            <div class="icon"><i class="bx bx-check-shield"></i></div>
                                            <div style="visibility: hidden">.</div>
                                            <h4 class="title"><a href="">Efficace</a></h4>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section><!-- End Features Section -->

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
                                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Pourquoi ce système ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                                <p>
                                                    Dans le souci de toujours œuvrer pour le bien-être de sa population, la Mairie de Ouagadougou entend optimiser le ramassage des déchets des ménages à travers ce système.
                                                </p>
                                            </div>
                                        </li>
                                        <li data-aos="fade-up">
                                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-2">Comment fonctionne ce système ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-2" class="collapse show" data-bs-parent=".faq-list">
                                                <p>
                                                    A travers une application mobile, le gardeur des lieux envoie un signalement, à l'aide d'un <b>simple clic</b> dès qu'un bac à ordure est plein afin d'alerter les ramasseurs en tel réel.
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
                                                <h4>Localisation:</h4>
                                                <p>Somgandé, Ouagadougou - BURKINA FASO</p>
                                            </div>

                                            <div class="email">
                                                <i class="bi bi-envelope"></i>
                                                <h4>Email:</h4>
                                                <p>info@ouagasania.bf</p>
                                            </div>

                                            <div class="phone">
                                                <i class="bi bi-phone"></i>
                                                <h4>Téléphone:</h4>
                                                <p>(+226) 57 66 28 14</p>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

                                        <form action="#" method="post" role="form" class="php-email-form">
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" required>
                                                </div>
                                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Votre adresse mail" required>
                                                </div>
                                            </div>
                                            <div class="form-group mt-3">
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
                                            </div>
                                            <div class="form-group mt-3">
                                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                            </div>
                                            <div class="my-3">
                                                <div class="loading">Chargement</div>
                                                <div class="error-message"></div>
                                                <div class="sent-message">Votre message a été envoyé. Merci !</div>
                                            </div>
                                            <div class="text-center"><button type="submit">Envoyer</button></div>
                                        </form>

                                    </div>

                                </div>

                            </div>
                        </section><!-- End Contact Section -->

                    </main><!-- End #main -->



                    @endsection
