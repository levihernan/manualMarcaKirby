<header>
  <nav class="top-nav">
    <div class="container">
      <div class="fixed-action-btn">
        <a onClick="toggleNav()" id="toggle-nav" class="btn-floating btn-large button-collapse top-nav full">
          <i class="fa fa-bars fa-2x"></i>
        </a>
      </div>
    </div>
  </nav>
  <ul id="nav-mobile" class="side-nav fixed" style="">
    <li class="logo">
      <div id="logo-container" class="brand-logo">
        <a style="background-color:transparent;" href="<?= $site->url() ?>" class="p-l-0">
          <img src="img/logo-produccion-inverse.png">
        </a>
      </div>
    </li>
    <li class="no-padding">
      <ul class="level-0 collapsible collapsible-accordion">
        <?php foreach ($site->children()->visible() as $seccion): ?>
          <li class="bold"><a class="collapsible-header waves-effect waves-light"><?= $seccion->title() ?></a>
            <div class="collapsible-body">
              <ul class="level-1 collapsible collapsible-accordion">
                <?php foreach ($seccion->children() as $categoria): ?>
                  <li>
                    <a href="<?= str_replace("/", "#", $categoria->id()) ?>" class="collapsible-header waves-effect waves-light">
                      <small>
                        <?= $categoria->title() ?>
                      </small>
                    </a>
                  </li>
                <?php endforeach ?>
              </ul>
            </div>
          </li>
        <?php endforeach ?>
      </ul>
    </li>
  </ul>
</header>

<script type="text/javascript">
function toggleNav() {
    $("#nav-mobile").toggleClass('activeNav');
  };
function closeNav() {
    $("#nav-mobile").removeClass('activeNav');
};
</script>
