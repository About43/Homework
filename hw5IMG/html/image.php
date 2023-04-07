<?php
require '../vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

$dog = Image::make('image.jpg');

$dog->resize(200,null,function (Intervention\Image\Constraint $constraint) {
    $constraint->aspectRatio();
});

$dog->text('Собака',$dog->getWidth() - 15,$dog->getHeight() - 15,function (Intervention\Image\AbstractFont $font) {
    $font->size(20);
    $font->color([2555, 255, 255, 0.6]);
    $font->file('verdana.ttf');
    $font->align('right');
    $font->valign('bottom');
});

echo $dog->response('jpg');