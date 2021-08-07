<?php

$cases = [
	[
		'in' => [1, 4, 3, 2, 3, 4], 
		'expected' => [1, 4],
	],
	[
		'in' => [1, 2, 3, 101, 4, 5], 
		'expected' => [3, 5],
	],
	[
		'in' => [2, 1, 0, 3, 4, 5, 6, 7, 8, 9],
		'expected' => [0, 2],
	],
	[
		'in' => [3, 2, 1], 
		'expected' => [0, 2],
	],
	[
		'in' => [1, 2, 3], 
		'expected' => [null, null],
	],
	[
		'in' => [1, 1, 1, 1, 1], 
		'expected' => [null, null],
	],
	[
		'in' => [1], 
		'expected' => [null, null],
	],
	[
		'in' => [], 
		'expected' => [null, null],
	],
];

foreach($cases as $case) {
	test($case['in'], $case['expected']);
}

/**
 * @param int[] $in
 * @param int[] $expected
 */
function test($in, $expected)
{
	$actual = findUnsortedSubarray($in);

	print_r($in);

	if (assert($actual->getLeft() == $expected[0])) {
		echo "left - ok\n";
	}

	if (assert($actual->getRight() == $expected[1])) {	
		echo "right - ok\n";
	}

	echo "---------------\n";
}