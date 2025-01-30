<?php

if(!file_exists('deletefile')){
    function deletefile($string){
        if(file_exists($string)){
            if(!empty($string)) {
                unlink($string);
            }
        }
    }
}

if(!file_exists('uploadfile')){
    function uploadfile($img, $title, $filepath) {

            $path = $img->getClientOriginalExtension();
            $fileName = time()."-".Str::slug($title);
           
            if($path == 'pdf' || $path == 'svg' || $path == 'webp' || $path == 'jiff') {
                $img->move(public_path($filepath),$fileName.".".$path);
                $imageUrl = $filepath.$fileName.'.'.$path;
            } else {
                $image = ImageResize::make($img);
                $image->encode('webp', 75)->save($filepath.$fileName.'.webp');
                $imageUrl = $filepath.$fileName.'.webp';
            }
            return $imageUrl;
    }
}


