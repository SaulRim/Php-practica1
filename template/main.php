<main>
    <section>
        <h1>La proxima pelicula de Marvel</h1>
        <img src=<?= $poster_url; ?> alt="Poster de <?= $title?>" style = "width:200px; border-radius: 8px">
        <?php // Se ha modificado para usar solo variables $ en vez del array, usando extract() ?>
        <div class = "tarjet">
            <h2><?= $title ?></h2>
            <p><?= $message ?></p>
            <p>Proximamente: <?= $following_production["title"] ?></p>
        </div>
    </section>
</main>