<?php

$arr = [1, 4, 3, 6, 7, 8, 9, 0, 1, 2, 3, 4, 5];
$arr2 = [];
function adjustHeap(&$arr, $i, $len)
{
    $change = true;
    while ($change && $i < $len - 1 && (isset($arr[2 * $i + 1]) || isset($arr[2 * $i + 2]))) {
        if ($arr[2 * $i + 1] > (isset($arr[2 * $i + 2]) ? $arr[2 * $i + 2] : -INF)) {
            if ($arr[2 * $i + 1] > $arr[$i]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[2 * $i + 1];
                $arr[2 * $i + 1] = $temp;
                $i = 2 * $i + 1;
            } else {
                $change = false;
            }
        } else {
            if ($arr[2 * $i + 2] > $arr[$i]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[2 * $i + 2];
                $arr[2 * $i + 2] = $temp;
                $i = 2 * $i + 2;
            } else {
                $change = false;
            }
        }
    }
}

function buildHeap(&$arr)
{
    $len = count($arr);
    for ($i = ceil(($len - 1) / 2) - 1; $i >= 0; $i--) {
        adjustHeap($arr, $i, $len);
    }
}

/*
 * 主要理解好二叉堆的概念。
 *
 * 跳过第一步构建，假设我们已经构建好了一个二叉堆，那么我们将堆顶元素
 * 置入其他数组，将堆最后的那个元素放到堆顶，那么现在堆顶的左右子树都
 * 满足堆的定义，所以现在需要编写代码使得变化后的树成为堆，以此类推将
 * 所以元素拿出即完成排序。
 *
 * 我们再看过来第一步的构建，我们其实需要做的是让树中每个最小单位的树
 * 都成为堆，所以我们从最后一个非叶子节点开始构建堆，到它的前一个节点
 * 以此类推再一直到根节点，这样就完成了二叉堆的构建。
 */
function HeapSort(&$arr, &$arr2)
{
    buildHeap($arr);

    while (count($arr)) {
        $len = count($arr);
        $arr2[] = $arr[0];
        $arr[0] = $arr[$len - 1];
        unset($arr[$len - 1]);

        if ($len - 1) adjustHeap($arr, 0, $len - 1);
    }
}

HeapSort($arr, $arr2);
print_r($arr2);

