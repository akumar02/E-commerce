
 <?php
  include 'connect.php';  /* this is the connection page */
  include 'header.php';  
  if(isset($_POST['submit'])){             // checking whether form has been submited or not ,using isset() function
   $name=$_POST['name'];
   $email=$_POST['email'];
   $about=$_POST['about'];
   $interest=$_POST['interest'];
    if(empty($name) || empty($email) || empty($about) || empty($interest)){   // checking whether all the data fields are empty.
   ?>
    <script>
    alert("Please fill all data");
    </script>
     <?php
     //header("location:home.php");  the data is empty here , so redirecting back to the home page.
     }
     else{
     $insert="INSERT INTO candidate(name,email,about,interest) VALUES('$name','$email','$about','$interest')";
     $data=mysqli_query($connect,$insert);
       if($data){
       ?>
         <script>
         alert("Data Recorded, we will contact u soon");
         </script>
       <?php
        }
      }
  }
 ?>
<div class="form">
  <form method="post" action="<?php $_PHP_SELF ?>" onsubmit="validateform()" name="form">
    <fieldset>
      <legend><span class="number"></span>Medicine detail</legend>
      <input type="text" name="name" placeholder="Your Name *">
      <input type="email" name="email" placeholder="Your Email *">
      <input type="text" name="storename" placeholder="Shop name *">
      <input type="text" name="number" placeholder="Mobile-number *">
      <textarea name="about" placeholder="Address"></textarea>
      <label for="job">PlaceOrder</label>
       <select id="job" name="interest">
        <optgroup label="Company-Name">
          <option value="interface">UI&UX</option>
          <option value="front">front-end</option>
          <option value="Front-Back">front/Back End</option>
        </optgroup>
        <optgroup label="Other-company">
          <option value="info">Information gathering</option>
          <option value="edit">Rega-Junior</option>
          <option value="edit">Combiflam</option>
          <option value="edit">Corex</option>
          <option value="edit">Clobeta</option>
        </optgroup>
       </select>      
    </fieldset>
      <input type="submit" value="submit" name="submit" />
      <input type="reset" value="reset" name="reset" />
  </form>
</div>

<?php
 include 'footer.php';
?>

