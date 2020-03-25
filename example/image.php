<?php

include '../src/Fdola/FdolaWatermark/Watermark.php';
use Fdola\FdolaWatermark\Watermark;

$watermark = new Watermark();
$watermark->apply('from.jpg', 'to.jpg', 'logo.png', 3, 'image', 10);
//$watermark->withText('from.jpg', 'to.jpg', 'Thanhansoft', 3);

# Parameters of method apply
# 1: From image, original image
# 2: Target image, image destination
# 3: Watermark image
# 4: Watermark position number
# 		 * 0: Centered
#		 * 1: Top Left
#		 * 2: Top Right
#		 * 3: Footer Right
#		 * 4: Footer left
#		 * 5: Top Centered
#		 * 6: Center Right
#		 * 7: Footer Centered
#		 * 8: Center Left

?>

<img src="to.jpg" />