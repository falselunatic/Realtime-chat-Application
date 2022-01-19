<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form signup">
         <header>iChat-Realtime Chat Application <i class="fas fa-dove"></i></header>
         <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
             <div class="error-txt"></div>
             <div class="name-details">
             <div class="field input">
                 <label>First Name</label>
                 <input type="text"  name="fname" placeholder="First Name" Required>
             </div>
             <div class="field input">
                 <label>Last Name</label>
                 <input type="text"  name="lname" placeholder="Last Name" Required>
             </div>
           </div>
             <div class="field input">
                 <label>E-mail address</label>
                 <input type="text" name="email" placeholder="Enter your e-mail address" Required>
             </div>
             <div class="field input">
                 <label>Password<i class="fas fa-eye"></i></label>
                 <input type="password" name="password" placeholder="Enter new password" Required>  
             </div>
             <div class="field image">
                 <label>Select image</label>
                 <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
             </div>
             <div class="field button">
                 <input type="submit" value="continue to chat">
             </div>
        </form>
        <div class="link">Already signed up?<a href="login.php">Login now</a> </div>
        </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
</body>
</html>