<?php 
include './../phptodb.php';
$top_rating_sql_1 = "select * from products where companyname='Eticket' order by average desc limit 5";
$top_visited_sql_1 = "select * from products where companyname='Eticket' order by visited desc limit 5";
$last_visted_sql_1 = "select pagename from user_activity where username = '".$_COOKIE['username']."' AND  companyname='eticket' order by id desc";
$top_rating_result_1 = mysqli_query($mysqli, $top_rating_sql_1);
$top_visited_result_1 = mysqli_query($mysqli, $top_visited_sql_1);
$last_visited_activity_1 = mysqli_query($mysqli, $last_visted_sql_1);
$last_visited_result_1 = [];
$temp_1 = [];
while($row_1 = $last_visited_activity_1->fetch_assoc()) {
  array_push($temp_1, $row_1['pagename']);
}

$uniqueArray_1 = array_unique($temp_1);
$slicedArray_1 = array_slice($uniqueArray_1, 0, 5, true);

foreach ($slicedArray_1 as &$value_1) {
  $query = "select * from products where product_name = '".$value_1."'";
  $tmp_2 = mysqli_query($mysqli, $query);
  array_push($last_visited_result_1, $tmp_2->fetch_assoc());
}
$username = $_COOKIE["username"];

?>


<div class="col-xl-10">
  <div class="row">
    
    <?php  while($row = $top_rating_result_1->fetch_assoc()) {?>
      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item top-rated-products_1">
        <div class="portfolio-wrap">
          <img src='<?php echo $row["product_image_url"] ?>' style="width: 345px; height: 345px;" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><?php echo $row["product_name"] ?></h4>
            <p><?php echo $row["companyname"] ?></p>
            <div class="portfolio-links">
              <a href="<?php echo $row["product_image_url"] ?>?username=<?php $username ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="<?php echo $row["product_url"] ?>?username=<?php $username ?>" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End portfolio item -->
    <?php }?>

    <?php  while($row = $top_visited_result_1->fetch_assoc()) {?>
      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item top-visited-products_1">
        <div class="portfolio-wrap">
          <img src='<?php echo $row["product_image_url"] ?>' style="width: 345px; height: 345px;" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><?php echo $row["product_name"] ?></h4>
            <p><?php echo $row["companyname"] ?></p>
            <div class="portfolio-links">
              <a href="<?php echo $row["product_image_url"] ?>?username=<?php $username ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="<?php echo $row["product_url"] ?>?username=<?php $username ?>" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End portfolio item -->
    <?php }?>

    <?php for($i=0; $i<count($last_visited_result_1); $i++) {?>
      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item recently-visited-products_1">
        <div class="portfolio-wrap">
          <img src='<?php echo $last_visited_result_1[$i]["product_image_url"] ?>' style="width: 345px; height: 345px;" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><?php echo $last_visited_result_1[$i]["product_name"] ?></h4>
            <p><?php echo $last_visited_result_1[$i]["companyname"] ?></p>
            <div class="portfolio-links">
              <a href="<?php echo $last_visited_result_1[$i]["product_image_url"] ?>?username=<?php $username ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="<?php echo $last_visited_result_1[$i]["product_image_url"] ?>?username=<?php $username ?>" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End portfolio item -->
    <?php }?>
  </div>
</div>
