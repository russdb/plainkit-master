<html>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="<?= $site->description()->html() ?>">
  <title><?= $site->title()->html() ?></title>
</head>
<body>
  <?php snippet('header') ?>
  <!-- DEBUG: <?= $page->note()->html() ?> -->
  <img src="<?= image('hero.jpg')->url() ?>" />
</body>
</html>