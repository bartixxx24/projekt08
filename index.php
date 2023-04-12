<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Projekt6</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md">
            <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LOGO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Strona główna</a>
        <a class="nav-link" href="#">Kursy</a>
        <a class="nav-link" href="#">Darmowe</a>
        <a class="nav-link disabled">Kontakt</a>
      </div>
    </div>
  </div>
</nav>
            </div>
        </div>
    </div>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        header{
            height: 480px;
            overflow: hidden;
            position: relative;
        }
        .imgs{
          width: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            min-height: 100%;
            max-width: 100%;
            opacity: 1;
            animation: slider 15s infinite linear;
        }
        img:nth-child(2){
            animation-delay: 5s;
        }
        img:nth-child(3){
            animation-delay: 10s;
        }
        .h01 {
            position: absolute;
            font-size: 60px;
            color: #ffff;
            background-color: rgba(0, 0, 0, .6);
            padding: 20px 40px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            top: 30%;
            left: 10%;
            animation: txt 15s infinite linear;

        }
        h1:nth-of-type(1){
            left: 5%;
            top: 5%;
        }
        h1:nth-of-type(2){
            animation-delay: 5s;
        }
        h1:nth-of-type(3){
            animation-delay: 10s;
            left: 60%;
            bottom: 5%;
        }
        
        @keyframes slider {
            0% {
                opacity: 0;
            }
            5%{
                opacity: 1;
            }
            33.33%{
                opacity: 1;
            }
            38.33%{
                opacity: 0;
            }
            100%{
                opacity: 0;
            }
        }
        @keyframes txt {
            0% {
                opacity: 0;
            }
            5%{
                opacity: 1;
            }
            33.33%{
                opacity: 1;
            }
            38.33%{
                opacity: 0;
            }
            100%{
                opacity: 0;
            }
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
            <header>
        <img src="img1.jpg" alt="img1" class=imgs>
        <img src="img2.jpg" alt="img2" class=imgs>
        <img src="img3.jpg" alt="img3" class=imgs>
        <div>
        <h1 class="h01">Lorem, ipsum dolor.</h1>
        <h1 class="h01">Lorem, ipsum dolor.</h1>
        <h1 class="h01">Lorem, ipsum dolor.</h1>
      </div>
    </header>
     
            </div>
        </div>

    </div>    

    <div class="container" >
        <div class="row">
                <div class="col text-center box-margin">
                    <h1>Oferta kursów</h1>
                </div>
         </div>
                <div class="row">
                    <div class="col-md text-center box-margin">
                        <div class="card" >
                             <img src="
https://picsum.photos/300/200?random=1
" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">zarejestruj się</h5>
                                    <p class="card-text">Utworz konto by moc korzystac ze wszystkich informacji</p>
                                    <a href="#" class="btn btn-primary">Zarejestruj sie</a>
                                </div>
                        </div>
                    </div>
                
                
                    <div class="col-md box-margin">
                        <div class="card" >
                             <img src="
https://picsum.photos/300/200?random=2
" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                        </div>
                    </div>
                    
                            <div class="col-md box-margin">
                                <div class="card" >
                                 <img src="
https://picsum.photos/300/200?random=3
" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                         </div>
                    
            </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-2 box-margin">
            <div class="card">
  <div class="card-body">
    <h5 class="card-title">Zarejestruj się</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="signup.php" class="card-link">Zarejestruj sie</a>
    
  </div>
</div>
            </div>
            <div class="col-md-4 box-margin ">
            <div class="card">
  <div class="card-body">
    <h5 class="card-title">Zaloguj</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
            <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h2 class="display-5 fw-bold"><h1>Custom jumbotron</h1>
        <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <button class="btn btn-primary btn-lg" type="button">Example button</button>
      </div>
    </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
            <div class="card" style="width: 18rem;">
  <div class="card-header">
    Featured
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
</div>
            </div>
            <div class="col">
            <div class="card" style="width: 18rem;">
  <div class="card-header">
    Featured
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
</div>
            </div>
            <div class="col">

            </div>
        </div>
    </div>
            <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html> 