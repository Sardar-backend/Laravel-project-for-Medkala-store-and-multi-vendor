<?php

namespace App\Helpers\PdfService;

use Barryvdh\DomPDF\Facade\Pdf as DomPDFPDF;

class PdfService {
    public function generateOrderPdf($order){
        return  DomPDFPDF::loadView('pdf.PrintOrder' , compact('order'))->download('order.pdf');
    }
}
