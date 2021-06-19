<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.namee', 'OuagaSania | Enregistrement entreprise ') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link href="{{ asset('assets/img/logo/logo.ico') }}" rel="icon">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/forms/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/forms/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/forms/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/forms/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/forms/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/forms/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/forms/css/main.css">
    <!--===============================================================================================-->
</head>
<body>
    <div class="contact1">
        <div class="container-contact1">
            <div class="contact1-pic js-tilt" data-tilt>
                <img src="assets/img/logo/logo.png" alt="IMG" style="width: 200%">
            </div>

            <form class="contact1-form validate-form" action="{{ route('societe.store') }}" method="post">
                @csrf
                <span class="contact1-form-title">
                    Enregistrement entreprise
                </span>

                <div class="wrap-input1 validate-input" data-validate = "Nom réquis">
                    <input class="input1" type="text" name="name" placeholder="Nom de l'entreprise">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate = "Email réquis: info@example.com">
                    <input class="input1" type="text" name="email" placeholder="E-mail">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate = "Numéro réquis">
                    <input class="input1" type="text" name="subject" placeholder="Téléphone" min=0>
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate = "Message is required" id="textearea">
					<textarea class="input1" name="message" placeholder="Message">Default</textarea>
					<span class="shadow-input1"></span>
				</div>


                <div class="container-contact1-form-btn">
                    <button class="contact1-form-btn">
                        <span>
                            Enregistrer
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="assets/forms/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/forms/vendor/bootstrap/js/popper.js"></script>
    <script src="assets/forms/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/forms/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/forms/vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

        $('#textearea').hide();
    </script>

    <!--===============================================================================================-->
    <script src="assets/forms/js/main.js"></script>
</body>
</html>
