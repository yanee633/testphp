<!DOCTYPE html>

<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ตุ๊ดตู่</title>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: 'Mitr', sans-serif;
}

/* Style the header */
header {
    background-color: #FFA07A;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 30%;
    height: 400px; /* only for demonstration, should be removed */
    background: #FFFFF0;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #FFEBCD;
    height: 400px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #FFA07A;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body>
<header>
	
  <h2>Run for ตุ๊ตตู่ กันเถอะ</h2>
  
 

</header>

<section>
  <nav>
   <!-- <ul>
      <li><a href="#">สมัคร Run</a></li>
      <li><a href="#">ตรวจสอบ BIB</a></li>
      <li><a href="#">ดูแผนที่ เส้นทางวิ่ง</a></li>
    </ul>-->
  </nav>
  
  <article>
    <h1>ลงทะเบียนวิ่งเพื่อตุ๊ดตู่</h1>
    <!--img src="img/runner.png" alt="run" width="50px" height="100px"-->
	 <form action="regresult.php" method="get">
  First name:
  <input type="text" name="firstname" >
  
  Last name:
  <input type="text" name="lastname" >
  <br>
  <br>
  E-mail: <input type="text" name="email">
  <br><br>
  
   sex:
  <input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female<br>
  <br>
   age:
  <input type="text" name="age" value="">
  <br>
  <br>
     โรคประจำตัว :
  <input type="radio" name="disease" value="มี" checked> มี
  <input type="radio" name="disease" value="ไม่มี"> ไม่มี<br>
   <br>
   size(เสื้อ)
   
   <select name="size">
    <option value="S">S</option>
    <option value="M">M</option>
    <option value="L">L</option>
    <option value="XL">XL</option>
  </select><br>
  <br>
  <center><input type="submit" value="Submit">
</form>
    <!--<p>กขคง กขคงกขคงกขคงกขคงกขคงกขคงกขคงกขคงกขคง  กขคงกขคงกขคงกขคง  กขคงกขคงกขคงกขคง   </p>
    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
 --> </article>
</section>

<footer>
  <p>Footer</p>
</footer>

    </body>
</html>