<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Etudiant ;
use App\Models\Candidature ;
use App\Models\Inscription ;
use App\Models\Preinscription ;
Use Carbon\Carbon ;
use App\Post;
use PDF;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
class StaticArray
{

    
    public static $status_etudiant = [
        'Bachelier' , 
        'Etudiant CNC' , 
        'BAC+3' , 
        'Bac+5' 
    ];

    public static $status = [
      'Complete' ,
      'Incomplete'

    ];

    public static $filiere_ingenieur = [
        'Génie Informatique' , 
        'Génie Mecatronique' , 
        'Génie des Systèmes de Télécommunications et Réseaux' ,
        'Supply Chain Management' ,
        'Génie Civil'
    ];

    public static $filiere_preparatoire = [
        'Premiere annee preparatoire'
    ];

    public static $etat_candida = [
        'non' , 
        'oui'
    ] ;

    


}
class UMLController extends BaseController
{
    
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $stat = StaticArray::$status_etudiant; 
        return view('UMLProject.index' ,['stat'=>$stat]);
    }


    public function verification(Request $req){

        $code = $req->code ; 
        $date_naissance = $req->datedenaissance ; 
        $sta = StaticArray::$status ; 
        $etudiant = Etudiant::where('cne', $code)->where('date_naissance',$date_naissance)->first();
        if($etudiant == null){
            return redirect()->route('login');
        }else{
            $nom =  $etudiant['nom'] ; 
            $prenom = $etudiant['prenom'] ;
            $id = $etudiant['id'];
            if( $etudiant['status'] == null){
             $etudiant['status'] = $req->source;
            $etudiant->save();}
         return redirect()->route('acceuil' , $id);
    }
    }
    public function acceuil($id){
    $source = StaticArray::$status_etudiant ;
    $etudiant = Etudiant::find($id) ;
    $nom = $etudiant['nom'];
    $prenom = $etudiant['prenom'];
    $src_etu = $source[2];
    $src = $etudiant['status'] ; 
    return view('UMLProject.acceuil' ,['id'=>$id , 'nom'=>$nom   , 'prenom'=>$prenom , 'src'=>$src , 'src_etu'=>$src_etu]);

    }

    public function login(Request $req){
        $src = $req->source ; 
        return view('UMLProject.login' , ['src'=>$src ] );
    }

    public function inscription($id){
    
        $etudiant = Etudiant::where('id', $id)->first();
        $source = StaticArray::$status_etudiant ;
        $nom = $etudiant['nom'];
        $prenom = $etudiant['prenom'];
        $src_etu = $source[2];
        $src = $etudiant['status'] ; 
        return view('UMLProject.inscription' , ['id'=>$id , 'nom'=>$nom , 'prenom'=>$prenom , 'src'=>$src , 'src_etu'=>$src_etu]);
    }
    
