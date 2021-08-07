<?php

//test
include 'test.php';

/**
 * @param int[] $in
 */
function findUnsortedSubarray(array $in): ResultDto
{
	$result = [];
	$tmp = 0;
	foreach($in as $key => $value)
	{
		if ($tmp <= $value) {
			$tmp = $value;
		} else {
			$result[] = $key;
		}
	}

	$left = null;
	$right = null;
	if (count($result) > 0) {
		$left = reset($result) - 1;
		$right = end($result);
	}

	return new ResultDto($left, $right);
}

class ResultDto
{
    /**
     * @var int|null
     */
    private ?int $left;

    /**
     * @var int|null
     */
    private ?int $right;

    /**
     * @param int|null $left
     * @param int|null $right
     */
    public function __construct(?int $left, ?int $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    /**
     * @return int|null
     */
    public function getLeft()
    {
        return $this->left;
    }

    /**
     * @return int|null
     */
    public function getRight()
    {
        return $this->right;
    }
}