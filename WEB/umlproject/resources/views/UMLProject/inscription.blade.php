<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootsrtap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4066fb20b1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Bootsrtap -->
    <title>ENSA SMS</title>
</head>
<body >
    <div class="container-fluid Bac">
        <div class="row">
            <div class="col-lg-4 nav Navbar">
                <h4 class="user"><i class="fas fa-user-circle"></i>{{$nom }} {{$prenom}}</h4>
                <a href="{{ asset( route('acceuil' , $id))}}"  >
                <button class="nav-link" >Accueil</button>
                </a>
                @if($src == $src_etu)
                 <a  href="{{ asset ( route('candidature',$id))}}"  >
                <button class="nav-link" >Candidature</button>
                </a>
                 @else
                <a  href="{{ asset ( route('preinscription',$id))}}"  >
                <button class="nav-link" >Préinscription</button>
                </a>
                @endif
                 <a href="{{ asset( route('inscription',$id))}}"  >
                 <button class="nav-link active" >Inscription</button>
               </a>
                <a href="{{ asset( route('login'))}}"  >
                <button class="nav-link"> <i class="fas fa-sign-out-alt"></i>Log out</button>
               </a>
            </div>
            <div class="col-lg-8 content">
                <form method="POST" action="{{ route('ajouterfiles' , $id) }}"  >
                @csrf
                <div class="file">
                    <label for="Bac">Votre carte nationale</label>
                    <input type="file" id="Bac" name="copie_cin" ><i class="fas fa-upload"></i>
                </div>
                <div class="file">
                    <label for="file2">Votre Baccalauréat</label>
                    <input type="file" id="file2" name="bac"><i class="fas fa-upload"></i>
                </div>
                <div class="file">
                    <label for="file3">Votre acte de naissance</label>
                    <input type="file" id="file3" name="acte_naissance"><i class="fas fa-upload"></i>
                </div>
                <div class="file">
                    <label for="file4">Réçu de préinscription</label>
                    <input type="file" id="file4" name="recu_preinscription"><i class="fas fa-upload"></i>
                </div>
                <div class="envoyer">
                     <button class="btn mr-10 ">Envoyer et Terminer</button>
                </div>


</form>
            </div>
        </div>
    </div>

</body>
</html>
<style>
    .id_etudiant{
        display : none ;
    }
.container{
    border: 1px solid  #13448C;
    border-radius: 2px ;
    height: 100vh;

}
.Navbar{
    color: #fff;
    background-color: #13448C;
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 100vh;
}
.Navbar h4{
    font-size: 1.8em;
}
.Navbar a{
    text-decoration: none;
    font-size: 1.8em;
    text-align: center;
    border-bottom: 1px solid #fff;
    display: flex;
    justify-content: center;
}
.Navbar  button{
    background-color: #13448C;
    color: #fff;
    text-align: center;
    margin-top: 2em;
    border: none;
    padding-bottom: 0.5em;

}
.Navbar button:last-of-type{
    border-bottom: none;
}
.Navbar .fas{
    background-color: #fff;
    border-radius: 50%;
    color: #13448C;
    margin-left: 0.5em;
    margin-right: 0.5em;
}
.content{
    background-color: #ccc;
    color: #333;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.content .file{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: left;
}

.envoyer{
    display: flex;
    justify-content: center;
    align-items: center;
}
.content input{
 margin-top: 0.5em;
 margin-bottom: 0.8em;
 border: 2px solid #13448C;
 font-size: 1.5em;
 padding: 0.5em;
 width: 100%;
 color: #333;

}
.content label{
    font-size: 1.8em;
    color: #333;
}
.content .btn{
    border: 1px solid #13448C;
    color: #13448C;
    font-size: 1.2em;
    padding : 0.6em;
    width: 60%;
}
.content .btn:hover{
   background-color : #13448C;
   color : #fff;
}
.content .fas{
    position: absolute;
    color: #13448C;
    font-size: 2em;
    margin-top: 0.8em;
    right: 7.3em;
    font-weight: bolder;
}
.active{
    color: #13448c;
}
</style>
