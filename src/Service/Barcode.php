<?php
namespace App\Service;

/*
    https://github.com/picqer/php-barcode-generator
*/
use Picqer\Barcode\BarcodeGeneratorSVG;
use Picqer\Barcode\BarcodeGeneratorPNG;
use Picqer\Barcode\BarcodeGeneratorJPG;
use Picqer\Barcode\BarcodeGeneratorHTML;
use Picqer\Barcode\BarcodeGenerator;

class Barcode
{
    protected $generator;

    public $types = [
        BarcodeGenerator::TYPE_CODE_39,
        BarcodeGenerator::TYPE_CODE_39_CHECKSUM,
        BarcodeGenerator::TYPE_CODE_39E,
        BarcodeGenerator::TYPE_STANDARD_2_5,
        BarcodeGenerator::TYPE_STANDARD_2_5_CHECKSUM,
        BarcodeGenerator::TYPE_INTERLEAVED_2_5,
        BarcodeGenerator::TYPE_INTERLEAVED_2_5_CHECKSUM,
        BarcodeGenerator::TYPE_CODE_128,
        BarcodeGenerator::TYPE_CODE_128_A,
        BarcodeGenerator::TYPE_CODE_128_B,
        BarcodeGenerator::TYPE_CODE_128_C,
        BarcodeGenerator::TYPE_EAN_2,
        BarcodeGenerator::TYPE_EAN_5,
        BarcodeGenerator::TYPE_EAN_8,
        BarcodeGenerator::TYPE_EAN_13,
        BarcodeGenerator::TYPE_UPC_A,
        BarcodeGenerator::TYPE_UPC_E,
        BarcodeGenerator::TYPE_MSI,
        BarcodeGenerator::TYPE_MSI_CHECKSUM,
        BarcodeGenerator::TYPE_POSTNET,
        BarcodeGenerator::TYPE_PLANET,
        BarcodeGenerator::TYPE_RMS4CC,
        BarcodeGenerator::TYPE_KIX,
        BarcodeGenerator::TYPE_IMB,
        BarcodeGenerator::TYPE_CODABAR,
        BarcodeGenerator::TYPE_CODE_11,
        BarcodeGenerator::TYPE_PHARMA_CODE,
        BarcodeGenerator::TYPE_MSI,
        BarcodeGenerator::TYPE_PHARMA_CODE_TWO_TRACKS,
    ];

    protected $formats = [

    ];

    public function __construct()
    {
        $this->generator = new BarcodeGeneratorPNG;
    }

    public function generate()
    {
        //return $this->generator->getBarcode(time(), $this->generator::TYPE_INTERLEAVED_2_5);
        $content = (int)'020802181445';
        return '<img src="data:image/png;base64,' . base64_encode($this->generator->getBarcode($content, $this->generator::TYPE_INTERLEAVED_2_5)) . '">';
    }

    public function generateBarcode($type)
    {
    }



    public function generatePdf()
    {
    }
}
