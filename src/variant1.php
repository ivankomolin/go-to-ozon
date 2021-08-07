<?php

//test
include 'test.php';

/**
 * @param int[] $in
 */
function findUnsortedSubarray(array $in): ResultDto
{
    $sorted = $in;
    sort($sorted, SORT_NUMERIC);
    $result = array_diff_assoc($sorted, $in);

    return new ResultDto(array_key_first($result), array_key_last($result));
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