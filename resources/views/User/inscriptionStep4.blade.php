<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>OptiEvent| Détails participant</title>
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<div class="page d-flex flex-row flex-column-fluid">
                <div class="col-6 left-part">
                    <div class="form-head mt-5">
                        <div class="text-center">
							<div class="progress-container">
								<ul class="progress-progressbar">
									<<a href="/inscriptionstep1"><li>Détails participant</li></a>
									<a href="/inscriptionstep2"><li>Détails entreprise</li></a>
									<a href="/inscriptionstep3"><li>Centres d’intérêts</li></a>
									<a href="/inscriptionstep4"><li class="active">Finaliser l'inscription<br></li></a>
								
								</ul>
							</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="step-header text-left">
                            <h4>Modalités de participation au Rebranding Africa Forum <br> Rebranding Africa Forum Pricing  </h4>
                        </div>
                    </div>
				
                    <div class="details-participant-box">
						
						<div class="mb-10">
							Serez vous présent sur place  au Rebarnding Africa Forum ?
							<div class="row">
								<div class="col-6 text-left">
									<a href="#" class="btn btn-flex btn-success px-6 button-pricing">
										<span class="d-flex flex-column text-left ms-2">
											<h4 class="fs-3 fw-bolder">Participation au Jour 1 </h4>
											<p class="fs-7">Ce pass vous donne droit uniquement aux activités 
                                                du jour 1  </p>
										</span>
									</a>
								</div>
								<div class="col-6 text-left">
									<a href="#" class="btn btn-flex btn-orange px-6 button-pricing">
										<span class="d-flex flex-column text-left ms-2">
											<h4 class="fs-3 fw-bolder">Participation au Jour 2 </h4>
											<p class="fs-7">Ce pass vous donne droit uniquement aux activités 
                                                du jour 2 </p>
										</span>
									</a>
								</div>
                                <div class="col-12 text-left">
									<a href="#" class="btn btn-flex btn-danger px-6 button-pricing">
										<span class="d-flex flex-column text-left ms-2">
											<h4 class="fs-3 fw-bolder">Partcipation au Jour 1 + Jour 2  </h4>
											<p class="fs-7">Ce pass vous donne droit à toutes les activités de l’évènment ! </p>
										</span>
									</a>
								</div> 
                                <div class="mt-5 col-12 text-left">
                                    <h4>Tarif : 150 € </h4>
                                </div>
							</div>           
                        </div>
                        <div class="mt-5 col-12">
                            <button type="button" class="btn btn-violet">Continuer </button>
                            <button type="button" class="btn btn-danger">Quitter</button>
                        </div>  
					 </div>   
                </div>
                <div class="col-6 right-part">
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
        <script type="text/javascript">
            // add row
            $("#addRow").click(function () {
                var html = '';
                html += '<div id="inputFormRow">';
                html += '<div class="input-group row mb-3">';
                html += ' <div class="col-md-5">';
                html += '<label for="inputEmail4" class="form-label required">Prénom / First Name : </label>';
                html += '<input type="email" class="form-control" id="inputEmail4">';
                html += ' </div> ';
                html += '<div class="col-md-5">'
                    html += ' <label for="inputEmail4" class="form-label required">Email : </label>';
                    html += '<input type="email" class="form-control" id="inputEmail4">';
                    html += ' </div> ';
   
                    html += ' <div class="col-md-2 pt-7">';            
                        html += '<button id="removeRow" type="button" class="btn btn-danger"><i class="bi bi-trash"></i> </button>';
                        html += ' </div> ';
                        html += ' </div> ';
                        html += ' </div> ';
        
                $('#newRow').append(html);
            });
        
            // remove row
            $(document).on('click', '#removeRow', function () {
                $(this).closest('#inputFormRow').remove();
            });
        </script>

        <script src="assets/js/multi-input-script.js"></script>
        <script src="assets/js/multi-input.js"></script>
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