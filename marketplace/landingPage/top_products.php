<?php 
include './../phptodb.php';
$top_rating_sql = "select * from products order by average desc limit 5";
$top_visited_sql = "select * from products order by visited desc limit 5";
$last_visted_sql = "select pagename from user_activity where username = '".$_COOKIE['username']."'order by id desc limit 5";
$top_rating_result = mysqli_query($mysqli, $top_rating_sql);
$top_visited_result = mysqli_query($mysqli, $top_visited_sql);
$last_visited_activity = mysqli_query($mysqli, $last_visted_sql);
$last_visited_result = [];
while($row = $last_visited_activity->fetch_assoc()) {
  $query = "select * from products where product_name = '".$row['pagename']."'";
  $tmp = mysqli_query($mysqli, $query);
  array_push($last_visited_result, $tmp->fetch_assoc());
}
?>


<div class="col-xl-10">
  <div class="row">
    
    <?php  while($row = $top_rating_result->fetch_assoc()) {?>
      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item top-rated-products">
        <div class="portfolio-wrap">
          <img src='<?php echo $row["product_image_url"] ?>' class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><?php echo $row["product_name"] ?></h4>
            <p><?php echo $row["companyname"] ?></p>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End portfolio item -->
    <?php }?>

    <?php  while($row = $top_visited_result->fetch_assoc()) {?>
      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item top-visited-products">
        <div class="portfolio-wrap">
          <img src='<?php echo $row["product_image_url"] ?>' class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><?php echo $row["product_name"] ?></h4>
            <p><?php echo $row["companyname"] ?></p>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End portfolio item -->
    <?php }?>

    <?php for($i=0; $i<count($last_visited_result); $i++) {?>
      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item recently-visited-products">
        <div class="portfolio-wrap">
          <img src='<?php echo $last_visited_result[$i]["product_image_url"] ?>' class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><?php echo $last_visited_result[$i]["product_name"] ?></h4>
            <p><?php echo $last_visited_result[$i]["companyname"] ?></p>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End portfolio item -->
    <?php }?>
  </div>
</div>