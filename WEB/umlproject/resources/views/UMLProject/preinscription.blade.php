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
                <h4 class="user"><i class="fas fa-user-circle"></i>{{$nom }}  {{$prenom}}</h4>
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
                  <legend class="title" style="color: #13448C;">----------------------------------
                                        Les informations d'étudiant
                                        --------------------------------------</legend>
                    <div class="infos">
                        <form class="row g-3"  action="{{ asset(route('ajouterpreinscription' , $id)) }}" method="POST">
                        @csrf
                            <div class="col-md-6">
                              <input type="text" class="form-control" id="inputnom" placeholder="Nom" name="nom" value="{{$nom}}"  >
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="inputprenom" placeholder="Prenom" name="prenom" value="{{$prenom}}">
                            </div>
                            <div class="col-md-6">
                                <input type="date" class="form-control" id="inputdate" placeholder="Date de naissance" name="date_naissance" value="{{$date_naissance}}">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="inputlieu" placeholder="Lieu de naissance" name="lieu_naissance" >
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="inputcin" placeholder="CIN" name="cin" >
                            </div>
                            @if($src != $statEtu)
                            <div class="col-md-6">
                                <select class="form-select" id="inputcin" placeholder="filiere" name="filiere" >
                                    @foreach($filieres as $filiere)
                                   <option value="{{$filiere}}" >{{$filiere }} </option>
                                   @endforeach
                                </select>
                            </div>
                            @endif
                            <div class="col-12">
                              <input type="email" class="form-control" id="inputAddress" placeholder="Address email"  name="email" >
                            </div>
                            <div class="col-12">
                              <input type="tel" class="form-control" id="inputTel" placeholder="Numéro de Téléphone"  name="numero_telephone" >
                            </div>
                            <div class="col-12">
                              <input type="text" class="form-control" id="inputaddress" placeholder="Address "   name="adresse">
                            </div>
                            <div class="col-md-6">
                              <select id="inputState" class="form-select" name="ville">
                                <option selected>Ville d'orogine</option>
                                <option>Zagora</option>
                                <option>Casablanca</option>
                                <option>Fés	</option>
                                <option>Tanger	</option>
                                <option>Marrakech	</option>
                                <option>Salé	</option>
                                <option>Meknès	</option>
                                <option>Rabat	</option>
                                <option>Oujda	</option>
                                <option>Kénitra	</option>
                                <option>Agadir	</option>
                                <option>Tétouan	</option>
                                <option>Témara	</option>
                                <option>Safi	</option>
                                <option>Mohammédia	</option>
                                <option>Khouribga	</option>
                                <option>El Jadida	</option>
                                <option>Béni Mellal	</option>
                                <option>Nador	</option>
                                <option>Taza	</option>
                                <option>Khémisset	</option>
                                <option>laâyoune	</option>
                                <option>Berkane</option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <input type="text" class="form-control" id="inputcode" placeholder="Code postal" name="code_postal">
                            </div>

                            <div class="col-10">
                                <label style="color:#13448C ;">* champ obligatoire</label>
                              </div>
                            <div class="col-2">
                              <button type="submit" class="btn btn-primary">Suivant >></button>
                            </div>
                          </form>
                    </div>
            </div>
        </div>
    </div>

</body>
</html>
<style>
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
    top: 0em;
    left: 18em;
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
