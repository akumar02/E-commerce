
<?php
include 'connect.php';  
include 'header.php';
if(!isset($_GET['id'])){
 header("Location: home.php");
}
$id=$_GET['id'];
$item_sql="SELECT * FROM item WHERE md5(id)='$id'";
if($item_query=mysqli_query($connect,$item_sql)){
  $row=mysqli_fetch_array($item_query);
 ?>
<head><title><?php echo $row['name'];?></title></head>


<div class="item">

<div class="item2">
                   <h2><p class="small"><?php echo $row['name'];?></p></h2>
                   <p class="small1">M.R.P:&nbsp;&nbsp;&nbsp;Rs&nbsp;<?php echo $row['price'];?></p>
                <p class="small2">Trade Rate:&nbsp;&nbsp;&nbsp;Rs&nbsp;<?php echo $row['trade'];?></p>
                   <h4>Product Description</h4><p class="small3"><?php echo $row['description'];?></p>
                   <p class="small4">Bonus:<?php echo $row['bonus'];?></p>
</div> 


<!-- to arrange the div properly item2 is above -->
<div class="item1"><image id="popup" src="<?php echo $row['image']; ?>" height="400px"></div>

</div>

<?
}

?>


<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('popup');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>

<?php
 include 'footer.php';
?>


