<?php
include 'connect.php';
include 'header.php';
if(isset($_POST['search'])){
	$name=$_POST['medicine'];
	if(empty($name)){   // checking whether all the data fields are empty.
   ?>
    <script>
    alert("Please fill all data");
    </script>
    <?php
   }
   else{
   	$select="SELECT * FROM item WHERE name LIKE '$name'";
   	$query=mysqli_query($connect,$select);
   	if(mysqli_num_rows($query)==0){
             echo "<p>"."<center>"."<h2>"."no item to display"."</h2>"."</center>"."</p>";
    }
   	else{
   		?>
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
                       <?php echo $row['name'];?><br>
                        <b><p>Price: Rs<?php echo $row['price']; ?></p></b><br>
                
                        </center>
		    </div>
	     <?php
	       }
	     ?>
        </div>
        <?php
        }
   }
}
?>
<?php
include 'footer.php';
?>
