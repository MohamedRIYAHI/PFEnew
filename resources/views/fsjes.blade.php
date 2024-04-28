


<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pré-inscription</title>


    <style>
        .ibox-content {border-width: 3px 0px } 
		.form-control {height: 28px; padding: 2px 8px;}
        .top-navigation .wrapper.wrapper-content{padding:0px 25px 40px 25px}
        
		.select2-container--default .select2-selection--single{border-radius:0px}
		.select2-container--default .select2-selection--single{border:1px solid #e5e6e7}
		.select2-container--default .select2-selection--multiple{border:1px solid #e5e6e7}
		.select2-container--default.select2-container--focus .select2-selection--multiple{border:solid #00cbcc 1px;outline:0;}
		.select2-container--default.select2-container--focus .select2-selection--single{border:solid #00cbcc 1px;outline:0;}    

        @media only screen and (max-width: 600px) {
            #id_photo {font-size:8px}
            #effacer_photo {font-size:9px}
            .wizard > .actions a{font-size:9px}
        } 
        @media only screen and (min-width: 601px) {
            #id_photo {font-size:12px}
            #effacer_photo {font-size:13px}
        }

        #navbar.two-logos {
            display: flex !important;
            justify-content: space-between;
        }
        #navbar.two-logos::before, #navbar.two-logos::after {
            content: none;
        }

        .autre_choice input {
            margin-top: 10px;
        }
        .top-msg {
            padding-top: 10px;
            color: var(--warning);
            font-weight: bold;
        }
        .form-section {
            margin-top: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px 0;
        }
        .block-label {
            margin-top: 15px;
            margin-bottom: -5px;
        }
        .block-label label {
            margin-bottom: 0;
        }

        .edit-form-container {
            border: 1px solid #ddd;
            padding: 5px 20px;
            border-radius: 5px;
            margin-top: 15px;
            box-shadow: 1px 1px 10px rgba(0, 0, 0, .05);
        }

        .inner-edit-form {
            display: flex;
            flex-wrap: wrap;
        }
        .inner-edit-form .form-group {
            margin-right: 10px;
            flex: 1;
        }

        .pwd-wrapper {
            position: relative;
        }
        .pwd-wrapper .eye-btn {
            position: absolute;
            top: 0;
            right: 0;
            color: #333;
        }
        .pwd-wrapper .eye-btn i {
            line-height: 17px;
            padding: 5px;
        }
        .pwd-wrapper input {
            padding-right: 25px;
        }

        select.select2, span.select2 {
            width: 100% !important;
        }

        .rtl label {
           margin-bottom: 2px;
        }
    </style>
    
</head>

<body class="top-navigation">

    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom white-bg">
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="navbar-collapse collapse text-center two-logos" id="navbar">
                <img class="text-center" alt="image" style="padding: 10px 20px; max-height:120px;"  src="/media/img/logo.png" />
                
                    <img class="text-center" alt="image" style="padding: 10px 20px; max-height:120px;"  src="/media/img/logo2.png" />
                
            </div>
        </nav>
    </div>

    <div class="wrapper wrapper-content" style="padding-top:3px">
            
        <div class="row">
            <h2 class="text-center" style="font-weight:700">Formulaire de pré-inscription en ligne - Formation Continue </h2>
            <h3 class="text-center" style="font-weight:600">Année universitaire : 2024/2025</h3>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                <div class="ibox-content">
                    
                    <p>
                        Tous les champs avec une Astérix (*) sont obligatoires.
                    </p>

                    <div class="steps-wrapper">
                        <ul class="steps-list">
                            <li class=" current ">
                                <h3>1. Informations personnelles</h3>
                            </li>
                            <li class="">
                                <h3>2. Formations académiques</h3>
                            </li>
                            
                        </ul>
                    </div>

                    <form id="form" action="" method="post" class="wizard-big" enctype="multipart/form-data">
                        <input type='hidden' name='csrfmiddlewaretoken' value='MVOJB7MfCvlypXdlZmRH4dJwitytGSciHrbuuKKQjsVsIzZ8PNjZfOWne3LXeTPM' />
                        
                            <h1>Informations personnelles</h1>
                            <div class="form-section row">
                                <div class="col-sm-12">
                                    <div class="col-sm-12">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <h4>Photo d'identité</h4>
                                                    <img src="/static/preinscription/img/img_null.png" id="img" alt="image" style=" max-width: 112px;max-height: 135px;margin-bottom:5px">
                                                <br>
                                                <div class="btn-group">
                                                    <input type="file" name="photo" class="form-control" id="id_photo" />
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div style="margin-bottom: 30px; width: 100%;"></div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="col-sm-12">
                                            <div class="form-group col-sm-6" style="padding-left: 0;">
                                                <label>Nom (*)</label>
                                                <input type="text" name="nom" class="form-control" maxlength="256" required id="id_nom" />
                                                
                                            </div>
                                            <div class="form-group col-sm-6 rtl" style="padding-right: 0;">
                                                <label>الإسم العائلي (*)</label>
                                                <input type="text" name="nom_ar" class="form-control rtl" maxlength="256" required id="id_nom_ar" />
                                                
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group col-sm-6" style="padding-left: 0;">
                                                <label>Prénom (*)</label>
                                                <input type="text" name="prenom" class="form-control" maxlength="256" required id="id_prenom" />
                                                
                                            </div>
                                            <div class="form-group col-sm-6 rtl" style="padding-right: 0;">
                                                <label>الإسم الشخصي (*)</label>
                                                <input type="text" name="prenom_ar" class="form-control rtl" maxlength="256" required id="id_prenom_ar" />
                                                
                                            </div>
                                        </div>

                                        <div class="container mt-5">
                                            <div class="form-group">
                                              <label for="datePicker">Date de naissance :</label>
                                              <input type="text" class="form-control" id="datePicker" placeholder="Cliquez pour choisir une date">
                                            </div>
                                          </div>
                        
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js"></script>
                            <script>
                            $(document).ready(function(){
                              $('#datePicker').datepicker({
                                format: 'dd/mm/yyyy',
                                autoHide: true
                              });
                            });
                            </script>

                                        <div class="col-sm-12">
                                            <div class="form-group col-sm-6" style="padding-left: 0;">
                                                <label>Lieu de naissance (*)</label>
                                                <input type="text" name="lieu_naissance" class="form-control" maxlength="256" required id="id_lieu_naissance" />
                                                
                                            </div>
                                            <div class="form-group col-sm-6 rtl" style="padding-right: 0;">
                                                <label>مكان الازدياد (*)</label>
                                                <input type="text" name="lieu_naissance_ar" class="form-control rtl" maxlength="256" required id="id_lieu_naissance_ar" />
                                                
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group" style="">
                                                <label>Sexe (*)</label>
                                                <select name="sexe" class="form-control" required id="id_sexe">
  <option value="" selected>----</option>

  <option value="H">Homme</option>

  <option value="F">Femme</option>

</select>
                                                
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group" style="">
                                                <label>Statut</label>
                                                <select name="statut" class="form-control" id="id_statut">
  <option value="" selected>-------------</option>

  <option value="ETUDIANT">ETUDIANT</option>

  <option value="EMPLOYE">EMPLOYE</option>

  <option value="STAGIAIRE">STAGIAIRE</option>

  <option value="SANS EMPLOI">A LA RECHERCHE D'UN EMPLOI</option>

</select>
                                                
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group" style="">
                                                <label>Adresse</label>
                                                <textarea name="adr_personnelle" cols="40" rows="3" class="form-control" maxlength="2560" id="id_adr_personnelle">
</textarea>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">

                                        <div class="col-sm-12">
                                            <div class="form-group" style="">
                                                <label>CIN (*)</label>
                                                <input type="text" name="cin" class="form-control" maxlength="30" required id="id_cin" />
                                                
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group" style="display: none;">
                                                <label></label>
                                                
                                                
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group" style="">
                                                <label>Téléphone portable (*)</label>
                                                <input type="text" name="numero_tel" class="form-control" maxlength="15" required id="id_numero_tel" />
                                                
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group" style="">
                                                <label>Téléphone fixe</label>
                                                <input type="text" name="numero_tel2" class="form-control" maxlength="15" id="id_numero_tel2" />
                                                
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group" style="">
                                                <label>Adresse Email (*)</label>
                                                <input type="email" name="adr_email" class="form-control" maxlength="254" required id="id_adr_email" />
                                                
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group" style="">
                                                <label>Confirmer votre adresse email</label>
                                                <input type="email" name="adr_email2" class="form-control" onpaste="return false;" id="id_adr_email2" />
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            

                        <!-- Buttons -->
                        <div class="action-btns">
                            
                            
                                <button type="button" class="btn btn-info" onclick="next()">Suivant</button>
                            
                            
                        </div>
                    </form>
                </div>
                
                </div>
            
            </div>
        </div>

        <div class="footer">
            <div>
                <strong>Copyright</strong> Aptus Consulting &copy; 2019
            </div>
        </div>
    </div>

    <!-- Modals -->
    <div class="modal fade" id="saveModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-primary" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" style="font-size: 25px; text-align: center;">
                        Voulez-vous confirmer l’envoie de votre formulaire ?
                    </h4>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                    <button class="btn btn-primary" onclick="finish()" type="button">Valider</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="/static/preinscription/js/jquery-2.1.1.js"></script>
    <script src="/static/preinscription/js/bootstrap.min.js"></script>
    <script src="/static/preinscription/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/static/preinscription/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/static/preinscription/js/inspinia.js"></script>
    <script src="/static/preinscription/js/plugins/pace/pace.min.js"></script>
    
	<script src="/static/preinscription/js/bootstrap-datetimepicker.js"></script> 
	<script src="/static/preinscription/js/bootstrap-datetimepicker.fr.js"></script>

    <script src="/static/preinscription/js/plugins/select2/select2.full.min.js"></script>

    <script type="text/javascript">
        $('.date_field').datetimepicker({
            language:  'fr',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            format: 'dd/mm/yyyy',
            forceParse: 0
        });
    </script>
     <script>
         $('.select2').select2();
     </script>

    <script>
        function next() {
            let form = $('#form');
            form.append("<input type='hidden' name='action' value='NextStep'>");
            form.submit();
        }
        function back() {
            let form = $('#form');
            form.append("<input type='hidden' name='action' value='PreviousStep'>");
            form.submit();
        }
        function finish() {
            let div = document.createElement('div');
            div.style.cssText = 'display: block; opacity: 1; position: fixed; top: 0; left: 0;' +
                'width: 100%; height: 100%; background-color: rgba(0, 0, 0, .3); z-index: 99999;'
            $(div).append('<div style="margin-left:auto;margin-right:auto;width:400px;font-size:18px;background-color:white;padding:5px 0px">' +
                    '<center>Traitement en cours, Patienter...</center>' +
                '</div>');
            $('body').append(div);

            let form = $('#form');
            form.append("<input type='hidden' name='action' value='Save'>");
            form.submit();
        }
    </script>

   

</body>

</html>
