# fdola-watermark

php watermark based on phpwatermark Josemar Davi Luedke http://github.com/josemarluedke/Watermark/apply

Install

use Fdola\FdolaWatermark\Watermark;

$watermark = new Watermark();
$watermark->apply('from.jpg', 'to.jpg', 'logo.png', 3, 'image', 10); //use image
//$watermark->withText('from.jpg', 'to.jpg', 'Thanhansoft', 3); //use text