public function ajouterfiles(Request $req , $id){
    $inscription = new Inscription ; 
    $etudiant = Etudiant::find($id) ;
    $inscription->etudiant_id = $id ; 
    $inscription->recu_preinscription = $req->recu_preinscription ; 
    $inscription->copie_cin = $req->copie_cin ; 
    $inscription->acte_naissance = $req->acte_naissance ;
    $inscription->bac = $req->bac ; 
    $inscription->traite = "non" ; 
    $inscription->save();

    return redirect()->route('acceuil' , $id);}
    
 

   public function preinscription(Request $req , $id){

       $sta = StaticArray::$status ; 
       $stat = StaticArray::$status_etudiant ; 
       $filieres = StaticArray::$filiere_ingenieur ; 
        
       

       $etudiant = Etudiant::find($id) ;
       $src = $etudiant['status'];
       $nom =  $etudiant['nom'] ; 
       $prenom = $etudiant['prenom'] ;
       $date_naissance = $etudiant['date_naissance'] ; 
       $src_etu = $stat[2];
       $check_preinscription = Preinscription::where('etudiant_id' , $id)->where('status' , $sta[0])->first();
      $statEtu = $stat[0] ;
      
        if($check_preinscription == null ){

        return view('UMLProject.preinscription' , ['filieres'=>$filieres , 'statEtu'=>$statEtu  , 'src'=>$src ,'nom'=>$nom , 'id'=>$id  ,'prenom'=>$prenom , 'date_naissance'=>$date_naissance]); }
        
        else{
          
            return view('UMLProject.recu' , ['nom'=>$nom , 'prenom'=>$prenom ,'id'=>$id , 'src'=>$src ,'src_etu'=>$src_etu ]);

        }


   }

   public function ajouterpreinscription(Request $req , $id){

    $source = StaticArray::$status_etudiant ; 
    $filiere = StaticArray::$filiere_preparatoire ; 
    $etudiant = Etudiant::find($id) ;
      $nom = $etudiant['nom'] ; 
      $prenom = $etudiant['prenom'];
    $etudiant['lieu_naissance'] = $req->lieu_naissance ; 
    $etudiant['email'] = $req->email ; 
    $etudiant['numero_telephone'] =$req->numero_telephone ;
    $etudiant['adresse'] = $req->adresse ;
    if($etudiant['status'] == $source[0]){

        $etudiant['filiere'] =$filiere[0]   ; 
    }else{
        $etudiant['filiere'] =$req->filiere  ; 
    }
    $etudiant['cin']=$req->cin ; 
    $etudiant['ville'] = $req->ville ; 
    $etudiant['code_postal'] = $req->code_postal ;
    $etudiant->save();
    return view('UMLProject.preinscriptionsuivant' , ['nom'=>$nom , 'prenom'=>$prenom , 'id'=>$id]);


       
   }

   public function preinscriptionsuivant(Request $req , $id){
    $source = StaticArray::$status_etudiant ; 
    $etudiant = Etudiant::find($id) ;
     
    if($etudiant['status'] == $source[0]  || $etudiant['status'] == $source[1] ){

    $apogee = (( (int) Carbon::now()->format('Y')) % 100 )*1000000 + $id;
}

$etudiant->date_inscription  =Carbon::now()->format('Y-m-d');
$etudiant->code_apogee = $apogee ;
$etudiant->nom_prenom_pere =  $req->nom_prenom_pere ;
$etudiant->nom_prenom_mere = $req->nom_prenom_mere ;
$etudiant->cin_pere = $req->cin_pere ;
$etudiant->cin_mere = $req->cin_mere ; 
$etudiant->numero_telephone_pere = $req->numero_telephone_pere;
$etudiant->numero_telephone_mere =$req->numero_telephone_mere;
$etudiant->save();

$pre = new Preinscription ;
$sta = StaticArray::$status ; 



$pre['etudiant_id'] = $id ; 
$pre['status'] = $sta[0];
$pre->save();
    return redirect()->route('recupreinscription' , ['id'=>$id]);
    
   }


   public function recupreinscription($id){
    $etudiant = Etudiant::find($id) ;
     
    $nom = $etudiant['nom'] ; 
    $prenom = $etudiant['prenom'] ; 
    $cne = $etudiant['cne'];
    $cin= $etudiant['cin'];
    $date_naissance = $etudiant['date_naissance'] ; 
    $adresse  = $etudiant['adresse'] ; 
    $numero_telephone = $etudiant['numero_telephone'] ; 
    $date = Carbon::now()->format('d-m-Y');


    $contxt = stream_context_create([
        'ssl' => [
            'verify_peer' => FALSE,
            'verify_peer_name' => FALSE,
            'allow_self_signed' => TRUE,
        ]
    ]);
   $pdf = PDF::loadView('UMLProject.recupreinscription',['nom'=>$nom ,'date'=>$date, 'prenom'=>$prenom , 'cne'=>$cne , 'cin'=>$cin , 'date_naissance'=>$date_naissance , 'adresse'=>$adresse ,'numero_telephone'=>$numero_telephone ])->setOptions([
    "defaultFont" => "sans-serif"
]);
   return $pdf->download('recu.pdf') ; 


   }
   
   public function recu(){
       return view('UMLProject.recu',);
   }
  
public function candidature($id){
    $etudiant = Etudiant::find($id) ;
    $src = $etudiant['status'];
    $nom =  $etudiant['nom'] ; 
    $prenom = $etudiant['prenom'] ;
    $date_naissance = $etudiant['date_naissance'] ; 
   $candida  = Candidature::where('etudiant_id' , $id)->first();
   if($candida == null){
    $filieres = StaticArray::$filiere_ingenieur ; 
    return view('UMLProject.candidatureFs' , ['id'=>$id , 'filieres'=>$filieres , 'nom'=>$nom  , 'prenom'=>$prenom  , 'date_naissance'=>$date_naissance ]);}else{
        return view('UMLProject.candidaturesuivant' , ['nom'=>$nom , 'prenom'=>$prenom , 'id'=>$id]);
    }
}


public function ajoutercandidature(Request $req , $id){

    $source = StaticArray::$status_etudiant ; 
    $filiere = StaticArray::$filiere_preparatoire ; 
    $candidature = new Candidature ; 
    
    $etudiant = Etudiant::find($id) ;
      $nom = $etudiant['nom'] ; 
      $prenom = $etudiant['prenom'];
    $etudiant['lieu_naissance'] = $req->lieu_naissance ; 
    $etudiant['email'] = $req->email ; 
    $etudiant['numero_telephone'] =$req->numero_telephone ;
    $etudiant['adresse'] = $req->adresse ;
    $etudiant['filiere'] =$req->filiere  ; 
    $etudiant['cin']=$req->cin ; 
    $etudiant['ville'] = $req->ville ; 
    $etudiant['code_postal'] = $req->code_postal ;
    $etudiant['code_apogee'] = (( (int) Carbon::now()->format('Y')) % 100 )*1000000 + $id;
    $etudiant->save();
    $candidature['etudiant_id'] =$id ;
    $candidature['diplome'] = $req->diplome ;
    $candidature['releve_notes'] =$req->releve_notes  ;
    $candidature['etat_candidature']='non';
    $candidature->save();
    return view('UMLProject.candidaturesuivant' , ['nom'=>$nom , 'prenom'=>$prenom , 'id'=>$id]);


       
}


}