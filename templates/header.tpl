<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1674823217.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Climbing</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       
            <div class="container-fluid">
            <a class="navbar-brand" href=""><i class="fa-solid fa-mountain fs-2"></i></a>
            <h1 class='link-light '>THE NEXT CLIMB</h1>
              
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                {if !isset($smarty.session.USER_ID)} 
                  <li class="nav-item"><a class="nav-link link-light" aria-current="page" href="login">Login</a></li>
                {else} 
                  <li class="nav-item ml-auto"><a class="nav-link link-light" aria-current="page" href="logout">Logout ({$smarty.session.USER_EMAIL})</a></li>
                {/if}
                
                
                <li class="nav-item"><a class="nav-link link-light" aria-current="page" href="categories">Categories</a></li>
                <li class="nav-item"><a class="nav-link link-light" aria-current="page" href="products">Products</a></li>
                
                </ul>
              </div>
            </div>
          </nav>
      
    </header>
   
   

    <!-- inicio main container -->
    <main class="container">
