<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: /mwa/index.html");
    }
    $data = $_SESSION['data'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IGNITE | Dashboard</title>
    
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    
    <link rel="stylesheet" href="assets/css/style.css">
    
    <link rel="icon" type="image/x-icon" href="/mwa/assets/favicon/favicon.png">
  </head>
  <body>
    <div class="container-scroller">
      
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="/mwa/index.html"><img src="/mwa/assets/ignite-logos/flame-ignite-logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="/mwa/index.html"><img src="/mwa/assets/ignite-logos/flame-small.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.html">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
        </ul>
      </nav>
      
      <div class="container-fluid page-body-wrapper">
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="/mwa/index.html"><img src="/mwa/assets/ignite-logos/flame-small.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $data['name'] ?></p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <div class="dropdown-divider"></div>
                  <a href="logout.php" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper">
            
              
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title mb-1">Events</h4>
                      <p class="text-muted mb-1">Your status</p>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="preview-list">
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary">
                                <i class="mdi mdi-snapchat"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                              <a href="/mwa/events/Among-us.html"><h6 class="preview-subject">Among Us</h6>
                                <p class="text-muted mb-0">Find the imposter among us!</p></a>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <form method="POST" action="/mwa/api/updateau.php">

                                <?php

                                if($_SESSION['amongus']==1){
                                    ?>
                                    <button disabled type="button" class="btn btn-inverse-success btn-fw">Registered</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button type="submit" class="btn btn-outline-success btn-fw">Register</button>
                                    <?php
                                }
                                ?>
                                </form>
                                
                                
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-success">
                                <i class="mdi mdi-av-timer"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                              <a href="/mwa/events/Creatives.html"><h6 class="preview-subject">Creatives</h6>
                                <p class="text-muted mb-0">Showcase the artist within you!</p></a>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <form method="POST" action="/mwa/api/updatecr.php">

                                <?php

                                if($_SESSION['creatives']==1){
                                    ?>
                                    <button disabled type="button" class="btn btn-inverse-success btn-fw">Registered</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button type="submit" class="btn btn-outline-success btn-fw">Register</button>
                                    <?php
                                }
                                ?>
                                </form>
                                
                                
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-info">
                                <i class="mdi mdi-soccer"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                              <a href="/mwa/events/Fifa.html"><h6 class="preview-subject">FIFA</h6>
                                <p class="text-muted mb-0">Fight it out with you controllers!</p></a>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <form method="POST" action="/mwa/api/updatefi.php">

                                <?php

                                if($_SESSION['fifa']==1){
                                    ?>
                                    <button disabled type="button" class="btn btn-inverse-success btn-fw">Registered</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button type="submit" class="btn btn-outline-success btn-fw">Register</button>
                                    <?php
                                }
                                ?>
                                </form>
                                
                                
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-danger">
                                <i class="mdi mdi-pokeball"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                              <a href="/mwa/events/Glow-Cricket.html"><h6 class="preview-subject">Glow Cricket</h6>
                                <p class="text-muted mb-0">Glow your way into the dark field!</p></a>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <form method="POST" action="/mwa/api/updategc.php">

                                <?php

                                if($_SESSION['glowcricket']==1){
                                    ?>
                                    <button disabled type="button" class="btn btn-inverse-success btn-fw">Registered</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button type="submit" class="btn btn-outline-success btn-fw">Register</button>
                                    <?php
                                }
                                ?>
                                </form>
                                
                                
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-warning">
                                <i class="mdi mdi-trophy-variant"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                              <a href="/mwa/events/Hackathon.html"><h6 class="preview-subject">Hackathon</h6>
                                <p class="text-muted mb-0">The only source of knowledge is experience!</p></a>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <form method="POST" action="/mwa/api/updatehack.php">

                                <?php

                                if($_SESSION['hackathon']==1){
                                    ?>
                                    <button disabled type="button" class="btn btn-inverse-success btn-fw">Registered</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button type="submit" class="btn btn-outline-success btn-fw">Register</button>
                                    <?php
                                }
                                ?>
                                </form>
                                
                                
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-dark">
                                <i class="mdi mdi-chart-line"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                              <a href="/mwa/events/Ipl-auction.html"><h6 class="preview-subject">IPL AUCTION</h6>
                                <p class="text-muted mb-0">Make your dream team now!</p></a>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <form method="POST" action="/mwa/api/updateipl.php">

                                <?php

                                if($_SESSION['iplauction']==1){
                                    ?>
                                    <button disabled type="button" class="btn btn-inverse-success btn-fw">Registered</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button type="submit" class="btn btn-outline-success btn-fw">Register</button>
                                    <?php
                                }
                                ?>
                                </form>
                                
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                      <div class="col-12">
                        <div class="preview-list">
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary">
                                <i class="mdi mdi-tie"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                              <a href="/mwa/events/PitchIT.html"><h6 class="preview-subject">Pitch IT</h6>
                                <p class="text-muted mb-0">Pitch your idea to the sharks!</p></a>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <form method="POST" action="/mwa/api/updatepi.php">

                                <?php

                                if($_SESSION['pitchit']==1){
                                    ?>
                                    <button disabled type="button" class="btn btn-inverse-success btn-fw">Registered</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button type="submit" class="btn btn-outline-success btn-fw">Register</button>
                                    <?php
                                }
                                ?>
                                </form>
                                
                                
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-success">
                                <i class="mdi mdi-checkerboard"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                              <a href="/mwa/events/Technical-squid-games.html"><h6 class="preview-subject">Squid Games</h6>
                                <p class="text-muted mb-0">Relieve your childhood memories!</p></a>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <form method="POST" action="/mwa/api/updatesg.php">

                                <?php

                                if($_SESSION['squid']==1){
                                    ?>
                                    <button disabled type="button" class="btn btn-inverse-success btn-fw">Registered</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button type="submit" class="btn btn-outline-success btn-fw">Register</button>
                                    <?php
                                }
                                ?>
                                </form>
                                
                                
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-info">
                                <i class="mdi mdi-chemical-weapon"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                              <a href="/mwa/events/Fifa.html"><h6 class="preview-subject">Tech Expo</h6>
                                <p class="text-muted mb-0">Showcase your geekiness</p></a>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <form method="POST" action="/mwa/api/updatete.php">

                                <?php

                                if($_SESSION['techexpo']==1){
                                    ?>
                                    <button disabled type="button" class="btn btn-inverse-success btn-fw">Registered</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button type="submit" class="btn btn-outline-success btn-fw">Register</button>
                                    <?php
                                }
                                ?>
                                </form>
                                
                                
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-danger">
                                <i class="mdi mdi-clock-fast"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                              <a href="/mwa/events/Tech-Trivia.html"><h6 class="preview-subject">Tech Trivia</h6>
                                <p class="text-muted mb-0">Enjoy some techy quiz!</p></a>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <form method="POST" action="/mwa/api/updatett.php">

                                <?php

                                if($_SESSION['techtrivia']==1){
                                    ?>
                                    <button disabled type="button" class="btn btn-inverse-success btn-fw">Registered</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button type="submit" class="btn btn-outline-success btn-fw">Register</button>
                                    <?php
                                }
                                ?>
                                </form>
                                
                                
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-warning">
                                <i class="mdi mdi-dice-6"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                              <a href="/mwa/events/Think-Type-Toss.html"><h6 class="preview-subject">Think Type Toss</h6>
                                <p class="text-muted mb-0">Think fast, Code Fast, and Try your luck</p></a>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <form method="POST" action="/mwa/api/updattt.php">

                                <?php

                                if($_SESSION['techexpo']==1){
                                    ?>
                                    <button disabled type="button" class="btn btn-inverse-success btn-fw">Registered</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button type="submit" class="btn btn-outline-success btn-fw">Register</button>
                                    <?php
                                }
                                ?>
                                </form>
                                
                                
                              </div>
                            </div>
                          </div>
                          <div class="preview-item">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-dark">
                                <i class="mdi mdi-desktop-mac"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                              <a href="/mwa/events/Valorant.html"><h6 class="preview-subject">Valorant</h6>
                                <p class="text-muted mb-0">Fight it out with your reflexes!</p></a>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <form method="POST" action="/mwa/api/updatevalo.php">

                                <?php

                                if($_SESSION['valo']==1){
                                    ?>
                                    <button disabled type="button" class="btn btn-inverse-success btn-fw">Registered</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button type="submit" class="btn btn-outline-success btn-fw">Register</button>
                                    <?php
                                }
                                ?>
                                </form>
                                
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/js/misc.js"></script>
    
  </body>
</html>