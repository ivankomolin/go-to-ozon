<?php

//test
include 'test.php';

/**
 * @param int[] $in
 */
function findUnsortedSubarray(array $in): ResultDto
{
    $sorted = sortCount($in);

    $result = array_diff_assoc($sorted, $in);

    return new ResultDto(array_key_first($result), array_key_last($result));
}

/**
 * @param int[] $in
 * @return int[]
 */
function sortCount(array $in): array
{
    $sorted = [];
    if (count($in) > 1) {
        $counter = [];
        foreach ($in as $value) {
            $counter[$value] = isset($counter[$value]) ? $counter[$value] + 1 : 1;
        }

        $min = min($in);
        $max = max($in);
        for ($i = $min; $i <= $max; $i++) {
            if (isset($counter[$i])) {
                for ($j = 0; $j < $counter[$i]; $j++) {
                    $sorted[] = $i;
                }
            }
        }
    }

    return $sorted;
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