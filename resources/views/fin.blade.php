<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">

    <title>Pré-inscription</title>
</head>
<body class="h-screen  flex items-center justify-center" style="background: #edf2f7;">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.css">
    <style>
        footer{
            background: none repeat scroll 0 0 white;
         border-top: 1px solid #e7eaec;
         bottom: 0;
         left: 0;
         padding: 10px 20px;
         position: absolute;
         right: 0; }
    
        .ibox {
    clear: both;
    margin-bottom: 25px;
    margin-top: 0;
    padding: 0;}
     .col-sm-12{
       position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;}
      .ibox-content {
        background-color: #ffffff;
    color: inherit;
    padding: 15px 20px 20px 20px;
    border-color: #e7eaec;
    border-image: none;
    border-style: solid solid none;
    border-width: 1px 0;
    clear: both;}
    .center-content {
    margin-top: 20px;
    margin-bottom: 0px;
    display: flex;
    justify-content: center;
}

    
    strong {
    font-weight: 700;
}
        
    </style>
    
<section class=" py-1 bg-blueGray-50" >
<div class="wrapper wrapper-content " style="padding-top:90px">
    <div class="row justify-between items-center">
<div class="col-sm-12">
    <div class="ibox float-e-margins">
    <div class="ibox-content" style="border-width:0px 0px;padding-top:30px">
    <div class="row " style="text-align: center; justify-between items-center">
    
    <strong> Votre Pré-inscription en ligne est bien enregistrée. Pour qu'elle soit définitive   veuillez imprimer le formulaire de pré-inscription et déposer votre dossier complet auprès de votre établissement muni des pièces justificatives.
        <br>
        Avant la date limite de pré-inscription vous pouvez toujours modifier votre dossier de candidature en utilisant votre code de modification :
        <div class="form-group centre-content " >
        <form  method="GET" action="{{ route('pdf') }}" >@csrf  <button id="submitButton" class="inline-flex items-center justify-center h-8 gap-2 px-4 text-xs font-medium tracking-wide text-white transition duration-300 rounded shadow-md focus-visible:outline-none justify-self-center whitespace-nowrap bg-emerald-500 shadow-emerald-200 hover:bg-emerald-600 hover:shadow-sm hover:shadow-emerald-200 focus:bg-emerald-700 focus:shadow-sm focus:shadow-emerald-200 disabled:cursor-not-allowed disabled:border-emerald-300 disabled:bg-emerald-300 disabled:shadow-none" >
        <a href="" class="btn btn-warning" style="padding: 50px">
           <i class="fas fa-file-pdf"></i>
           Télécharger Formulaire <b>PDF</b>
        </a>
       </div>
    </strong>
     </div>
    </div>
</form>
</div></div></div></div></div></div>
    <footer>
     <strong>Copyright </strong>FSAC  &copy; 2024
 </footer>
</section>
</body>
</html>