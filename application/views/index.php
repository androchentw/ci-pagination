<?php 
  $package_name = "CI-Pagination";
?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
  <?php include("_site_header.php");?>
</head>
<body>
  <div id="home-body-container">
      <div id="home-content">
        <!-- home-content -->
      <div class="container container-fluid">
        <?php include("_navbar.php");?>
        <div class="row-fluid">
          <div class="span2">
            <?php include("_sidebar.php");?>
          </div>
          <div class="span10">
            <!-- body-content -->
            <div id="body">
              <h1>Welcome to <?=$package_name?> - Index</h1>
              <h2>Congratulations!</h2>
              <p>You've successfully used this package! Enjoy web programming!</p>

              <p>Go to <a href="<?=site_url("")?>">index</a> or <a href="<?=site_url("post")?>">post</a> to check those views!</p>
              <p>Check <a href="https://github.com/andro0929/<?=$package_name?>">Github</a> for further information.</p>
              <p>Author: <a href='http://androchen.qov.tw' target="blank">Andro Chen</a></p>
            </div>
            <!-- body-content ends -->
          </div>
        </div>
      </div>  
      </div>
      <!-- home-content ends -->
  </div>
  <div id="footer">
    <?php include("_site_footer.php");?>
    <a href="https://github.com/andro0929/<?=$package_name?>"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>
  </div>  
</body>
</html>