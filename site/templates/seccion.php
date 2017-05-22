<?= snippet('header') ?>

<div class="container container-sidenav">
  <h1>
    <?= $page->title() ?>
  </h1>
  <?= $page->description() ?>
  <hr>
  <?php foreach ($page->children() as $categoria): ?>
    <div class="categoria" id="<?= $categoria->slug() ?>">


      <h2>
        <?= $categoria->title() ?>
      </h2>
      <?= $categoria->description() ?>
      <hr>
      <?php foreach ($categoria->children() as $section): ?>
        <div class="seccion">

          <h3>
            <?= $section->title() ?>
          </h3>
          <?= $section->description() ?>
          <hr>
          <?= $section->text() ?>

          <pre class="language-markup"><?= $section->text()->html() ?></pre>
        </div>
      <?php endforeach ?>
    </div>

  <?php endforeach ?>
</div>


<?= snippet('footer') ?>
