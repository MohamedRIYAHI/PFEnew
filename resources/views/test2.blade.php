
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <title>Pré-inscription</title>

</head>
<body class="h-screen  flex items-center justify-center" style="background: #edf2f7;">

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
            2. Formations académiques  
        </h6>
        <button class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button"> <form method="GET" action="">@csrf 
          <a href="{{ route('/') }}">
          Accueil
          </a>
        </button>
      </div>
    </div>
    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
      <form>
         <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
            Formations académiques     
           </h6>


         <div class="flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
             <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
               
              <h2>Année du baccalauréat (*)</h2>
            </label>
            <select id="annees-select" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
<option value="">-------------</option>
              <script>
                document.addEventListener("DOMContentLoaded", function() {
                  var anneeActuelle = new Date().getFullYear();
                  var anneeDebut = 1980;
                  var selectAnnees = document.getElementById("annees-select");
      
                  for (var annee = anneeActuelle -1; annee >= anneeDebut; annee--) { // Boucle décroissante
                    var optionAnnee = document.createElement("option");
                    optionAnnee.value = annee;
                    optionAnnee.textContent = annee;
                    selectAnnees.appendChild(optionAnnee);
                  }
                });
              </script>
              </select>
             </label>
           </div>
         </div>
         <div class="w-full lg:w-6/12 px-4">
          <div class="relative w-full mb-3">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="id_sexe">
                  Dernier diplôme (*)
              </label>
              <div class="col-sm-12">
                  <div class="form-group">
                      <select name="diplome" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" required id="id_sexe" onchange="autreDiplomeSelected(this)">
                          <option value="" selected>--------------</option>
                          <option value="DEUG">DEUG</option>
                          <option value="DUT">DUT</option>
                          <option value="BTS"> BTS</option>
                          <option value="DTS">DTS</option>
                          <option value="LICENCE">LICENCE</option>
                          <option value="MASTER">MASTER</option>
                          <option value="AUTRE">AUTRE</option>
                      </select>
                  </div>
              </div>
          </div>
          <div id="autreDiplomeField" style="display: none;" class="relative w-full mb-3">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="autre_diplome_input">
                  Autre Dernier diplôme (*)
              </label>
              <div class="col-sm-12">
                  <div class="form-group">
                      <input type="text" id="autre_diplome_input" name="autre_diplome" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Entrez votre diplôme" required>
                  </div>
              </div>
          </div>
      </div>
      
      <script>
          function autreDiplomeSelected(selectElement) {
              var autreDiplomeField = document.getElementById("autreDiplomeField");
              var autreDiplomeInput = document.getElementById("autre_diplome_input");
              if (selectElement.value === "AUTRE") {
                  autreDiplomeField.style.display = "block";
                  autreDiplomeInput.required = true;
              } else {
                  autreDiplomeField.style.display = "none";
                  autreDiplomeInput.required = false;
              }
          }
      </script>
      



      <div class="w-full lg:w-6/12 px-4">
        <div class="relative w-full mb-3">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="id_">
                Série du baccalauréat (*)
            </label>
            <div class="col-sm-12">
                <div class="form-group">
                    <select name="serie_bac" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" required id="id_serie" onchange="autreSerieSelected(this)">
                      @php
                        
                      @endphp
                      <option value="" selected>--------------</option>
                      @foreach ($seriebacs as $seriebac)
                        <option value="{{ $seriebac }}">{{ $seriebac }}</option>
                        @endforeach
                        <option value="AUTRE" >AUTRE</option>
                      </select>
                </div>
            </div>
        </div>
        <div id="autreSerieField" style="display: none;" class="relative w-full mb-3">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="autre_serie_input">
                Autre Série du Baccalauréat (*)
            </label>
            <div class="col-sm-12">
                <div class="form-group">
                    <input type="text" id="autre_serie_input" name="autre_serie_bac" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Entrez votre série" required>
                </div>
            </div>
        </div>
    </div>
    <script>
      var autreSerieField = document.getElementById("autreSerieField");
      var autreSerieInput = document.getElementById("autre_serie_input");
        function autreSerieSelected(selectElement) {
          document.getElementById
          if (selectElement.value === "AUTRE") {
              autreSerieField.style.display = "block";
              autreSerieInput.required = true;
          } else {
              autreSerieField.style.display = "none";
              autreSerieInput.required = false;
          }
        }
    </script>
    
    
    <div class="w-full lg:w-6/12 px-4">
      <div class="relative w-full mb-3">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="id_sexe">
              Spécialité du dernier diplôme (*)
          </label>
          <div class="col-sm-12">
              <div class="form-group">
                  <select name="specialite_dernier_diplome" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" required id="" onchange="autreSpecialiteSelected(this)">
                      <option value="" selected>--------------</option>
                      <option value="ECONOMIE">ECONOMIE</option>
                      <option value="GESTION">GESTION</option>
                      <option value="COMMERCE">COMMERCE</option>
                      <option value="DTS">DTS</option>
                      <option value="SCIENTIFIQUE">SCIENTIFIQUE</option>
                      <option value="LETTRE">LETTRE</option>
                      <option value="AUTRE">AUTRE</option>
                  </select>
              </div>
          </div>
      </div>
      <div id="autreSpecialiteField" style="display: none;" class="relative w-full mb-3">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="autre_specialite_input">
              Autre Spécialité du dernier diplôme (*)
          </label>
          <div class="col-sm-12">
              <div class="form-group">
                  <input type="text" id="autre_specialite_input" name="autre_specialite_diplome" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Entrez votre spécialité" required>
              </div>
          </div>
      </div>
  </div>
  
  <script>
    var autreSpecialiteField = document.getElementById("autreSpecialiteField");
    var autreSpecialiteInput = document.getElementById("autre_specialite_input");
      function autreSpecialiteSelected(selectElement) {
          if (selectElement.value === "AUTRE") {
              autreSpecialiteField.style.display = "block";
              autreSpecialiteInput.required = true;
          } else {
              autreSpecialiteField.style.display = "none";
              autreSpecialiteInput.required = false;
          }
      }
  </script>
  
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                Moyenne du baccalauréat (*)
              </label>
              <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
             <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
               
              <h2>Année du dernier diplôme(*)</h2>
            </label>
            <select id="annees-select1" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
              <option value="">-----------</option>
              <script>
                document.addEventListener("DOMContentLoaded", function() {
                  var anneeActuelle = new Date().getFullYear();
                  var anneeDebut = 1980;
                  var selectAnnees = document.getElementById("annees-select1");
      
                  for (var annee = anneeActuelle; annee >= anneeDebut; annee--) { // Boucle décroissante
                    var optionAnnee = document.createElement("option");
                    optionAnnee.value = annee;
                    optionAnnee.textContent = annee;
                    selectAnnees.appendChild(optionAnnee);
                  }
                });
              </script>
              </select>
           </div>
         </div>

       </div>
       



          
          <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4">
              <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                  <div class="col-sm-12">
                      <div class="form-group" style="">
                          <label>Mention du baccalauréat (*)</label>
                          <select name="sexe" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"  required id="id_sexe">
  <option value="" selected>--------------</option>
  <option value="">PASSABLE</option>
  <option value="">ASSEZ BIEN</option>
  <option value=""> BIEN </option>
  <option value="">TRÈS BIEN</option>
  </select>                      
                      </div>
                  </div>
                </label>
              </div>
            </div>
          
            <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Nom d'établissement du dernier diplôme (*)
                  </label>
                  <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
                </div>
              
              </div class='mb-2'>
                <fieldset>
                    <legend>Votre CV</legend>
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        <input type="file" name="fichier"  class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
                    </form>
                </fieldset>
      
        </div>
        </div>

        <hr class="m-1 mb-2 border-b-1 border-blueGray-300">
 <!-- Buttons -->
