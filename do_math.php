<?php

require_once('./math.php');

echo (new Math())->add(1,2);
echo (new Math())->add(1,2,3);
echo (new Math())->add(1,2,4,5);

echo (new Math())->subtract(3,1);
echo (new Math())->subtract(3,2,1);
echo (new Math())->subtract(4,3,1);

echo (new Math())->multiply(1,2);
echo (new Math())->multiply(2,3,4);
echo (new Math())->multiply(2,1,4);

echo (new Math())->divide(10,2);
echo (new Math())->divide(20,5,2);
echo (new Math())->divide(4,1);

