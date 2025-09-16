<?php

require 'includes/init.php';

$conn = require 'includes/db.php';

$paginator = new Paginator($_GET['page'] ?? 1, 4, Article::getTotal($conn, true));

$articles = Article::getPage($conn, $paginator->limit, $paginator->offset, true);

?>
<?php require 'includes/header.php'; ?>

  
<div class="main-container position-relative overflow-hidden p-3 p-md-5 text-center bg-body-tertiary">
    <div class="col-md-6 p-lg-5 mx-auto my-5">
      <h1 class="display-3 text-uppercase fw-bold bg-dark text-light">Witaj w świecie ziół</h1>
      <h3 class="fw-normal .text-body-secondary mb-3 bg-dark text-light">Aromatyczny zakątek, pełen wiedzy o zielarstwie</h3>
      <div class="d-flex gap-3 justify-content-center lead fw-normal">
       
      </div>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>
<?php if (empty($articles)) : ?>
    <p>No articles found.</p>
<?php else : ?>

    <div class="row mb-2 mt-2 col-12">
    <div class="col-md-10 offset-1">
    <?php foreach ($articles as $article) : ?>
    <article>
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
       
    
                <?php if ($article['category_names']) : ?>
                        <p><strong class="d-inline-block mb-2 text-primary-emphasis">Categories:
                            <?php foreach ($article['category_names'] as $name) : ?>
                                <?= htmlspecialchars($name); ?>
                            <?php endforeach; ?>
                            </strong></p>
                            <?php endif; ?>
          <h2 class="mb-0"><a class ="text-success" href="article.php?id=<?= $article['id']; ?>"><?= htmlspecialchars($article['title']); ?></a></h2>
          <div class="mb-1 text-body-secondary"> 
            <time datetime="<?= $article['published_at'] ?>"><?php
                        $datetime = new DateTime($article['published_at']);
                        echo $datetime->format("j F, Y");
                    ?></div></time>
          <p class="card-text mb-auto"><?= htmlspecialchars(substr ($article['content'], 0, 200));?>...</p>
          <a href="article.php?id=<?= $article['id']; ?>" class="icon-link gap-1 icon-link-hover stretched-link">
            Continue reading
          </a>                   
        </div>
        </article>
        <?php endforeach; ?>
      </div>
    </div>

    <?php require 'includes/pagination.php'; ?>

<?php endif; ?>

<?php require 'includes/footer.php'; ?>