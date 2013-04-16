<?php
  // Require $posts
  if(!isset($posts)) $posts = array();
  ?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
  <?php include("_site_header.php");?>
</head> 

<body> 
  <div id="home-body-container">
    <div id="home-content">
      <div class="container container-fluid">
         <div class="row-fluid">
            <div class="span12">
              <!--Body content-->
              <h1><a href="<?=site_url("")?>">Posts Pagination</a></h1>
              <?=$pageLinks?>
              <table id="table_post" class="post-table table table-hover">
                <tr>
                  <th>UserName</th>
                  <th>UserEmail</th>
                  <th>Content</th>
                  <th>CreateDate</th>
                </tr>
                <?php foreach($posts as $post) { ?>
                  <tr>
                    <td><?=htmlspecialchars($post->UserName)?></td>
                    <td><?=htmlspecialchars($post->UserEmail)?></td>
                    <td><?=htmlspecialchars($post->Content)?></td>
                    <td><?=htmlspecialchars($post->CreateDate)?></td>
                  </tr>
                <?php } ?>
              </table>
            </div>
         </div>
      </div>  
    </div>
    <!-- home-content ends -->
  </div>
  <!-- home-body-container ends -->
  
  <div id="footer">
    <?php include("_site_footer.php");?>
    <a href="https://github.com/andro0929/ci-pagination"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>
  </div>  
</body>
</html>