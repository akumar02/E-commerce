
<?php
include 'connect.php';  /* this is the connection page */
include 'header.php';
$select="SELECT * FROM item";
$query=mysqli_query($connect,$select);
?>

<head><title>Raja Pharma</title></head>
<!-- main body code starts here -->
<div class="tagline">
    <div class="quote">The best place to find the medicine at very low Price</div>
	<div class="tagimage"><img src="raja1.jpg" width="100%" height="250px"/></div>
</div><hr>
<div class="info">
	<?php
	while($row=mysqli_fetch_array($query)){
		$id=md5($row['id']);
		?> 

		<!-- division that contains the information -->
		<div class="info1">     
                        <center>
	           <a href="item.php?page=item&id=<?php echo $id;?>">    
                        
			<img src="<?php echo $row['image'];?>" width="90%" height="180px"><br> 
			   </a> 
			            <b><p class="homename"><?php echo $row['name'];?></p>
                        Price: Rs<?php echo $row['price']; ?></b><br>
                
                        </center>

		</div>
	<?php
	}
	?>
</div>

<!-- body code ends here -->

<?php
include 'footer.php';
?>


