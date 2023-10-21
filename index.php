<?php
require 'vendor/autoload.php'; 
use Intervention\Image\ImageManager; 
$manager = new ImageManager(['driver' => 'imagick']);
$image = $manager->make(('C:/OSPanel/domains/test777/1.jpg'))->resize(300, 200)->save('C:/OSPanel/domains/test777/mini.jpg');
?>