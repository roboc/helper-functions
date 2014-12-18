<?php

if (!function_exists('dump'))
{
    function dump($variable, $die = true)
	{
		//output array
		if (
			(is_scalar($variable))
			||
			(is_null($variable))
		) {
			if (is_null($variable)) {
				$output = '<i>NULL</i>';
			} elseif (is_bool($variable)) {
				$output = '<i>' . (($variable) ? 'TRUE' : 'FALSE') . '</i>';

			} else {
				$output = $variable;
			}
		} else // non-scalar
		{
			$output = print_r($variable, true);
		}

		if (defined("CLI_MODE")) {
			echo 'variable: ' . $output . "\n";
		} else {
			echo '<pre>variable: ' . $output . '</pre>';
		}

		if ($die) {
			die();
		}
	}
}