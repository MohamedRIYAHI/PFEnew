
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <title>Pré-inscription</title>

</head>
<body class="h-screen flex items-center justify-center" style="background: #edf2f7;">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.css">


<section class=" py-1 bg-blueGray-50"  style="height: 100vh;">
<div class="w-full lg:w-8/12 px-4 mx-auto mt-6"> 
  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
    <div class="rounded-t bg-white mb-0 px-6 py-6"> <p>
        Tous les champs avec une Astérix (*) sont obligatoires.
    </p> <br/>
      <div class="text-center flex justify-between">
       
        <h6 class="text-blueGray-700 text-xl font-bold">
            1.Informations personnelles
        </h6>
        <button class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button"> <form method="GET" action="">@csrf 
          <a href="{{ route('/') }}">
          
            <span> Accueil</span>
          </a>
          </form>
        </button>
      </div>
    </div>
    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
      <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" >
          @csrf
        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
            Informations personnelles    </h6>
        <div class="col-sm-12">
            <div class="form-group">
                <h4>Photo d'identité</h4>
                    <img src="prfl.png" id="img" alt="image" style=" max-width: 90px;max-height: 100px;margin-bottom:5px">
                <br>
                <div class="btn-group">
                    <input type="file" name="photo" class="form-control" id="id_photo" />

                </div>
            </div>
        </div><br/>

        <div class="flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                Nom(*)
              </label>
              <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" required >
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                الإسم العائلي (*)
              </label>
              <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" required>
            </div>
          </div>
          <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4">
              <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                  Prénom(*)
                </label>
                <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" required >
              </div>
            </div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    الإسم الشخصي (*)
                  </label>
                  <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" required >
                </div>
              </div>
            <div class="flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                <div class="container mt-5">
                    <div class="form-group">
                        <label for="datePicker">Date de naissance (*) :</label>
                        <input type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"  id="datePicker" placeholder="Cliquez pour choisir une date" required>
                        <div id="ageError" class="text-red-500 text-xs mt-1" style="display: none;">Vous devez avoir plus de 21 ans.</div>
                  </div>
                </div> 

                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js"></script>
                <script>
                  document.addEventListener('DOMContentLoaded', function() {
                      var datePicker = document.getElementById('datePicker');
                      var ageError = document.getElementById('ageError');
              
                      datePicker.addEventListener('input', function() {
                          var selectedDate = new Date(this.value);
                          var today = new Date();
                          var age = today.getFullYear() - selectedDate.getFullYear();
                          var monthDiff = today.getMonth() - selectedDate.getMonth();
              
                          if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < selectedDate.getDate())) {
                              age--;
                          }
              
                          if (age < 21) {
                              ageError.style.display = 'block';
                          } else {
                              ageError.style.display = 'none';
                          }
                      });
                  });
              </script>
                
              </label>
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                Lieu de Naissance(*)
              </label>
              <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" required >
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                CIN(*)
              </label>
              <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" required>
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                Telephone portable(*)
              </label>
              <input type="tel" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"  id="telephone" name="telephone" pattern="[0-9]{10}" required >
            </div>
          </div>

          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Statut (*)</label>
                <div class="col-sm-12">
                    <div class="form-group" style="">
                        <select name="statut" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"  requiredid="id_statut">
                            <option value="" selected>-------------</option>
                            <option value="ETUDIANT">ETUDIANT</option>
                            <option value="EMPLOYE">EMPLOYE</option>
                            <option value="STAGIAIRE">STAGIAIRE</option>
                            <option value="SANS EMPLOI">A LA RECHERCHE D'UN EMPLOI</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                <div class="col-sm-12">
                    <div class="form-group" style="">
                        <label>Sexe (*)</label>
                        <select name="sexe" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"  required id="id_sexe">
<option value="" selected>-------------</option>
<option value="H">Homme</option>
<option value="F">Femme</option>
</select>                   

