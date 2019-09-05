<body>
  <?php snippet('header') ?>
  <!-- DEBUG: <?= $page->note()->html() ?> -->
  <section class="hero">
    <img src="<?= image('hero.jpg')->url() ?>" />
    <div class="centered"><?= $page->Intro()->html() ?></div>
  </section>
  <main>
    <?= markdown($page->Text()) ?>
  </main>

  <?php snippet('footer') ?>
</body>
</html>