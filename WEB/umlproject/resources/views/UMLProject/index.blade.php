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
    <div class="container-fluid acc">
        <img src="images/ensate wite logo.png" alt="logo" />
        <div class="container-fluid header">
            
        </div>
        <div class="row content">
            <p class="text-center fs-1 text-mt-10">
                Bienvenue sur l'application web <strong>ENSA SMS </strong> <br/> de L'École Nationale des Sciences Appliquées
            </p>
            <a href="{{route('login')}}">
                <form method="post"  action="{{route('login')}}">
                @csrf 
            <button class="nav-link"  value="{{$stat[0]}}"  name="source"  >Inscription au cycle préparatoire</button>
            
            </form>
            </a>
            <a href="{{route('login')}}">
            <form method="post"  action="{{route('login')}}">
            @csrf
                <button class="nav-link" value="{{$stat[1]}}"  name="source"  >Inscription au cycle d'ingénieur</button>
                </form>
            </a>
            <a href="{{route('login')}}">
            <form method="post"  action="{{route('login')}}">
            @csrf
                <button class="nav-link"  value="{{$stat[2]}}"  name="source" >Inscription des etudiants de FS</button>
                </form>
            </a>
            <a href="{{route('login')}}">
            <form method="post"  action="{{route('login')}}">
            @csrf
                <button class="nav-link" value="{{$stat[3]}}"  name="source"  >Inscription à la formation doctorale</button>  
                </form>
            </a> 
        </div>
        <div class="row footer"></div>
                   
        </div>
    </div>
    
</body>
</html>
<style>
.acc{
    border-radius: 2px ;
    height: 100vh;
    background-color: #fcfcfc;
    color: #fff;
    display: flex;
    flex-direction: column;
   justify-content: center;
   margin: 0;
    

}

.acc .header{
    background-color: none;
    position: absolute;
    height:100vh;
    width: 99vw;
    opacity: 0.4;
    background-image: url("images/ensa2.png");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
}  
.acc .header img{
    opacity: 1;
}
.acc .content p{
    position: fixed;
    top: 1em;
    opacity: 1;
    z-index: 100 !important;
}
.acc .content{
    position: fixed;
    width: 100vw;
    margin: 0;
    opacity: 1;
    z-index: 20;
    margin-top: 10em;
    background-color: transparent;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.acc img{
    width: 25%;
    position: fixed;
    top: 0.2em;
    left: 0.5em;
    opacity: 1;
    z-index: 10 !important;
    
}
.acc a{
    text-decoration: none;
    font-size: 1.5em;
    text-align: center;
    display: flex;
    justify-content: center;
    
}
.acc button{
 margin-top: 0.5em;
 margin-bottom: 0.8em;
 border: 2px solid #13448C;
 background-color: #13448C;
 padding: 0.5em;
 width: 20em;
 color: #fff;

}

</style>