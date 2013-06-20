<html>
  <head>
		<title>Even Fibonacci Numbers</title>
	</head>
	<body>
		<h1>Even Fibonacci Numbers below $max_num</h1>
		<br />
		<br />
		<div>
			<h2>1.  Rudimentary Fibonacci Sequence</h2>
			<div>
				<?php
					// Create array() to hold values
					$array_fib_rud = array();
					// Create first integers in the fibonacci sequence
					$num1 = 1;
					$num2 = 2;
					// arrary_push() those values into the array()
					array_push($array_fib_rud, $num1, $num2);
					// Add the integers together to get the next value in the sequence
					$num3 = $num1 + $num2;
					// arrary_push() the new value into the array()
					array_push($array_fib_rud, $num3);
					// print_r() the array()
					print_r($array_fib_rud);
					echo "<br />";
					// implode() the array() to show values in user friendly way
					echo implode(", ", $array_fib_rud);
				?>
			</div>
		</div>
		<div>
			<h2>2.  Fibonacci Sequence with ALL Values below $max_num</h2>
			<div>
				<?php
					// Maximum number this Fibonacci Sequence will reach
					$max_num = 4000000;
					// Create array() to hold values
					$array_fib = array();
					// Create first integers in the fibonacci sequence
					$num1 = 1;
					$num2 = 2;
					// arrary_push() those values into the array()
					array_push($array_fib, $num1, $num2);
					// Create a while() loop to start collecting fibonacci values
					while($num2 <= $max_num) {
						// Add the integers together to get the next value in the sequence
						$num3 = $num1 + $num2;
						// Test if $num3 is less than or equal to the $max_num
						if ($num3 <= $max_num) {
							// IF the $num3 is less than or equal to $max_num array_push() the $num3 value
							array_push($array_fib, $num3);
						}
						// Set $num1 to $num2 to continue the fibonacci sequence
						$num1 = $num2;
						// Set $num2 to $num3 to continue the fibonacci sequence
						$num2 = $num3;
					}
					// print_r() the array()
					print_r($array_fib);
					echo "<br /><br />";
					// implode() the array() to show values in user friendly way
					echo implode(", ", $array_fib);
				?>
			</div>
		</div>
		<div>
			<h2>3.  Fibonacci Sequence with EVEN Values below $max_num</h2>
			<div>
				<?php
					// Maximum number this Fibonacci Sequence will reach
					$max_num = 4000000;
					// Create array() to hold even values
					$array_fib_even = array();
					// Create first integers in the fibonacci sequence
					$num1 = 1;
					$num2 = 2;
					// arrary_push() those values into the array()
					array_push($array_fib_even, $num1, $num2);
					// Create a while() loop to start collecting fibonacci values
					while($num2 <= $max_num) {
						$num3 = $num1 + $num2;
						// Test if $num3 is less than or equal to $max_num AND if $num3 is even
						if ($num3 <= $max_num && $num3 % 2 == 0) {
							// IF all is true then array_push() the $num3 value
							array_push($array_fib_even, $num3);
						}
						// Set $num1 to $num2 to continue the fibonacci sequence
						$num1 = $num2;
						// Set $num2 to $num3 to continue the fibonacci sequence
						$num2 = $num3;
					}
					// print_r() the array()
					print_r($array_fib_even);
					echo "<br /><br />";
					// implode() the array() to show values in user friendly way
					echo implode(", ", $array_fib_even);
				?>
			</div>
		</div>
	</body>
</html>
