<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class ResumeController extends Controller
{
    public function download()
    {
        $filePath = public_path('resume.pdf');
        
        if (file_exists($filePath)) {
            return response()->download($filePath, 'M-Awaludin-Majid-Resume.pdf');
        }
        
        abort(404, 'Resume file not found');
    }
}
