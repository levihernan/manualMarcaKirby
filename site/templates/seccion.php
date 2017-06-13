<?= snippet('header') ?>

<div class="container container-sidenav" onclick="closeNav()">
  <h1 class="title">
    <?= $page->title() ?>
  </h1>
  <?= $page->description() ?>
  <hr>
  <?php foreach ($page->children() as $categoria): ?>
    <?php if ($categoria->intendedTemplate() == 'separador'): ?>
      <?php foreach ($separador as $subcategoria): ?>
      <div class="categoria" id="<?= $subcategoria->slug() ?>">
        <h2 class="title">
          <?= $subcategoria->title() ?>
        </h2>
        <?= $subcategoria->description() ?>
        <hr>
        <?php foreach ($subcategoria->children() as $section): ?>
          <div class="seccion">

            <h3 class="title">
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
    <?php else: ?>
    <div class="categoria" id="<?= $categoria->slug() ?>">


      <h2 class="title">
        <?= $categoria->title() ?>
      </h2>
      <?= $categoria->description() ?>
      <hr>
      <?php foreach ($categoria->children() as $section): ?>
        <div class="seccion">

          <h3 class="title">
            <?= $section->title() ?>
          </h3>
          <?= $section->description() ?>
          <hr>
          <?= $section->text() ?>

          <pre class="language-markup"><?= $section->text()->html() ?></pre>
        </div>
      <?php endforeach ?>
    </div>

  <?php endif ?>
  <?php endforeach ?>
</div>


<?= snippet('footer') ?>
