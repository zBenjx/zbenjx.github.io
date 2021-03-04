<!--
_       __                              __
| |     / /___  ____  ____  ____ _____ _/ /_
| | /| / / __ \/ __ \/ __ \/ __ `/ __ `/ __ \
| |/ |/ / /_/ / /_/ / /_/ / /_/ / /_/ / / / /
|__/|__/\____/\____/ .___/\__,_/\__,_/_/ /_/
                 /_/

Made by Tomás Guerra ® http://www.tomasguerra.cl to MC-Market Community

All rights reserved ® 2019
                                                                          -->
<?php  include 'config.php';?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php print $favicon; ?>" type="image/x-icon"/>
    <title><?php print $siteTitle; ?></title>
    <link rel="stylesheet" href="css/bulma.css">
     <script src="bulma-toast.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="js/bootstrap-notify.js"></script>
    <script src="js/minecraftApi.js"></script>
    <link rel="stylesheet" href="src/PNotifyBrightTheme.css" />
  </head>
  <body>
    <section class="hero is-success is-fullheight" style="
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    background-image: url('<?php print $backgroundImage; ?>');
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">
      <!-- Hero head: will stick at the top -->
      <div class="hero-head">
        <header class="navbar">
          <div class="container">
            <div class="navbar-brand">
              <a class="navbar-item">
                <img src="<?php print $logoImage; ?>" alt="Logo">
              </a>
              <span class="navbar-burger burger" data-target="navbarMenuHeroC">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </div>
            <div id="navbarMenuHeroB" class="navbar-menu">
              <div class="navbar-end">
                <a class="navbar-item" href="<?php print $linkHome; ?>">
                  <span class="icon has-text-light">
                    <i class="fas fa-home"></i>
                  </span>
                  <span>HOME</span>
                </a>
                  <a class="navbar-item" href="<?php print $linkPunishments; ?>">
                    <span class="icon has-text-light">
                      <i class="fas fa-gavel"></i>
                    </span>
                    <span>PUNISHMENTS</span>
                  </a>
                  <a class="navbar-item" href="<?php print $linkStore; ?>">
                    <span class="icon has-text-light">
                      <i class="fas fa-shopping-cart"></i>
                    </span>
                    <span>STORE</span>
                  </a>
                  <a class="navbar-item" href="<?php print $linkTwitter; ?>">
                    <span class="icon has-text-light" href="<?php print $linkTwitter; ?>">
                      <i class="fab fa-twitter" href="<?php print $linkTwitter; ?>"></i>
                    </span>
                  </a>
                <span class="navbar-item">
                  <a class="button is-light is-rounded is-inverted" href="<?php print $linkDiscord; ?>">
                    <span class="icon">
                      <i class="fab fa-discord"></i>
                    </span>
                    <span>Discord</span>
                  </a>
                </span>
              </div>
            </div>
          </div>
        </header>
      </div>

      <!-- Hero content: will be in the middle -->
      <div class="hero-body">
        <div class="container has-text-centered">
          <img src="<?php print $mainLogo; ?>" style="width: 13rem;">
          <h1 class="title">
            <?php print $serverName; ?>
          </h1>
          <h2 class="subtitle is-5">There are currently <span data-playercounter-ip="<?php print $serverIp; ?>">0</span> players online</h2>

          <a class="button is-secondary is-rounded" id="player-count-button" data-clipboard-text="<?php print $serverIp; ?>">
              <span class="icon is-small">
                <i class="fas fa-clipboard"></i>
              </span>
              <span><?php print $serverIp; ?></span>
            </a>
          </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>
        <script src="https://unpkg.com/tippy.js@1.2.1/dist/tippy.min.js"></script>
        <script>
    var btn = document.getElementById('player-count-button');
    var clipboard = new Clipboard(btn);
    clipboard.on('success', function(e) {
        console.log(e);
    });
    clipboard.on('error', function(e) {
        console.log(e);
    });
  </script>


  <script>
  tippy('#player-count-button', {
    animation: 'scale',
    position: 'bottom',
    duration: 500,
    arrow: true
  })
  tippy('#player-head', {
    animation: 'scale',
    position: 'bottom',
    duration: 500,
    arrow: true
  })
  </script>
  </section>
  </body>
  <footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong><?php print $serverCopyright ?> ® </strong> website by <a href="http://tomasguerra.cl">ChileanS
        <span class="icon has-text-danger">
          <i class="fas fa-heart"></i>
        </span>
      </a> 2019.
    </p>
  </div>
</footer>

  <script src="inc/js/popper.min.js"></script>
  <script src="inc/js/halloween-bats.js?1528006986"></script>
  <script src="inc/js/jquery.min.js?1522797215"></script>
</html>
