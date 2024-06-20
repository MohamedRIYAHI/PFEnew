<?php

namespace App\Http\Controllers;
use app\Http\Controllers\StaticController;

use App\Models\User;
use App\Models\Candidat;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class PdfController extends Controller
{
     public function pdf()
     {
      // dd(auth()->id());

      $user = User::findOrFail(auth()->id());  
      $consultation = consultation::findOrFail(auth()->id());  
      


         $data=[
             'title'=>'FORMULAIRE DE PRÉINSCRIPTION ',
             'years'=>  date('Y'),
             'oldyears'=>date('Y')+1,
             'date'=>date('d-m-Y  H:i'),
             'user'=>$user,
             'consultation'=>$consultation
         ];
       $pdf=Pdf::loadView('generate-product-pdf',$data);
         return $pdf->download("$user->nom\_$user->prenom.pdf");
     }
     
    public function fin()
    {
      return view('fin');
    }
           

//  public function pdfin()
//     {
//       $user =User::all();
//       $data=[
//         'title'=>'Funda of web IT',
//         'years'=>date('m/d/y'),
//         'date'=>date('d-m-Y  H:i'),

//         'users'=>$user
       
//       ];
//         $pdf=Pdf::loadView('generate-product-pdf',$data);
//         return $pdf->download("\'$user->nom\'_\'$user->prenom\'.pdf");
//    }


}
