<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home1Controller extends Controller
{
    public function getArr(){
        $contentArr = [
            'name' => 'Laravel 8.x',
            'lesson' => 'Khóa học lập trinh Laravel',
            'academy' => 'Unicode Academy'
        ];
        return $contentArr;
    }

    public function downloadImage(Request $request){
        // dd($request->image);
        if (!empty($request->image)){
            $image = trim ($request->image);
            $fileName = 'image_'.uniqid().'.jpg'; // Lưu tên ảnh theo random
            // $fileName = basename($image);

            // return response()->streamDownload(function() use ($image){  // Khi muốn download ảnh về 
            //     $imageContent = file_get_contents($image);
            //     echo $imageContent;
            // }, $fileName);  // Khi muốn lưu tên ảnh gốc 

            return response()->download($image, $fileName);
        }
    }

    public function downloadDoc(Request $request) {
        if (!empty($request->file)){
            $file = trim ($request->file);
            $fileName = 'tai-lieu_'.uniqid().'.pdf'; // Lưu tên ảnh theo random
            // $fileName = basename($image);

            // return response()->streamDownload(function() use ($image){  // Khi muốn download ảnh về 
            //     $imageContent = file_get_contents($image);
            //     echo $imageContent;
            // }, $fileName);  // Khi muốn lưu tên ảnh gốc 
            $headers = [
                'Content-Type' => 'application/pdf'
            ];
            return response()->download($file, $fileName, $headers);
        }
    }
}
