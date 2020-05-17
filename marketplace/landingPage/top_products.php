<?php 
include './../phptodb.php';
$username = $_COOKIE["username"];
$top_rating_sql = "select * from products order by average desc limit 5";
$top_visited_sql = "select * from products order by visited desc limit 5";
$last_visted_sql = "select pagename from user_activity where username = '".$_COOKIE['username']."' order by id desc";
$top_rating_result = mysqli_query($mysqli, $top_rating_sql);
$top_visited_result = mysqli_query($mysqli, $top_visited_sql);
$last_visited_activity = mysqli_query($mysqli, $last_visted_sql);
$last_visited_result = [];
$temp = [];
while($row = $last_visited_activity->fetch_assoc()) {
  array_push($temp, $row['pagename']);
}

$uniqueArray = array_unique($temp);
$slicedArray = array_slice($uniqueArray, 0, 5, true);

foreach ($slicedArray as &$value) {
  $query = "select * from products where product_name = '".$value."'";
  $tmp = mysqli_query($mysqli, $query);
  array_push($last_visited_result, $tmp->fetch_assoc());
}
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
  $query_1 = "select * from products where product_name = '".$value_1."'";
  $tmp = mysqli_query($mysqli, $query_1);
  array_push($last_visited_result_1, $tmp->fetch_assoc());
}

$top_rating_sql_2 = "select * from products where companyname='Minfri' order by average desc limit 5";
$top_visited_sql_2 = "select * from products where companyname='Minfri' order by visited desc limit 5";
$last_visted_sql_2 = "select pagename from user_activity where username = '".$_COOKIE['username']."' AND  companyname='Minfri' order by id desc";
$top_rating_result_2 = mysqli_query($mysqli, $top_rating_sql_2);
$top_visited_result_2 = mysqli_query($mysqli, $top_visited_sql_2);
$last_visited_activity_2 = mysqli_query($mysqli, $last_visted_sql_2);
$last_visited_result_2 = [];
$temp_2 = [];
while($row_2 = $last_visited_activity_2->fetch_assoc()) {
  array_push($temp_2, $row_2['pagename']);
}

$uniqueArray_2 = array_unique($temp_2);
$slicedArray_2 = array_slice($uniqueArray_2, 0, 5, true);
foreach ($slicedArray_2 as &$value_2) {
  $query_2 = "select * from products where product_name = '".$value_2."'";
  $tmp_2 = mysqli_query($mysqli, $query_2);
  array_push($last_visited_result_2, $tmp_2->fetch_assoc());
}
$top_rating_sql_3 = "select * from products where companyname='Rumination' order by average desc limit 5";
$top_visited_sql_3 = "select * from products where companyname='Rumination' order by visited desc limit 5";
$last_visted_sql_3 = "select pagename from user_activity where username = '".$_COOKIE['username']."' AND  companyname='Rumination' order by id desc";
$top_rating_result_3 = mysqli_query($mysqli, $top_rating_sql_3);
$top_visited_result_3 = mysqli_query($mysqli, $top_visited_sql_3);
$last_visited_activity_3 = mysqli_query($mysqli, $last_visted_sql_3);
$last_visited_result_3 = [];
$temp_3 = [];
while($row_3 = $last_visited_activity_3->fetch_assoc()) {
  array_push($temp_3, $row_3['pagename']);
}

$uniqueArray_3 = array_unique($temp_3);
$slicedArray_3 = array_slice($uniqueArray_3, 0, 5, true);

foreach ($slicedArray_3 as &$value_3) {
  $query_3 = "select * from products where product_name = '".$value_3."'";
  $tmp_3 = mysqli_query($mysqli, $query_3);
  array_push($last_visited_result_3, $tmp_3->fetch_assoc());
}

$top_rating_sql_4 = "select * from products where companyname='Dad Joke Inc' order by average desc limit 5";
$top_visited_sql_4 = "select * from products where companyname='Dad Joke Inc' order by visited desc limit 5";
$last_visted_sql_4 = "select pagename from user_activity where username = '".$_COOKIE['username']."' AND  companyname='Dad jokes inc' order by id desc";
$top_rating_result_4 = mysqli_query($mysqli, $top_rating_sql_4);
$top_visited_result_4 = mysqli_query($mysqli, $top_visited_sql_4);
$last_visited_activity_4 = mysqli_query($mysqli, $last_visted_sql_4);
$last_visited_result_4 = [];
$temp_4 = [];
while($row_4 = $last_visited_activity_4->fetch_assoc()) {
  array_push($temp_4, $row_4['pagename']);
}

$uniqueArray_4 = array_unique($temp_4);
$slicedArray_4 = array_slice($uniqueArray_4, 0, 5, true);

foreach ($slicedArray_4 as &$value_4) {
  $query_4 = "select * from products where product_name = '".$value_4."'";
  $tmp_4 = mysqli_query($mysqli, $query_4);
  array_push($last_visited_result_4, $tmp_4->fetch_assoc());
}
?>


