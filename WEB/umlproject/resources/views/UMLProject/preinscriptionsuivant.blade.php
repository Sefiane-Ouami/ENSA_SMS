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
                <h4 class="user"><i class="fas fa-user-circle"></i>  {{$nom}} {{$prenom}}</h4>
                <a href="{{ asset( route('acceuil' , $id))}}"  >
                <button class="nav-link" >Accueil</button> 
                </a>
                <a  href="{{ asset ( route('preinscription',$id))}}"  >
                <button class="nav-link" >Préinscription</button>
                </a>
                 <a href="{{ asset( route('inscription',$id))}}"  >
                 <button class="nav-link active" >Inscription</button>
               </a> 
                <a href="{{ asset( route('login'))}}"  >
                <button class="nav-link"> <i class="fas fa-sign-out-alt"></i>Log out</button>
               </a>
            </div>
            <div class="col-lg-8 content">
                  <legend class="title" style="color: #13448C;">--------------------------------------
                                        Les informations des parents
                                        --------------------------------------</legend>
                    <div class="infos">
                        <form class="row g-3"  action="{{ route('preinscriptionsuivant' , $id) }}" method="POST">
                        @csrf
                            <div class="col-md-6">
                              <input type="text" class="form-control" id="inputnom" placeholder="Nom et Prénom du pere" name="nom_prenom_pere"  >
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="inputprenom" placeholder="Nom et Prénom de la mere" name="nom_prenom_mere" >
                            </div>
                            <div class="col-md-6">
                            <input type="text" class="form-control" id="inputprenom" placeholder="CIN du pere" name="cin_pere" >
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="inputlieu" placeholder="CIN de la mere" name="cin_mere" >
                            </div>
                            <div class="col-md-6">
                            <input type="text" class="form-control" id="inputprenom" placeholder="Numero du telephone du pere" name="numero_telephone_pere" >
                            </div>
                            
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="inputlieu" placeholder="Numero du telephone de la mere" name="numero_telephone_mere" >
                            </div>
                            
                              <button type="submit" class="btn btn-primary">Terminer</button>
                            </div>
                          </form>
                    </div>
            </div>   
        </div>
    </div>
    
</body>
</html>
<style>
    #inputapogee{
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
.content .title{
    position: fixed;
    top: 1em;
    left: 22em;
}
.content input , .content select{
    border: 1px solid #13448C;
    padding: 1em;
}


.content .fas{
   
    color: #13448C;
    font-size: 4em;
    font-weight: bolder;
    margin-top: 1em;
    transform: rotate(180deg)
}

</style>
               