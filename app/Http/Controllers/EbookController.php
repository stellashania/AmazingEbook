<?php

namespace App\Http\Controllers;

use App\Models\Ebook;
use Illuminate\Http\Request;

class EbookController extends Controller
{
    // public function display_all()
    // {
    //     $allEbooks = Ebook::all();

    //     $data = [
    //         'ebooks' => $allEbooks
    //     ];

    //     return view('home', $data);
    // }

    public function getEbookDetail(Request $request)
    {
        $ebook = Ebook::find($request->id);

        $data = [
            'ebook' => $ebook
        ];

        return view('ebook-detail', $data);
    }
}
