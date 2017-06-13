<?= snippet('header') ?>

<div class="container container-sidenav" onclick="closeNav()">
  <h1 class="title">
    <?= $page->title() ?>
  </h1>
  <?= $page->description() ?>
  <hr>
  <?php foreach ($page->children() as $template): ?>
    <?php if ($template->intendedTemplate() == 'separador'): ?>
      <?php foreach ($template->children() as $subtemplate): ?>
        <div class="categoria" id="<?= $subtemplate->slug() ?>">
          
          <h2 class="title">
            <?= $subtemplate->title() ?>
          </h2>
          <?= $subtemplate->description() ?>

          <?php if ($subtemplate->hasImages()): ?>
            <img class="img-responsive templateImage" src="<?= $subtemplate->image()->uri() ?>" alt=""/>
          <?php endif ?>
          <div class="row">
            <div class="col-md-offset-2 col-md-4">
              <a href="zip/<?= $subtemplate->slug() ?>.zip" class="btn btn-primary btn-md btn-block" >Descargar template</a>
            </div>
            <div class="col-md-4">
              <a target="_blank" href="html/<?= $subtemplate->slug() ?>.html" class="btn btn-success btn-md btn-block" >Ver demo</a>
            </div>
          </div>
          <hr>

        </div>
      <?php endforeach ?>


    <?php else: ?>
    <div class="categoria" id="<?= $template->slug() ?>">

      <h2 class="title">
        <?= $template->title() ?>
      </h2>
      <?= $template->description() ?>

      <?php if ($template->hasImages()): ?>
        <img class="img-responsive templateImage" src="<?= $template->image()->uri() ?>" alt=""/>
      <?php endif ?>
      <div class="row">
        <div class="col-md-offset-2 col-md-4">
          <a href="zip/<?= $template->slug() ?>.zip" class="btn btn-primary btn-md btn-block" >Descargar template</a>
        </div>
        <div class="col-md-4">
          <a target="_blank" href="html/<?= $template->slug() ?>.html" class="btn btn-success btn-md btn-block" >Ver demo</a>
        </div>
      </div>
      <hr>

    </div>
  <?php endif ?>
  <?php endforeach ?>

</div>

<?= snippet('footer') ?>
