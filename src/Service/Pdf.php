<?php
namespace App\Service;

use Dompdf\Dompdf;

class Pdf
{
    protected $dompdf;

    public function __construct(Dompdf $dompdf)
    {
        $this->dompdf = $dompdf;
    }

    public function pdfResponse()
    {
    }
}
