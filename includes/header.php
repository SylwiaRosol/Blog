<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 link-secondary">Strona główna</a></li>
          <li><a href="/contact.php" class="nav-link px-2 link-body-emphasis">Kontakt</a></li>
        </ul>

        <div class="col-8 d-flex justify-content-end align-items-center">
    <?php if (Auth::isLoggedIn()) : ?>
        <li class="nav-item"><a class="nav-link" href="/admin/">Admin</a></li>
        <li class="nav-item"><a class="nav-link" href="/logout.php">Log out</a></li>

    <?php else : ?>
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="/login.php">Zaloguj się</a>
        <?php endif; ?>
      </div>
        </div>
    </div>
  </header>     

        <nav>

            <div class="nav-scroller py-1 mb-3 border-bottom">
    <nav class="nav nav-underline justify-content-between">
      <a class="nav-item nav-link link-body-emphasis active" href="#">Rodzaje ziół</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Przepisy z ziołami</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Leczenie ziołami</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Kosmetyki ziołowe</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Herbaty</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Napary ziołowe</a>
    </nav>
  </div>
        </nav>


        <main>
