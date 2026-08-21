<?php

// โปรแกรมบวกเลขง่าย ๆ — รับตัวเลข 2 ตัวจาก command line
// วิธีใช้: php add.php 3 5

if ($argc !== 3) {
    echo "วิธีใช้: php add.php <เลขตัวที่ 1> <เลขตัวที่ 2>\n";
    exit(1);
}

if (!is_numeric($argv[1]) || !is_numeric($argv[2])) {
    echo "กรุณาใส่ตัวเลขเท่านั้น\n";
    exit(1);
}

$a = $argv[1] + 0;
$b = $argv[2] + 0;

echo "$a + $b = " . ($a + $b) . "\n";