<div class="col-xl-10">
  <div class="row">
    
    <?php  while($row = $top_rating_result->fetch_assoc()) {?>
      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item top-rated-products">
        <div class="portfolio-wrap">
          <img src='<?php echo $row["product_image_url"] ?>' style="width: 345px; height: 345px;" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><?php echo $row["product_name"] ?></h4>
            <p><?php echo $row["companyname"] ?></p>
            <p><?php echo $row["average"]?><?php echo ' Stars' ?></p>
            <div class="portfolio-links">
              <a href="<?php echo $row["product_image_url"] ?>?username=<?php echo $username ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="<?php echo $row["product_url"] ?>?username=<?php echo $username ?>" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End portfolio item -->
    <?php }?>

    <?php  while($row = $top_visited_result->fetch_assoc()) {?>
      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item top-visited-products">
        <div class="portfolio-wrap">
          <img src='<?php echo $row["product_image_url"] ?>' style="width: 345px; height: 345px;" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><?php echo $row["product_name"] ?></h4>
            <p><?php echo $row["companyname"] ?></p>
             <p><?php echo $row["visited"]?><?php echo ' times visited' ?></p>
            <div class="portfolio-links">
              <a href="<?php echo $row["product_image_url"] ?>?username=<?php echo $username ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="<?php echo $row["product_url"] ?>?username=<?php echo $username ?>" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End portfolio item -->
    <?php }?>

    <?php for($i=0; $i<count($last_visited_result); $i++) {?>
      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item recently-visited-products">
        <div class="portfolio-wrap">
          <img src='<?php echo $last_visited_result[$i]["product_image_url"] ?>' style="width: 345px; height: 345px;" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><?php echo $last_visited_result[$i]["product_name"] ?></h4>
            <p><?php echo $last_visited_result[$i]["companyname"] ?></p>
            <div class="portfolio-links">
              <a href="<?php echo $last_visited_result[$i]["product_image_url"] ?>?username=<?php echo $username ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="<?php echo $last_visited_result[$i]["product_image_url"] ?>?username=<?php echo $username ?>" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End portfolio item -->
    <?php }?>

    <?php  while($row = $top_rating_result_1->fetch_assoc()) {?>
      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item top-rated-products_1">
        <div class="portfolio-wrap">
          <img src='<?php echo $row["product_image_url"] ?>' style="width: 345px; height: 345px;" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><?php echo $row["product_name"] ?></h4>
            <p><?php echo $row["companyname"] ?></p>
            <p><?php echo $row["average"]?><?php echo ' Stars' ?></p>
            <div class="portfolio-links">
              <a href="<?php echo $row["product_image_url"] ?>?username=<?php echo $username ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="<?php echo $row["product_url"] ?>?username=<?php echo $username ?>" title="More Details"><i class="bx bx-link"></i></a>
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
             <p><?php echo $row["visited"]?><?php echo ' times visited' ?></p>
            <div class="portfolio-links">
              <a href="<?php echo $row["product_image_url"] ?>?username=<?php echo $username ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="<?php echo $row["product_url"] ?>?username=<?php echo $username ?>" title="More Details"><i class="bx bx-link"></i></a>
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
              <a href="<?php echo $last_visited_result_1[$i]["product_image_url"] ?>?username=<?php echo $username ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="<?php echo $last_visited_result_1[$i]["product_image_url"] ?>?username=<?php echo $username ?>" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End portfolio item -->
    <?php }?>

    <?php  while($row = $top_rating_result_2->fetch_assoc()) {?>
      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item top-rated-products_2">
        <div class="portfolio-wrap">
          <img src='<?php echo $row["product_image_url"] ?>' style="width: 345px; height: 345px;" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><?php echo $row["product_name"] ?></h4>
            <p><?php echo $row["companyname"] ?></p>
            <p><?php echo $row["average"]?><?php echo ' Stars' ?></p>
            <div class="portfolio-links">
              <a href="<?php echo $row["product_image_url"] ?>?username=<?php echo $username ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="<?php echo $row["product_url"] ?>?username=<?php echo $username ?>" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End portfolio item -->
    <?php }?>

    <?php  while($row = $top_visited_result_2->fetch_assoc()) {?>
      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item top-visited-products_2">
        <div class="portfolio-wrap">
          <img src='<?php echo $row["product_image_url"] ?>' style="width: 345px; height: 345px;" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><?php echo $row["product_name"] ?></h4>
            <p><?php echo $row["companyname"] ?></p>
             <p><?php echo $row["visited"]?><?php echo ' times visited' ?></p>
            <div class="portfolio-links">
              <a href="<?php echo $row["product_image_url"] ?>?username=<?php echo $username ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="<?php echo $row["product_url"] ?>?username=<?php echo $username ?>" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End portfolio item -->
    <?php }?>

    <?php for($i=0; $i<count($last_visited_result_2); $i++) {?>
      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item recently-visited-products_2">
        <div class="portfolio-wrap">
          <img src='<?php echo $last_visited_result_2[$i]["product_image_url"] ?>' style="width: 345px; height: 345px;" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><?php echo $last_visited_result_2[$i]["product_name"] ?></h4>
            <p><?php echo $last_visited_result_2[$i]["companyname"] ?></p>
            <div class="portfolio-links">
              <a href="<?php echo $last_visited_result_2[$i]["product_image_url"] ?>?username=<?php echo $username ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="<?php echo $last_visited_result_2[$i]["product_image_url"] ?>?username=<?php echo $username ?>" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End portfolio item -->
    <?php }?>

    <?php  while($row = $top_rating_result_3->fetch_assoc()) {?>
      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item top-rated-products_3">
        <div class="portfolio-wrap">
          <img src='<?php echo $row["product_image_url"] ?>' style="width: 345px; height: 345px;" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><?php echo $row["product_name"] ?></h4>
            <p><?php echo $row["companyname"] ?></p>
            <p><?php echo $row["average"]?><?php echo ' Stars' ?></p>
            <div class="portfolio-links">
              <a href="<?php echo $row["product_image_url"] ?>?username=<?php echo $username ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="<?php echo $row["product_url"] ?>?username=<?php echo $username ?>" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End portfolio item -->
    <?php }?>

    <?php  while($row = $top_visited_result_3->fetch_assoc()) {?>
      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item top-visited-products_3">
        <div class="portfolio-wrap">
          <img src='<?php echo $row["product_image_url"] ?>' style="width: 345px; height: 345px;" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><?php echo $row["product_name"] ?></h4>
            <p><?php echo $row["companyname"] ?></p>
             <p><?php echo $row["visited"]?><?php echo ' times visited' ?></p>
            <div class="portfolio-links">
              <a href="<?php echo $row["product_image_url"] ?>?username=<?php echo $username ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="<?php echo $row["product_url"] ?>?username=<?php echo $username ?>" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End portfolio item -->
    <?php }?>

    <?php for($i=0; $i<count($last_visited_result_3); $i++) {?>
      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item recently-visited-products_3">
        <div class="portfolio-wrap">
          <img src='<?php echo $last_visited_result_3[$i]["product_image_url"] ?>' style="width: 345px; height: 345px;" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><?php echo $last_visited_result_3[$i]["product_name"] ?></h4>
            <p><?php echo $last_visited_result_3[$i]["companyname"] ?></p>
            <div class="portfolio-links">
              <a href="<?php echo $last_visited_result_3[$i]["product_image_url"] ?>?username=<?php echo $username ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="<?php echo $last_visited_result_3[$i]["product_image_url"] ?>?username=<?php echo $username ?>" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End portfolio item -->
    <?php }?>

    <?php  while($row = $top_rating_result_4->fetch_assoc()) {?>
      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item top-rated-products_4">
        <div class="portfolio-wrap">
          <img src='<?php echo $row["product_image_url"] ?>' style="width: 345px; height: 345px;" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><?php echo $row["product_name"] ?></h4>
            <p><?php echo $row["companyname"] ?></p>
            <p><?php echo $row["average"]?><?php echo ' Stars' ?></p>
            <div class="portfolio-links">
              <a href="<?php echo $row["product_image_url"] ?>?username=<?php echo $username ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="<?php echo $row["product_url"] ?>?username=<?php echo $username ?>" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End portfolio item -->
    <?php }?>

    <?php  while($row = $top_visited_result_4->fetch_assoc()) {?>
      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item top-visited-products_4">
        <div class="portfolio-wrap">
          <img src='<?php echo $row["product_image_url"] ?>' style="width: 345px; height: 345px;" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><?php echo $row["product_name"] ?></h4>
            <p><?php echo $row["companyname"] ?></p>
             <p><?php echo $row["visited"]?><?php echo ' times visited' ?></p>
            <div class="portfolio-links">
              <a href="<?php echo $row["product_image_url"] ?>?username=<?php echo $username ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="<?php echo $row["product_url"] ?>?username=<?php echo $username ?>" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End portfolio item -->
    <?php }?>

    <?php for($i=0; $i<count($last_visited_result_4); $i++) {?>
      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item recently-visited-products_4">
        <div class="portfolio-wrap">
          <img src='<?php echo $last_visited_result_4[$i]["product_image_url"] ?>' style="width: 345px; height: 345px;" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><?php echo $last_visited_result_4[$i]["product_name"] ?></h4>
            <p><?php echo $last_visited_result_4[$i]["companyname"] ?></p>
            <div class="portfolio-links">
              <a href="<?php echo $last_visited_result_4[$i]["product_image_url"] ?>?username=<?php echo $username ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="<?php echo $last_visited_result_4[$i]["product_image_url"] ?>?username=<?php echo $username ?>" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End portfolio item -->
    <?php }?>
  </div>
</div>
