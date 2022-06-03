<?php

ob_start();

echo "Hello";
echo "World";

ob_clean();
ob_flush();