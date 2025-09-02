<!DOCTYPE html>
<html>
<head>
    <title>Świat ziół</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top border-bottom">
  <div class="container">
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
      <div class="offcanvas-body">
        <ul class="navbar-nav flex-grow-1 justify-content-between">
          <li class="nav-item"><a class="nav-link" href="/">Strona Główna</a></li>
          <li class="nav-item"><a class="nav-link" href="/contact.php">Kontakt</a></li>
        </ul>
      </div>
    </div>
    <div class="col-4 d-flex justify-content-end align-items-center">
    <?php if (Auth::isLoggedIn()) : ?>
        <a class="nav-link btn-success mr-3" href="/admin/">Admin</a></li>
        <a class="nav-link btn-secondary" href="/logout.php">Wyloguj się</a></li>

    <?php else : ?>
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-info" href="/login.php">Zaloguj się</a>
        <?php endif; ?>
      </div>
  </div>
</nav>
  </header>     


        <main>
