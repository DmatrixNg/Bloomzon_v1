<?php

namespace App\Helpers;

use Image;

class FileHelper {

    static function upload_file($image, String $path) : String {

        $imageName = $image->getClientOriginalName();
        $url = $image->move(public_path($path), $imageName);
        
        return $imageName;

    }

    static function upload_image($image, $path) {
        
        $original_name = $image->getClientOriginalName();//get image original name
        $new_name      = md5(microtime() . $original_name) . '.' . 'png';  //geenrate new name for the image
        $make_image    = Image::make($image->getRealPath());// read image from temporary file
        // $img->fit(300, 200); //use this if you want to resize the image

        try {
            $make_image->save($path . $new_name, 60); //upload the image to server
            return $new_name; //return the name of the image
        } catch (\Exception $e) {
            throw $e;
        }

    }

    static function upload_multi_image($requests, $path) {
        
        foreach($requests as $request){
            $original_name = $request->getClientOriginalName();//get image original name
            $new_name      = md5(microtime() . $original_name) . '.' . 'png';  //geenrate new name for the image
            $make_image    = Image::make($request->getRealPath());// read image from temporary file
            // $img->fit(300, 200); //use this if you want to resize the image

            try {
                $make_image->save($path . $new_name, 60); //upload the image to server
                return $new_name; //return the name of the image
            } catch (\Exception $e) {
                return null;
            }

        }
        

    }

}
