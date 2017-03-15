<!Doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="style.css" rel="stylesheet" type="text/css">
<link href="body.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="navbar.css">
</head> 
<body> 
<div class="header">
<div class="logo"><img src="logo.jpg" height="60px" width="100%"></div>
<div class="navbar">       
        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop" />
            <ul class="menu"><b>
                <li><a href="order.php">Order</a></li>
                <li><a href="contact.php">Contact us</a></li>
                <li><a href="index.php">Home</a></li></b>
            </ul>
</div>
<div class="search">
        <form method="POST" action="search.php" class="formokk">
            <input type="text" placeholder="search medicine" name="medicine" width="150px"/>
            <input type="submit" value="search" name="search" />
        </form>
</div>
</div>
   
</body>
</html>

