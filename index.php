<!DOCTYPE html>
<html>
<head>
	<title>Counting number</title>
</head>
<body>
	<form method="POST" action="">
		<h3>Counting number</h3>
		<p>we will count the number you're inserted above</p>
		<b>
			<p>Separate each number with comma (,) instead</p>
			<p>If Your number is decimal use dot (.) instead</p>
		</b>
		<input type="text" name="number">
		<input type="submit" name="submit">
	</form>
	<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		if (isset($_POST['number'])){

			$i_number = $_POST['number'];

			// if you have space, i will delete it
			str_replace(" ", '', $i_number);

			// now let's separate your input each commas
			$array_number = explode(',', $i_number);
			// filter empty string
			$array_number = array_diff( $array_number, array( '' ) );

			if (sizeof($array_number) == 0){

				echo "no input";
			} else {
				echo "your input is :";
				print_r($array_number);
				echo "<br /><br />";

				$count = 0;
				foreach ($array_number as $key => $value) {
					
					if ($value/1 <> 0){

						echo "now the value of counter is <b>" . $count . "</b>, adding <b>" . $value . "</b> to <b>" . $count . "</b> !<br/>";
						$count = $count + $value;
						echo "adding success, now the value of count is <b>" . $count . "</b><br/>";
					} else {

						echo "we figured that <b>" . $value . "</b> is not a number, skipping<br/>";

					}
				}

			}
	
		}
    }

	?>
</body>
</html>