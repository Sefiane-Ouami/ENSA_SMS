<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>
</head>
<body class="body">

    <div class="container">
        <div class="logo-image">
    <img src="{{asset('images/logo_Ensate.png')}}" alt="Logo" class="logo"  ></div>
</div>

<div class="container">

    <form method="POST" action="{{ route('verification') }}" class="form">
    @csrf
<div class="container">
    <div class="input-1">
        <input type="text" class="email" placeholder="Code apogée ou CNE" name="code"  required autofocus></div>
        <div class="input-1">    <input type="date" class="email" placeholder="Date de naissance" name="datedenaissance" required autofocus></div>
        <div class="input-2">    <button type="submit" class="login">Log In</button></div>
        </div> 
        <input type="text" value="{{$src}}" name="source" class="src" >
    </form>


</div>


</body>
</html>
<style>
    .src{
        display : none ; 
    }
.logo{
   width: 20% !important;  
  }
.logo-image{
    text-align : center ; 
    margin-top : 50px;
}

.input-1{
    background-color:#F9F9F9 ;
    width:500px;
    height : 70px;
    text-align : center;  
    margin : auto ; 
    margin-bottom : 20px;

}
.input-2{
    background-color:#F9F9F9 ;
    width:250px;
    height : 70px;
    text-align : center;  
    margin : auto ; 
    margin-bottom : 20px;

}
.email{
        width:500px;
        height: 70px;
        color : #EEEEEE;
        border-radius : 7px ;
        color : #393E46 ;
        font-size:25px;
        background-color:#F9F9F9 ; 
        border-color : #47597e;
        border-width : 3px;
    
    }
  
    .login{
        width:250px;
        height: 70px;
        color : #EEEEEE;
        background-color:#F9F9F9 ; 
        border-color : #47597E;
        border-radius : 7px ;
        border-width : 3px;
        color : #393E46 ;
        font-size:25px;
    

    }
    .login:hover{
        border-color:#F9f9f9 ; 
        background-color : #47597E ;
        color : #F9F9F9;
        border-style : none ; 
    }
    .form{
    margin-top:60px ;
    text-align : center ; 
}
.container{
        margin :  auto ; 
    }
</style>