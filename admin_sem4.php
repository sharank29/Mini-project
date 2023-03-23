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
</style>
</head>
<body>
<center>
<br>
<h1>Semester 4</h1>
<h4>Select your subject</h4>
<div class="card">
<br>
<h2>Subject1(18MAT41)</h2>
<br>
<br>
<form action="upload.php?sem=sem4&sub=18MAT41" method="post" class="form" enctype=multipart/form-data>
    <label>
    <?php
      if(isset($_GET['sub']) == '18MAT41')
      {
        echo "successfully uploaded<br><br><br>";
      }
      
      ?>
      <span>Upload File</span><br><BR>
      <input type="file" name="file" >
    </label>
    <button class="button">Upload</button>
</form>
<br>
<br>
</div>
<br>
<br>
<div class="card">
<br>
<h2>Subject2(18CS42)</h2>
<br>
<br>
<form action="upload.php?sem=sem4&sub=18CS42" method="post" class="form" enctype=multipart/form-data>
    <label>
    <?php
      if(isset($_GET['sub']) == '18CS42')
      {
        echo "successfully uploaded<br><br><br>";
      }
      
      ?>
      <span>Upload File</span><br><BR>
      <input type="file" name="file" >
    </label>
    <button class="button">Upload</button>
</form>
<br>
<br>
</div>
<br>
<br>
<div class="card">
<br>
<h2>Subject3(18CS43)</h2>
<br>
<br>
<form action="upload.php?sem=sem4&sub=18CS43" method="post" class="form" enctype=multipart/form-data>
    <label>
    <?php
      if(isset($_GET['sub']) == '18CS43')
      {
        echo "successfully uploaded<br><br><br>";
      }
      
      ?>
      <span>Upload File</span><br><BR>
      <input type="file" name="file" >
    </label>
    <button class="button">Upload</button>
</form>
<br>
<br>
</div>
<br>
<br>
<div class="card">
<br>
<h2>Subject4(18CS44)</h2>
<br>
<br>
<form action="upload.php?sem=sem4&sub=18CS44" method="post" class="form" enctype=multipart/form-data>
    <label>
    <?php
      if(isset($_GET['sub']) == '18CS44')
      {
        echo "successfully uploaded<br><br><br>";
      }
      
      ?>
      <span>Upload File</span><br><BR>
      <input type="file" name="file" >
    </label>
    <button class="button">Upload</button>
</form>
<br>
<br>
</div>
<br>
<br>
<div class="card">
<br>
<h2>Subject5(18CS45)</h2>
<br>
<br>
<form action="upload.php?sem=sem4&sub=18CS45" method="post" class="form" enctype=multipart/form-data>
    <label>
    <?php
      if(isset($_GET['sub']) == '18CS45')
      {
        echo "successfully uploaded<br><br><br>";
      }
      
      ?>
      <span>Upload File</span><br><BR>
      <input type="file" name="file" >
    </label>
    <button class="button">Upload</button>
</form>
<br>
<br>
</div>
<br>
<br>
<div class="card">
<br>
<h2>Subject6(18CS46)</h2>
<br>
<br>
<form action="upload.php?sem=sem4&sub=18CS46" method="post" class="form" enctype=multipart/form-data>
    <label>
    <?php
      if(isset($_GET['sub']) == '18CS46')
      {
        echo "successfully uploaded<br><br><br>";
      }
      
      ?>
      <span>Upload File</span><br><BR>
      <input type="file" name="file" >
    </label>
    <button class="button">Upload</button>
</form>
<br>
<br>
</div>
<br>
<br>
</body>
</htlm>