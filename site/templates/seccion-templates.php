<?= snippet('header') ?>

<div class="container container-sidenav">
  <h1>
    <?= $page->title() ?>
  </h1>
  <?= $page->description() ?>
  <hr>
  <?php foreach ($page->children() as $template): ?>
    <div class="categoria" id="<?= $template->slug() ?>">


      <h2>
        <?= $template->title() ?>
      </h2>
      <?= $template->description() ?>
      <?php if ($template->hasImages()): ?>
        <img src="<?= $template->image()->uri() ?>" alt=""/>
      <?php endif ?>
      <div class="row">
        <div class="col-md-offset-4 col-md-4">

          <a class="btn btn-primary btn-md btn-block" >Descargar template</a>
        </div>
        <div class="col-md-4">

          <a class="btn btn-success btn-md btn-block" >Ver demo</a>
        </div>
      </div>
      <hr>

    </div>
  <?php endforeach ?>

</div>

<?= snippet('footer') ?>
