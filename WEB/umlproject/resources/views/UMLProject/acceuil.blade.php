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
                <h4 class="user"><i class="fas fa-user-circle"></i>{{$nom}} {{$prenom}} </h4>
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
                <div class="row">
                    <img src="{{asset("images/ensate wite logo.png")}}" class="logo" alt="ensa tetouan" />

                 </div>
                  <div class="row">
                          <img src="{{asset("images/ensa back.jpg")}}" class="ensa" alt="ensa tetouan" />
                  </div>
                  <div class="row">
                      <p class="text-center fs-5 desc">
                        Créée en Septembre 2008, l’École Nationale des Sciences Appliquées de Tétouan membre du réseau des Écoles Nationales des Sciences Appliquées, est un établissement public à caractère scientifique culturel et professionnel, instauré pour être une école d’ingénieurs de haut niveau.

                        L’école a pour vocation principale de former des ingénieurs d’état rapidement opérationnel, particulièrement adaptable aux évolutions de la technologie et aux mutations de la société. Elle offre à ses étudiants une insertion professionnelle, à travers une pédagogie de l’autonomie et une adaptation technologique transdisciplinaire orientée vers l’innovation.                     </p>
                  </div>
                  <!-- <img src="{{asset("images/animation.gif")}}" class="pig" alt="ensa tetouan" />  -->
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


.content .ensa{
    margin-top: 3em;
    width: 30em;
}
.content .desc{
    margin-top: 1em;
   font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    text-align: justify;
    text-justify: inter-word;
}
.content .logo{
    width: 25%;
    position: fixed;
    top: 0.2em;
    left: 28em;
}
.pig {
  position: fixed;
  left:0%; bottom:0%;
  animation: myfirst 5s linear 1s infinite ;
}

@keyframes myfirst {
  0%   {left:0%; bottom:0%;}
  10%   {left:10%; bottom:10%;}
  20%   {left:20%; bottom:20%;}
  30%   {left:30%; bottom:30%;}
  40%   {left:40%; bottom:40%;}
  50%  {left:50%; bottom:50%;}
  60%  {left:60%; bottom:60%;}
  70%  {left:70%; bottom:70%;}
  80% {left:80%; bottom:80%;}
  90% {left:90%; bottom:90%;}
  95% {left:95%; bottom:90%;}
  100% {right:0%; bottom:100%;}
}
</style>
