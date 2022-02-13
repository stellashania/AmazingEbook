<?php

namespace App\Http\Controllers;

use App\Models\Ebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class EbookController extends Controller
{
    public function getEbookDetail(Request $request)
    {
        // App::setLocale($locale);
        $ebook = Ebook::find($request->id);

        $data = [
            'ebook' => $ebook
        ];

        return view('ebook-detail', $data);
    }
}
