<?= snippet('header') ?>

<div class="container container-sidenav" onclick="closeNav()">
  <h1 class="title"><?= $page->intro() ?></h1>
  <?= $page->text() ?>
</div>

<?= snippet('footer') ?>
