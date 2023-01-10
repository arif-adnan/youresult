<html>
<head>
    <title>Youresult</title>
<link rel="stylesheet" href="csss/style.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix" animate slideInDown>
            <ul class="main-nav" >
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Admin Login</a></li>
                <li><a href="admin/contactus.php">Contact</a></li>
                <li><a href="admin/aboutus.php">About Us</a></li>
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form method="post" action="result.php">
          <table class="table">
              <br>
              <h2 class="search">Get Your Result Here!</h2>
              <br><br>
            <tr>
                <th class="name1">Roll No.</th>
                <td class="name2"><input type="text" name="rollno" required class="box1" placeholder="Enter your roll no."/></td>
            </tr>
            <tr>
                <th class="class1">Class</th>
                <td class="class2"><input type="text" name="std" required class="box2" placeholder="Enter your class"/></td>
            </tr> 
            <tr>
            <td colspan="2"><input type="submit" name="submit" value="Submit" class="submit"/></td>
            </tr>
          </table>
       </form>
      </div>
    </header>
    
</body>
</html>
