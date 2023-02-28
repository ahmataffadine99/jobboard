<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JobBoard</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/style.css')}}">
  </head>
 
 
  <!-- body-->
  
 
 <body>
    <!-- nav bar -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid headerBar">
          <a class="navbar-brand" href="#">Job Board</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Acceuil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('offres')}}">Offres</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Administration</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
            <span class="navbar-text">
            
            </span>
          </div>
        </div>
     
    </nav>




 <!--  centre  -->
   
        <div class="head">
            <h1>Qui sommes nous?</h1>
            <p>Le numero un des offres inline!</p>
        </div>
        
 
    

    
   

<script  src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<!-- <div class="card text-center footer"> 
      <div class="card-header">
      Qui sommes nous?
    
      </div>
      <div class="card-body">
       
        <p class="card-text"> Le numero un des offres inline!</p>
        
      </div>
      <div class="card-footer text-muted">
      Copyrigth 2022 ! Epitech Technology
      14 rue le Kremlin Bicetre
      </div>
  </div> -->
  <!-- <footer class="footer navbar-dark bg-dark" > -->

<!-- <p class="textFooter">Copyrigth 2022 ! Epitech Technology</p> <br>
    14 rue le Kremlin Bicetre 


</footer > -->
  </body>
  
  
  <footer class=" navbar-dark bg-dark">
        <div>
        Copyrigth 2022 ! Epitech Technology
        14 rue le Kremlin Bicetre
        </div>
 </footer>
  

</html>