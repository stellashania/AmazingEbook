<?php

namespace App\Http\Controllers;

use App\Models\Ebook;
use Illuminate\Http\Request;

class EbookController extends Controller
{
    public function getEbookDetail(Request $request)
    {
        $ebook = Ebook::find($request->id);

        $data = [
            'ebook' => $ebook
        ];

        return view('ebook-detail', $data);
    }
}
