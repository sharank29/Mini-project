  <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.button {
	background-color: #0a0a0a;
	border: none;
    color: white;
    padding: 5px 15px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    
		}
.button:hover{
  box-shadow: 0 5px 10px 0 rgba(0,0,0,1);
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,5);
}

.container {
  padding: 2px 16px;
}
.form{
    position: static;
    width: 550px;
    height: 100%;
    padding: 70px 10px;

  }
</style>
</head>
<body><center><h1>Welcome Admin</h1>
    <h4>Enter your credentials</h4>
   <div class="card"> <div class="container"><form action="admin_script.php" method="post" class="form">
        <h2>Login</h2>
        <?php
        if(isset($_GET['error']))
        {
            $error = $_GET['error'];
            echo "$error<br><br>";
        }
        ?>
        <label>
          <span>User Name</span><br>
          <input type="text" name="user" required>
        </label>
        <label><br><br>
          <span>Password</span><br>
          <input type="password" name="password" required>
        </label><br><br><br>
        <button class="button" type="submit">Login</button>
       
  
       
      
    </form></div>
</div>
<br><br><br>
<button class="button" onclick="window.location.href='index.html'">Home Page</button>
</center>
</body>
</html> 