</select>

                    </div>
                </div>
              </label>
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label for="email1" class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                Adresse Email (*)
              </label>
              <input type="email" id="email1" oninput="compareEmails()" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"  >
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label for="email2" class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                Confirmer votre adresse email              </label>
              <input type="email" id="email2" oninput="compareEmails()" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
              <p id="result"></p>
            </div>
          </div>
          <script>
            function compareEmails() {
                var email1 = document.getElementById("email1").value;
                var email2 = document.getElementById("email2").value;
                var resultMessage = document.getElementById("result");
                var email1Field = document.getElementById("email1");
                var email2Field = document.getElementById("email2");
                
                if (email1 === email2) {
                    resultMessage.innerText = "Les adresses e-mail sont identiques.";
                    email1Field.setCustomValidity('');
                    email2Field.setCustomValidity('');
                } else {
                    resultMessage.innerText = "Les adresses e-mail sont différentes. Veuillez les corriger.";
                    email1Field.setCustomValidity('Les adresses e-mail doivent être identiques.');
                    email2Field.setCustomValidity('Les adresses e-mail doivent être identiques.');
                }
            }
            </script>
        </div></div></div>
        </div>

        <hr class="mt-6 border-b-1 border-blueGray-300">


        <div class="flex flex-wrap">
          <div class="w-full lg:w-12/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                Address
              </label>
             <textarea  input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" ></textarea>
            </div>
          </div>
        </div>
      
    </form>
        <!--ligne -->
        <hr class="mt-6  mb-2 border-b-1 border-blueGray-300"> 
   
      
 <!-- Buttons -->
<!-- Component: Small primary elevated button -->

<div> <form method="GET" action="{{ route('test2') }}"> @csrf <button id="submitButton" type="submit" class="inline-flex items-center justify-center h-8 gap-2 px-4 text-xs font-medium tracking-wide text-white transition duration-300 rounded shadow-md focus-visible:outline-none justify-self-center whitespace-nowrap bg-emerald-500 shadow-emerald-200 hover:bg-emerald-600 hover:shadow-sm hover:shadow-emerald-200 focus:bg-emerald-700 focus:shadow-sm focus:shadow-emerald-200 disabled:cursor-not-allowed disabled:border-emerald-300 disabled:bg-emerald-300 disabled:shadow-none" >
<span>Suivant</span>
</button>
<script>
  document.getElementById('submitButton').addEventListener('click', function(event) {
      // Empêcher le comportement par défaut du bouton (soumettre le formulaire)
      event.preventDefault();
      
      // Vérifier si tous les champs requis sont remplis
      if (validateForm()) {
          // Si tous les champs sont remplis, soumettre le formulaire

          //document.getElementById('myForm').submit(); APRES 
          
          window.location.href = "{{ route('test2') }}";
      } else {
          // Si des champs sont manquants, afficher un message d'erreur ou effectuer une autre action
          alert("Veuillez remplir tous les champs obligatoires(*).");
      }
  });
  function validateForm() {
      // Récupérer tous les champs du formulaire
      var inputs = document.querySelectorAll('input[required], select[required], textarea[required]');
      
      // Parcourir tous les champs pour vérifier s'ils sont remplis
      for (var i = 0; i < inputs.length; i++) {
          if (!inputs[i].value) {
              // Si un champ est vide, retourner false
              return false;
          }
      }
      // Si tous les champs sont remplis, retourner true
      return true;
  }
</script>
</form>
</div>
<!-- End Small primary elevated button -->
          
    
<footer class="relative  pt-15 pb-6 mt-2">
  <div class="container mx-auto px-4">
   <div class="flex flex-wrap items-center md:justify-between justify-center">
     <div class="w-full md:w-6/12 px-4 mx-auto text-center">
         
         <div class="footer">
           <div>
               <strong>Copyright </strong>FSAC  &copy; 2024
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</footer>
</div>
</section>
</body>
</html>
