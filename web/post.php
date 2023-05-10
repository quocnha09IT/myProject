<?php 
  include_once "php/config.php";
  $post_id = $_GET['post_id'];
  $sql1 = mysqli_query($conn, "SELECT * FROM post where post_id = $post_id");        
  ?>
  <?php 
       $sql = mysqli_query($conn, "SELECT * FROM details_post "); 
       $row = mysqli_fetch_assoc($sql);
    ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
 
  </head>

  <body>
   <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="zoom-in-right" data-aos-delay="200">
              <h3><?php echo $row['name_post']?></h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li><?php echo $row['ds_post']?></li>
                <li><?php echo $row['address']?></li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>
          <?php echo "<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.3454974202455!2d108.2368523147248!3d16.04755134428131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314217624699993f%3A0x9a1226f938915553!2zTXkgQW4sIELhuq9jIE3hu7kgUGjDuiwgTmfFqSBIw6BuaCBTxqFuLCBEYSBOYW5nIDU1MDAwMCwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1634579029188!5m2!1sen!2s' width="600"; height="450"; style="border:0;" ;allowfullscreen=""; loading="lazy"></iframe>"?>
  </body>
  </html>