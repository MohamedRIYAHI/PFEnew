
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="style.css">
    <style>
        p{
            position: absolute;
            right: 0;

        }
        .image{
            position: absolute;
            right: 0;
            top: 0;}
        h3{
   text-align: center;
            
        }    
td{
   padding-left: 30px;
}
th{
    padding-bottom: 10px;
}
    </style>
</head>
<body>
    
    <div class="all">
        <div class="container">
           <div class="top">
                <div class="logo">
                    <img src='LOGO-FSAC.jpg' id="" alt="image" style=" max-width: 230px;max-height: 230px;margin-bottom:5px">
                </div>
                <div class="image" >
                    <img src="prfl.png" width="150" height="160" alt="">
                </div>
             </div> <br><br><br><br><br><br>
             <h3  class="titre"> {{ $title }} {{ $years }}-{{ $oldyears }} </h3>
                  <h3> Formation Continue</h3>
             <div class="body">
                <table class="styled-table">
                    <tr>
                       <th><u>FILIÈRE DEMANDÉE :</u></th>
                    </tr>
                    <tr class="c2">
                        <td> <span class="nn">Filière choix 1:  </span> </td>
                        <td>Filière1</td>
                    </tr>
                    <tr class="c2">
                        <td><span class="nn">Filière choix 2 :</span></td>
                        <td>Filière2</td>

                        <td></td>
                    </tr>
                    <tr class="c2">
                        <td><span class="nn">Filière choix 3 :</span></td>
                        <td>Filière3</td>
                        <td></td>
                    </tr>
                </table>
                <br>
                <br>
                <table class="styled-table">
                    <tr>
                        <th> <u>INFORMATIONS PERSONNELLES :</u></th>
                    </tr>
                    <tr>
                        <td><span >Nom :</span></td>
                        <td>FELLAH</td>
                    </tr>
                    <tr>
                        <td><span >Prénom : </span></td>
                        <td>Abdelilah</td>
                    </tr>
                    <tr>
                        <td><span >Date de naissance :</span></td>
                        <td>22/07/2002</td>
                    </tr>
                    <tr>
                        <td><span >Lieu de naissance :</span></td>
                        <td>CASA</td>
                    </tr>
                    <tr>
                        <td><span >CIN :</span></td>
                        <td>BB11223</td>
                    </tr>
                    <tr>
                        <td><span >CNE :</span></td>
                        <td>R11223344556</td>
                    </tr>
                    <tr>
                        <td><span >Télephone :</span></td>
                        <td>0699999999</td>
                    </tr>
                    <tr>
                        <td><span >Adresse email :</span></td>
                        <td>abdelilah@gmail.com</td>
                    </tr>
                    
                </table>
                <br><br><br><br><br><br><br><br>
         
                    
                     <p>  Date:{{ $date }}  </p>
                   
                
            </div>
        </div>
    </div>
</body>
</html>