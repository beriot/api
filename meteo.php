<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<head>
    <title>Bee-learning</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.10/css/weather-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/jpg" href="img"/>


    <link rel="stylesheet" href="css/app.css">
    <link rel="shortcut icon" type="image/jpg" href="img/icon.jpg"/>
</head>
<body>
<!-- Header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Bee</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php#lifestyle">Lifestyle</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#hive">Rûche</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#queen">Reine</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#cause">Causes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#gallery">Vidéos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="meteo.php">Météo</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>

<br>
<br>
<br>
<br>

        <section id="app">
             <h1>
                 <span id="ville"></span>

             </h1>
            <i id="wi"></i>
            <h2>
                <span id="temperature"></span> C° (<span id="conditions"></span>)
            </h2>
        </section>


<!-- Footer -->
<footer>

    <script src="app.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</footer>

</body>
</html>
