<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Rider Free  - Multipurpose Bootstrap 5 HTML Admin Dashboard Template
Upgrade to Pro: https://keenthemes.com/products/rider-html-pro
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>OptiEvent| Connexion</title>
		<meta name="description" content="Rider admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
		<meta name="keywords" content="Rider, bootstrap, bootstrap 5, dmin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
		<link rel="canonical" href="Https://preview.keenthemes.com/rider-free" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('User/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<div class="page d-flex flex-row flex-column-fluid">
                <div class="col-5 left-part">
                    <div class="form-head mt-5">
                        <div class="text-center">
                            <img  class ="logo-optievent" src="{{asset('User/assets/media/logos/logo_optievent_v0.png')}}" alt="">
                        </div>
                    </div>
                    <h6> 
                        @if (session('message'))
                        <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                        </div>  
                        @endif
                    </h6>
                    <div class="form-part mt-5">
                       <form action="{{route('SaveConnexion')}}" method=post>
                       {{ csrf_field() }}
                    
                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class="required form-label">Adresse Email  / Email Address : </label>
                            <input type="email" name="email" class="form-control" placeholder="Entrer l'adresse mail"/>
                        </div>
                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class="required form-label">Mot de passe  / Password : </label>
                            <input type="password" name="password" class="form-control" placeholder="Entrer le mot de passe"/>
                        </div>
                       
                       
                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class="form-label">Code ??v??nement / event code : </label>
                            <input type="text" name="code_event" value ="RAF 2022" class="form-control" placeholder="Num??ro de t??l??phone"/>
                        </div>
                        <hr>
                        <div class="mb-10 form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">
                                Se souvenir de moi / Remember me
                            </label>
                        </div>
                        <button class="btn btn-violet">Connexion</button>
                       </form>
                       <div class="text-center">
                        Vous n'avez pas de compte ? <a class="orange-link" href="/inscriptions">Inscrivez-vous maintenant !</a>
                        </div>
                    </div>        
                </div>
                <div class="col-7 right-part">
                    <div class="adspace-head mt-5">
                        <div class="text-center">
                            <img  class ="logo-client" src="{{asset('User/assets/media/logos/logo-raf.png')}}" alt="">
                        </div>
                        <div class="adspace-body">
                            <img class ="publicite" src="{{asset('User/assets/media/publicite/image-pub-1.jpeg')}}" alt="pub">
                            <img class ="publicite" src="{{asset('User/assets/media/publicite/image-pub-2.jpeg')}}" alt="">
                            <img class ="publicite" src="{{asset('User/assets/media/publicite/image-pub-3.jpeg')}}" alt="">
                        </div>
                        <div class="adspace-footer">

                        </div>
                    </div>
                </div>
			</div>
		</div>
		

		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/custom/widgets.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>