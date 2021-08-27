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
									<li>Détails participant</li>
									<li class="active">Détails entreprise</li>
									<li>Centres d’intérêts</li>
									<li>Finaliser l'inscription<br></li>
								</ul>
							</div>
                        </div>
                    </div>

					<div class="step-header text-left">
						<p>Pour vous suggérer des rendez-vous pertinents, nous avons besoin  de plus 
                            d’informations sur votre Entreprise et sur le type de partenaires que vous recherchez.
                        </p>
					</div>
					 <div class="details-participant-box">						
						<form class="row g-3">
                            <div class="col-md-8">
                              <label for="inputEmail4" class="form-label required">Nom de l'Entreprise /Company name : </label>
                              <input type="email" class="form-control" id="inputEmail4">
                            </div>
                    
                            <div class="col-md-4">
                                <label for="inputState" class="form-label required">Pays / Country :</label>
                                <select id="inputState" class="form-select">
                                  <option selected>Choose...</option>
                                  <option>...</option>
                                  <option>...</option>
                                  <option>...</option>
                                </select>
                              </div>
                              <label for="inputState" class="form-label required">Secteurs d’activité de l’Entreprises / Company Sectors of activity :</label>
                              <div class="col-md-12">
                                <multi-input>
                                  <input list="speakers" placeholder="Sélectionner /Choose ...">
                                    <datalist id="speakers" value ="Test">
                                        <option value="BTP"></option>
                                        <option value="Bishop Stokesly of London"></option>
                                        <option value="Caesar’s Second Watchman"></option>
                                        
                                    </datalist>
                                </multi-input>
                              </div>
                              <label for="inputState" class="form-label required">Profil de l’Entreprise / Company Profile :</label>
                              <div class="col-md-12">
                                <multi-input>
                                  <input list="speakers-2" placeholder="Sélectionner /Choose ...">
                                    <datalist id="speakers-2" value ="Test">
                                        <option value="Investisseurs"></option>
                                        <option value="Bishop Stokesly of London"></option>
                                        <option value="Caesar’s Second Watchman"></option>
                                       
                                    </datalist>
                                </multi-input>
                              </div>
                              
                              <div class="col-md-12">
                                <label for="inputEmail4" class="form-label required">Quel est votre fonction ? / What is your position ? </label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Entrer la fonction">
                              </div>
                              <hr>
                              <div class="col-md-12 mt-4">
                                <label for="inputEmail4" class="form-label required">Cochez cette case si vous êtes le participant principal (point focal pour votre entreprise ? <br> Check this box if you are the main participant (focal point for your company? </label>
                                <div class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" id="flexSwitchDefault"/>  
                                </div>                              
                             </div>
                             <div class="col-md-12 mt-4">
                                <label for="inputEmail4" class="form-label required">Cochez cette case si vous souhaitez ajouter d’autres participants pour votre entreprise  / Check this box if you want to add more participants for your company </label>
                                <div class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" id="flexSwitchDefault"/>  
                                </div>                              
                             </div>
                          </form>
                          <!-- Ajouter plusieurs participants -->
                          <form method="post" action="">
                            <div class="row">
                                <div class="card col-lg-12">
                                
                                    <div class="card-body">
                                        <div id="inputFormRow">
                                            <div class="input-group row mb-3">
                                                <div class="col-md-5">
                                                    <label for="inputEmail4" class="form-label required">Prénom / First Name : </label>
                                                    <input type="email" class="form-control" id="inputEmail4">
                                                </div> 
                                                <div class="col-md-5">
                                                    <label for="inputEmail4" class="form-label required">Email : </label>
                                                    <input type="email" class="form-control" id="inputEmail4">
                                                </div> 
                                               
                                                <div class="col-md-2 pt-7">                
                                                    <button id="removeRow" type="button" class="btn btn-danger"><i class="bi bi-trash"></i> </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="newRow"></div>
                                        <button id="addRow" type="button" class="btn btn-info mt-5">Ajouter plus / Add more</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="button" class="btn btn-violet">Continuer </button>
                                <button type="button" class="btn btn-danger">Quitter</button>
                            </div>
                        </form>
                        <hr>
                        	
                      
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