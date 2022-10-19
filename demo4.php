<html>
<body>

<?php
//while loop
			$fuel = 10;
			while($fuel>=1)
			{
				//keep driving
				echo "There's enough fuel<br>";
				$fuel=$fuel-1;
			}
			//while loop
			echo "<br><br>";
			
			
			//do...while
			$count = 1;
			do
				echo "$count times 12 is ". $count*12 . "<br>";
			while(++$count <= 12);
			echo "<br><br>";
			
			//for loop
			for ($count = 1; $count <= 12; ++$count)
			{	
				echo "$count times 12 is ". $count*12 . "<br";
			}
			echo "<br><br>";
			
			//Foreach loop
			$colors = array("red", "orange", "blue", "pink");
			foreach ($colors as $value)
			{
				echo "$value <br>";
			}
			echo "<br><br>";
			
			//break statement
			for ($x = 0; $x < 10; $x++)
			{
				if ($x == 4)
				{
					break;
				}
				echo "The number is: $x <br>";
			}
			echo "<br><br>";
			
			//continue statement
			for ($x = 0; $x < 10; $x++)
			{
				if ($x == 4)
				{
					continue;
				}
				echo "The number is: $x <br>";
			}
			echo "<br><br>";
			
			// Application 1
			for ($x = 0; $x < 15; $x ++)
			{
				if($x==11)
				{
				break;
				}
				echo " Hello; $x <br>";
			}
			echo "<br><br>";
			
			// Application 2
			for ($x = 3; $x < 10; $x ++)
			{
				if($x==11)
				{
				break;
				}
				echo " I LOVE MYSELF; $x <br>";
			}
?>
</body>
</html>