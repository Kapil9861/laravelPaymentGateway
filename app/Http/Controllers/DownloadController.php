<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function downloadAAB()
    {
        $filePath = public_path().'/assets/aab/app-release.aab';
        $headers = ['Content-Type: application/octet-stream'];
        $fileName = 'SajiloHisab.aab';

        return response()->download($filePath, $fileName, $headers);
    }
}
