<?php

	$movies =
		["comedy" => ["Pink Panther", 
						"John English", 
							"See no evil hear no evil"],

		"action" => ["Die Hard",
						 "Expendables"],

		"epic" => ["The Lord of the rings"],

		"Romance" => ["Romeo and Juliet"]

		];


		foreach ($movies as $keys => $values) {

			echo "<br>";
			
				foreach ($values as $key => $value) {
					
						echo $keys . " " . $key . " " . $value ;

				}

				echo "<br>";
		}


?>