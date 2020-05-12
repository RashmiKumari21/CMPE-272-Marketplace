# Instructions

### Adding activity on any page

Use the below file `db_adduseractivity.php` to add the user activity on any page. Follow the below steps:


* Use curl or jquery and create a post request.
* API accepts 4 parameter `username`, `companyname`, `pagename`, `pagelink`


Use the below file `db_getuseractivity.php` to get the user activity information. Follow the below steps:

* Use curl or jquery and create a post request.
* API accepts 1 parameter `username` and display all record associated to the user.


Use `mostVisitedPages.php` code to get the bar chart visualization base on cookie implementation.

```
The above file assumes that you have added below code to add cookies while clicking on the company link

function add_cookie($cookie_name, $time) {
    $timeout_value = $time;
    $value = 1;
    if (trim($timeout_value) == ""){
        $timeout_value = time() + (86400 * 30)
    }

    if (!isset($_COOKIE[$cookie_name])) {
        $value = 1;
    } else {
        $value = ++$_COOKIE[$cookie_name];
    }

    setcookie($cookie_name, $value, $timeout_value) or die('unable to create cookie');

    return $content;
}

Cookies are used to show the bar chart visualization

```


### Table structure

Please add your product links in products table

```
DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) DEFAULT NULL,
  `product_url` varchar(300) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `companyname` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_activity`
--

DROP TABLE IF EXISTS `user_activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `companyname` varchar(200) DEFAULT NULL,
  `pagename` varchar(100) DEFAULT NULL,
  `pagelink` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
```


