<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Week 1 Code Challenge</title>
    </head>
    <body>
	<h2>Welcome to the Code Challenge!</h2>
	
		<?php
		
		if (isset($_POST['submit'])) {
		
			// The main chunk of code to do the processing here is missing
			// you must fill in this code.
			// Get the name entered by the user. Figure out a way to reverse
			// the name, like a mirror image, and display the name back to the user.
      $reversedName = strrev($_POST['fName']);
		
			echo "<h3>The mirror image of your name is... $reversedName</h3><br><br>";
			
			// display the reversed name here
			
			echo "<br><br><br>";
		}
            
        ?>
        
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

            <label for="fName">Please enter your name:</label>
            <input type="text" name="fName" id="name" value="">
             <br><br>


           <input type="submit" name="submit" value="Reverse!">
          
        </form>
    </body>
</html>