<!-- Component: Small primary elevated button -->
<div class=" flex items-center justify-between p-2">
<button onclick="window.history.back()" class="inline-flex items-center justify-center h-8 gap-2 px-4 text-xs font-medium tracking-wide text-white transition duration-300 rounded shadow-md focus-visible:outline-none justify-self-center whitespace-nowrap bg-emerald-500 shadow-emerald-200 hover:bg-emerald-600 hover:shadow-sm hover:shadow-emerald-200 focus:bg-emerald-700 focus:shadow-sm focus:shadow-emerald-200 disabled:cursor-not-allowed disabled:border-emerald-300 disabled:bg-emerald-300 disabled:shadow-none" >

    <span>Précédent</span>
  </button>
<button class="inline-flex items-center justify-center h-8 gap-2 px-4 text-xs font-medium tracking-wide text-white transition duration-300 rounded shadow-md focus-visible:outline-none justify-self-center whitespace-nowrap bg-emerald-500 shadow-emerald-200 hover:bg-emerald-600 hover:shadow-sm hover:shadow-emerald-200 focus:bg-emerald-700 focus:shadow-sm focus:shadow-emerald-200 disabled:cursor-not-allowed disabled:border-emerald-300 disabled:bg-emerald-300 disabled:shadow-none" class="finish-button">
  <span>Terminer</span>
</button>
</div>

<!-- End Small primary elevated button -->
      
  <footer class="relative  pt-8 pb-6 mt-2">
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
