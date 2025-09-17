<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bs.min.css">
    <title>Website SMKN 4 Tasikmalaya</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
    body {
        font-family: 'Poppins', sans-serif;
    }
    </style>


</head>
<body>

    <!-- NAVBAR -->
    <div class="container">
        <div class="row">
            <div class="cols-md-12">
                    <nav class="navbar navbar-expand-lg bg-primary bg-gradient my-4 shadow rounded-3">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#"><img src="img/logosmk.png" alt="Bootstrap" width="50" height="50"></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                    <a class="navbar-brand">SMKN 4 Tasikmalaya</a>
                                    <div class="col-6"></div>
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                                <li class="nav-item"><a class="nav-link {{ request()->is("/") ? "active" : false}}" href="/">Beranda</a></li>
                                                <li class="nav-item"><a class="nav-link {{ request()->is("profil") ? "active" : false}}" href="/profil">Profil</a></li>
                                                <li class="nav-item"><a class="nav-link {{ request()->is("eskul") ? "active" : false}}" href="/eskul">Ekstrakurikuler</a></li>
                                                <li class="nav-item"><a class="nav-link {{ request()->is("galeri") ? "active" : false}}" href="/galeri">Galeri</a></li>
                                                <li class="nav-item"><a class="nav-link {{ request()->is("kontak") ? "active" : false}}" href="/kontak"></a></li>
                                            </ul>
                                        </div>
                        </div>
                    </nav>
            </div>
        </div>