<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AssetController extends Controller
{
    /**
     * Display a file from the 'public' disk.
     *
     * @param  string  $path
     * @return \Illuminate\Http\Response
     */
    public function serve($path)
    {
        $filePath = public_path('assets/' . $path);

        if (!File::exists($filePath))
        {
            abort(404);
        }

        $file = File::get($filePath);

        $type = File::extension($filePath) == 'css' ? 'text/css' : File::mimeType($filePath);

        $headers = array('Content-Type: '.$type);




        if($type == 'text/css')
        {
            $file = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $file);
            $file = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '   '), '', $file);
            return response()->file($filePath, ['Content-Type' => $type]);
        }

        if($type == 'application/json')
        {
            $file = json_decode($file);
            $file = json_encode($file, JSON_PRETTY_PRINT);
        }

        if($type == 'image/jpeg' || $type == 'image/png' || $type == 'image/gif')
        {

            return response($file, 200, $headers);
        }

        return response($file, 200, $headers);
    }
}
