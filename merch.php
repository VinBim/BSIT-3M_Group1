<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchandise</title>
    <link href="tp.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<script>
        

 function fan()
{

 var quanFan=parseFloat(document.getElementById('fanId').value);
  var x;
  var y = 0;
  x=256*quanFan;

  if(!isNaN(x))
  {
    document.getElementById('opFan').readOnly = true; 
    document.getElementById('opFan').value = "₱"+ x;
  }
  else{
    document.getElementById('opFan').value = "0";
  }

  
}


function frame() 
{
  var quanframe=parseFloat(document.getElementById('frid').value);
  var f;
  f=299*quanframe;

  if(!isNaN(f))
  {
    document.getElementById('opframe').readOnly = true; 
    document.getElementById('opframe').value = "₱"+ f;
  }
  else{
    document.getElementById('opframe').value = "0";
  }
}

function shirt() 
{
  var quanShirt=parseFloat(document.getElementById('shirtId').value);
  var s;
  s=259*quanShirt;

  if(!isNaN(s))
  {
    document.getElementById('opShirt').readOnly = true; 
    document.getElementById('opShirt').value = "₱"+ s;
  }
  else{
    document.getElementById('opShirt').value = "0";
  }

}

function tumbler() 
{
  var quanTumbler=parseFloat(document.getElementById('tumblerId').value);
  var t;
  t=438*quanTumbler;

  if(!isNaN(t))
  {
    document.getElementById('opTumbler').readOnly = true; 
    document.getElementById('opTumbler').value = "₱"+ t;
  }
  else{
    document.getElementById('opTumbler').value = "0";
  }
}

function umbrella() 
{
  var quanUmbrella=parseFloat(document.getElementById('umbrellaId').value);
  var u;
  u=169*quanUmbrella;

  if(!isNaN(u))
  {
    document.getElementById('opUmbrella').readOnly = true; 
    document.getElementById('opUmbrella').value = "₱"+ u;
  }
  else{
    document.getElementById('opUmbrella').value = "0";
  }
}

function LOGIN() {
	window.open("auth/LOGIN HTML.php", "PopupWindow", "width=600,height=400,scrollbars=yes");
}
</script>


   
	<nav>
		<div class="navbar">
               <a href="home.php">Home</a>
               <a href="exercise1.php">Our Team</a>
			   <a href="certif.htm">Certificates</a>
			   <a href="port.htm">Portfolio</a>
               <a href="merch.php">Merch</a>
			   <a href="coms/contact.php">Contact Us</a>
			   <a href="Check.php">Check this out!!</a>
			   <a id="user" class="fa fa-user" onclick="LOGIN()"></a>
		</div>
	</nav>
    
    <div class="header">
        <h1>Group 1<br>Merchandise</h1>
    </div>



    <div class="container">


        <div class="box">
             <div class="member">
                   <img class="merch" src="fan449.jpg" alt="fan">
                   <?php echo "<h3>₱256</h3>" ?>

                    <label for="">Quantity:</label>
                      <input type="text" id="fanId" onkeyup="fan()">
                     <br>
                     <label for=""> Amount:</label>
                    <input type="" id="opFan" name="">
 


</div>
        
        </div>


        <div class="box">
        <img class="merch" src="frame735.jpg" alt="frame">
        <?php echo "<h3>₱299</h3>" ?>
        <label for="">Quantity:</label>
                    <input type="text" id="frid" onkeyup="frame()">
                     <br>
                     <label for=""> Amount:</label>
                    <input type="" id="opframe" name="">


            
    </div>
         <div class="box">
           <img class="merch" src="shirt250.jpg" alt="shirt">
            <?php echo "<h3>₱259</h3>" ?>

            <label for="">Quantity:</label>
            <input type="text" id="shirtId" onkeyup="shirt()">
            <br>
            <label for=""> Amount:</label>
            <input type="" id="opShirt" name="">
         </div>          
     


        <div class="box">
            <img class="merch" src="tmblr380.jpg" alt="tmblr">
            <?php echo "<h3>₱438</h3>" ?>

          <label for="">Quantity:</label>
          <input type="text" id="tumblerId" onkeyup="tumbler()">
          <br>
          <label for=""> Amount:</label>
          <input type="" id="opTumbler" name="">

            


        </div>


        <div class="box">
        <img class="merch" src="ubrlla268.jpg" alt="ubrlla">
        <?php echo "<h3>₱169</h3>" ?>

            <label for="">Quantity:</label>
            <input type="text" id="umbrellaId" onkeyup="umbrella()">
            <br>
            <label for=""> Amount:</label>
            <input type="" id="opUmbrella" name="">

        </div>

    </div>

   
	<hr>
    
	<footer>
		<p style="margin-left:30px;color:#223030;"><small>Made by Abalain, Almaida, Catimbang, Cuaño & Morante 2024 © Copyright Intended</small></p>
	</footer>

    
	</body>
</html>
