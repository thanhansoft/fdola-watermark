<?Php
header ("Content-type: image/jpg");

///// Create the image ////////
$font_height=imagefontheight(5);
$font_width=imagefontwidth(5);
$text='Thanhansoft.com'; // Text string can be changed to reflect width of canvas to change. 

$width = (strlen($text)*$font_width)+10 ; // Canvas width = String with,  added with some margin 
$height=$font_height + 10;  //  Canvas height = String height, added with some margin 

$im = @ImageCreate ($width,$height)
or die ("Cannot Initialize new GD image stream");

$background_color = ImageColorAllocate ($im, 204, 204, 204); // Assign background color
$text_color = ImageColorAllocate ($im, 51, 51, 255);      // text color is given 

ImageString($im,5,5,$height/3,$text,$text_color); // Random string  from session added 

ImageJpeg ($im); // image displayed
imagedestroy($im); // Memory allocation for the image is removed. 