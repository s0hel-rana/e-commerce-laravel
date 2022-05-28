<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function categoryPdf(){
        $categories = Category::all();

        $fileName = 'category.pdf';
        $html = view('categories.categorypdf',compact('categories'))->render();

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($html);
        $mpdf->Output($fileName,'I');

    }
}
