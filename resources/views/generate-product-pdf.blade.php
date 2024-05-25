<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    

    <div class="">  
        <img src='LOGO-FSAC.jpg' id="" alt="image" style=" max-width: 230px;max-height: 230px;margin-bottom:5px">
      </div>
      <h2>{{ $title }} {{ $oldyears }}-{{ $years }} </h2>
    <table border="">
        <caption> <u> Formation Continue </u></caption>
        <tr>
            <th colspan="2">FILIÈRE DEMANDÉE :</th>
        </tr>
        <tr>
            <td>Filière choix 1:</td>
        </tr>
        <tr>
            <td>Filière choix 2:</td>
        </tr>
        <tr>
            <td>Filière choix 3:</td>
        </tr>
        <br>
        <tr>
            <th colspan="2">INFORMATIONS PERSONNELLES :</th>
        </tr>
        <tr>
            <td>Nom:</td>
        </tr>
        <tr>
            <td>Prénom:</td>
        </tr>
        <tr>
            <td>Date de naissance:</td>
        </tr>
        <tr>
            <td>Lieu de naissance:</td>
        </tr>
        <tr>
            <td>CIN:</td>
        </tr>
        <tr>
            <td>CNE:</td>
        </tr>
        <tr>
            <td>Téléphone portable:</td>
        </tr>
        <tr>
            <td>E-mail:</td>
        </tr>
        <b>Date:{{ $date }}</b>

    </table>
</body>
</html>