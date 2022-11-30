<!DOCTYPE html>
<!-- 
    SITE 1101 Principles of Information Systems Fall 2022 
    (c)2022 by Rahida Asadli
    Submitted in partial fulfillment of the requirements of the course.
-->
<html>
    <head>
        <title> Contribution Table </title>    
        <link rel="stylesheet" type="text/css" href="index.css" />
    </head>
    <body>
        <nav>
            <a class="button" href="index.html">Home</a>
            <a class="button" href="table.html">Contribution Table</a>
            <a class="button" href="hoc.html">Hour of Code</a>
            <a class="button" href="form.html">Form</a>
            
        </nav>
        <section id="overlay">
          <form action="submission.txt" method="POST">
            <br>
            <h2 style="color:darkblue;"><strong>About You</strong></h2>
            <br>
            <label for="amount">How old are you?</label>
		    <input id="amount" type="number" step="1" min="1" max="100" name="amount">
            <br>   
            <label for="name">What is your name?</label>
            <input type="text" name="username" id="name" value="example:Araz">
            <br>
            <section class="bun-type">
              <label for="unis">What is your University?</label>
                <select id="uni" name="uni">
                  <option value="ADA">ADA</option>
                  <option value="BDU">BDU</option>
                  <option value="BANM">BANM</option>
                  <option value="Other">Other</option>
                </select>
             </section>
             <section id="like">
                <label for="doneness">How was our first web-site?</label>
                <br>
                <span>Very Bad</span>
                <input id="doneness" name="doneness" type="range" min="0" max="5" step="0.5">
                <span>Very Good</span>
              </section>
	      <section class="extrainfo">
                <label for="extra">Anything else you want to add?</label>
                <br>
                <textarea id="extra" name="textname" rows="4" cols="40"> </textarea>
             </section>
	     <section class="submission">
                <input type="submit" value="Submit">
             </section>
           </form>
        </section>
        <br>
        <br>
        <img src="https://www.ada.edu.az/frq-templates/assets/images/Ada_logo.svg" height="100" width="100" />
    </body>
</html>
<?php
   if(isset($_POST['textdata']))
   {
   $data=$_POST['textdata'];
   $fp = fopen('submission.txt', 'a');
   fwrite($fp, $data);
   fclose($fp);
   }
?>
