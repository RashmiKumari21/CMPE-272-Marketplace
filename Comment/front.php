<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://antdish.info/rating.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  </head>
  <body>
    <?php
	// code to update the variables
    $servername = "3.234.254.199";
    $username = "cmpe272";
    $password = "cmpe272";

    // Create connection
    $mysqli = new mysqli($servername, $username, $password, "cmpe272");

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }


    $query = "SELECT * FROM products WHERE id = 1";
    $result = mysqli_query($mysqli, $query);
    if($result){
      while($row = mysqli_fetch_array($result)){
        $oneStar = $row['onestar']+1;
        echo $oneStar;
        $twoStar = $row['twostar']+1;
        $threeStar = $row['threestar']+1;
        $fourStar = $row['fourstar']+1;
        $fiveStar = $row['fivestar']+1;
        $total = $oneStar+$twoStar+$threeStar+$fourStar+$fiveStar+1;
		$average=(1*$oneStar+2*$twoStar+3*$threeStar+4*$fourStar+5*$fiveStar)/$total;
        $oneStarPer = ($oneStar / $total) * 100;
        $twoStarPer = ($twoStar / $total) * 100;
        $threeStarPer = ($threeStar / $total) * 100;
        $fourStarPer = ($fourStar / $total) * 100;
        $fiveStarPer = ($fiveStar / $total) * 100;
      }}
	  

     ?>
     <script>

     let oneStarPercentage = "<?php echo $oneStarPer ;?>;";
     let twoStarPercentage = "<?php echo $twoStarPer ;?>;";
     let threeStarPercentage = "<?php echo $threeStarPer ;?>;";
     let fourStarPercentage = "<?php echo $fourStarPer ;?>;";
     let fiveStarPercentage = "<?php echo $fiveStarPer ;?>;";

     let percentageOneStar = Math.round(parseFloat(oneStarPercentage)).toFixed(2) + '%';
     let percentageTwoStar = Math.round(parseFloat(twoStarPercentage)).toFixed(2) + '%';
     let percentageThreeStar = Math.round(parseFloat(threeStarPercentage)).toFixed(2) + '%';
     let percentageFourStar = Math.round(parseFloat(fourStarPercentage)).toFixed(2) + '%';
     let percentageFiveStar = Math.round(parseFloat(fiveStarPercentage)).toFixed(2) + '%';

     $('.bar-1').css('width', percentageOneStar.toString());
     $('.bar-2').css('width', percentageTwoStar.toString());
     $('.bar-3').css('width', percentageThreeStar.toString());
     $('.bar-4').css('width', percentageFourStar.toString());
     $('.bar-5').css('width', percentageFiveStar.toString());

     function insertComments(){
       let content = $("#message-text").val();
	   let username = $("#username").val();
	   let prodid = $("#prodid").val();
	   let rating = $("#rating").val();
       $.post('http://localhost/Comment/store.php',{username:username, product_id:prodid, rating:rating,review:content});
       let html = '<div class="row"><div class="col-sm-1"><div class="thumbnail">';
       html += '<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">';
       html += '</div></div><div class="col-sm-11"><div class="panel panel-default"><div class="panel-heading" style="font-size: 14px;">';
       html += '<strong>'+ username +'</strong>';
       html += '</div><div class="panel-body"><label>';
       html += content;
       html += '</label></div></div></div></div>';

       $("#divreviewcomments").append(html);
       $("#message-text").val("");

     }


     </script>


  <!-- review start -->

  <div id="divreviewcomments" class="container" style="margin-top: 2%;">
     <div class="row">
        <div class="col-sm-12" style="margin-bottom: 4%;">
           <h3>User Comments</h3>
        </div>
     </div>
     <div class="row">
        <div class="col-sm-1">
           <div class="thumbnail">
              <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
           </div>
        </div>
        <div class="col-sm-11">
           <div class="panel panel-default">
              <div class="panel-heading" style="font-size: 14px;">
                 <strong>Ragini</strong>
              </div>
              <div class="panel-body">
                 <label>This product is really awesome.</label>
              </div>
           </div>
        </div>
		//ee
		<?php
		// code to print out the comments stored in the database.
		$query2 = "SELECT username, comment FROM reviews WHERE productid = 1";
	  $result2 = mysqli_query($mysqli, $query2);
	  
	  $i=0;
	  if($result2){
		  while($row2 = mysqli_fetch_array($result2) && $i<5){
			  print_r($row2);
			  echo '<div class="col-sm-11">';
           echo '<div class="panel panel-default">';
              echo '<div class="panel-heading" style="font-size: 14px;">';
                echo' <strong>';
				$x=$row2['username'];
				echo $x;
				echo '</strong>';
              echo'</div>';
              echo '<div class="panel-body">';
                 echo'<label>';
				 $y=$row2['comment'];
				 echo $y;
				 echo '</label>';
              echo'</div>';
           echo'</div>
        </div>';
		$i=$i+1;
			  
	  }}
	  else{
	  echo 'NO';}
		?>
     </div>
  </div>

  <br />
  <div class="container" style="margin-top: 1%; margin-bottom: 1%;">
      <div>
	  
          <div class="form-group">
              <label for="recipient-name" class="col-form-label startheading">Leave Comment:</label>
          </div>
		  
    <div >
      <input class="hidden" type="text" readonly class="form-control-plaintext" id="prodid" value="1">
    </div>
	
    
    <div >
      <input class="hidden" type="text" readonly class="form-control-plaintext" id="username" value="Distant">
    </div>
          <div class="form-group">
              <label for="message-text" class="col-form-label startheading">Message:</label>
              <textarea class="form-control" id="message-text" rows="5"></textarea>
          </div>
      
	  
	  <div class="form-group">
    <label for="exampleFormControlSelect1">Please provide a Rating</label>
    <select class="form-control" id="rating">
      <option>onestar</option>
      <option>twostar</option>
      <option>threestar</option>
      <option>fourstar</option>
      <option>fivestar</option>
    </select>
  </div>
      <div class="row" style="margin-left: 0.2%">
          <div class="form-group"><button type="button" class="btn btn-primary" id="comment" onclick="insertComments();">Comment</button></div>
      </div>
  </div>
     <div class="container">
      <div>
          <span class="heading" style="color: #000">User Rating</span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <p><?php echo $average ;?> average based on <?php echo $total ;?> reviews.</p>
          <hr style="border:3px solid #f1f1f1">
      </div>
      <div class="row">
          <div class="side">
              <div class="startheading">5 star</div>
          </div>
          <div class="middle">
              <div class="bar-container">
                  <div class="bar-5"></div>
              </div>
          </div>
          <div class="side right">
              <div class="startheading"><?php echo $fiveStar ;?></div>
          </div>
          <div class="side">
              <div class="startheading">4 star</div>
          </div>
          <div class="middle">
              <div class="bar-container">
                  <div class="bar-4"></div>
              </div>
          </div>
          <div class="side right">
              <div class="startheading"><?php echo $fourStar ;?></div>
          </div>
          <div class="side">
              <div class="startheading">3 star</div>
          </div>
          <div class="middle">
              <div class="bar-container">
                  <div class="bar-3"></div>
              </div>
          </div>
          <div class="side right">
              <div class="startheading"><?php echo $threeStar ;?></div>
          </div>
          <div class="side">
              <div class="startheading">2 star</div>
          </div>
          <div class="middle">
              <div class="bar-container">
                  <div class="bar-2"></div>
              </div>
          </div>
          <div class="side right">
              <div class="startheading"><?php echo $twoStar ;?></div>
          </div>
          <div class="side">
              <div class="startheading">1 star</div>
          </div>
          <div class="middle">
              <div class="bar-container">
                  <div class="bar-1"></div>
              </div>
          </div>
          <div class="side right">
              <div class="startheading"><?php echo $oneStar ;?></div>
          </div>
      </div>
  </div>
  <br />
  <br />


  </body>
</html>