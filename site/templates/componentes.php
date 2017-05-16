<!-- HEADER -->
<h1>
  <?= $page->title() ?>
</h1>
<?= $page->text()->kirbytext() ?>
<hr>
<?php foreach ($page->children() as $section): ?>
  <h2>
    <?= $section->title() ?>
  </h2>
  <hr>
  <?= $section->text()->html() ?>
  <pre>
    <?= $section->text() ?>
  </pre>
<?php endforeach ?>
<!-- FOOTER -->
