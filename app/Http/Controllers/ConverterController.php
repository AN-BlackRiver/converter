<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileRequest;

class ConverterController extends Controller
{

    public function convert(FileRequest $request){
        if ($request->hasFile('file')){

            $file = $request->file('file');

            $file->store('files');

            $file = fopen($file->getRealPath(), "r");

            for ($i = 0; $i < 10; $i++){

            echo iconv('Windows-1251', 'UTF-8', fgets($file)).'<br>';

            }
        }

    }


}
