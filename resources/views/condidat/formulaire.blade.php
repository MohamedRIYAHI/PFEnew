
@extends('condidat.formulaire')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire personelle </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.css">

</head>
<body>
    <form action="{{ route("formulaire") }}" method="POST">
        

        <h4>Formulaire personelle </h4>
        <hr>
        <div class="neme-fild">
            <div>
                <label>Nom</label>
                <input type="text">
                <label>*****</label>
                <input type="text">
            </div><br/>
            <div>
                <label>Prénom</label>
                <input type="text">
                <label>*****</label>
                <input type="text">
            </div><br/>
            <div>
                <label>Lieu de naissance</label>
                <input type="text">
                <label>*****</label>
                <input type="text">
            </div><br/>
            <div>
                <div class="container mt-5">
                    <div class="form-group">
                      <label for="datePicker">Date de naissance :</label>
                      <input type="text" class="form-control" id="datePicker" placeholder="Cliquez pour choisir une date">
                    </div>
                  </div> <br/>
                <label>Telephone</label>
                <input type="text">

            </div><br/>
            <div>
                <label>Statut</label> 
                <select name="Statut">
                    <option value="-------"> ------------</option>
                    <option value="Etudiant"> ETUDIANT</option>
                    <option value="Employe">EMPLOYE</option>
                    <option value="Stagiare">STAGIARE</option>
                    <option value="Employe">A LA RECHERCHE D'UN EMPLOI</option>

       
            </select>
            </div><br/>
            <div>
                <label>Sexe</label> 
                <select name="sexe">
                    <option value="----">  </option>
                    <option value="homme"> Homme</option>
                    <option value="femme">Femme</option>
       
            </select>
                 

                <label>CIN</label>
                <input type="text">

            </div><br/>
        </div>
        <label>Adresse email:</label><br/>
        <input type="text">  <br/>
        <label> Confirmer votre adresse email:</label><br/>
        <input type="text"><br/>
        <input type="submit" value="S'inscrire"> 
    </form>
    


   
    
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
</body>
</html> 