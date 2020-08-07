<?php

function tree(array $data, &$tree = array(), $level = 0) {
    // init
    if (!isset($tree[$level])) $tree[$level] = array();

    foreach ($data as $key => $value) {
        if (is_array($value)) {
            $tree[$level][] = $key;
            tree($value, $tree, $level+1);
        }
        else {
            $tree[$level][] = $value;
        }
    }
}

?>
