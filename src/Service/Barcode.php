<?php
namespace App\Service;

use Picqer\Barcode\BarcodeGeneratorSVG;
use Picqer\Barcode\BarcodeGeneratorPNG;
use Picqer\Barcode\BarcodeGeneratorJPG;
use Picqer\Barcode\BarcodeGeneratorHTML;

class Barcode
{
    protected $generator;

    /*
    TYPE_CODE_39
    TYPE_CODE_39_CHECKSUM
    TYPE_CODE_39E
    TYPE_CODE_39E_CHECKSUM
    TYPE_CODE_93
    TYPE_STANDARD_2_5
    TYPE_STANDARD_2_5_CHECKSUM
    TYPE_INTERLEAVED_2_5
    TYPE_INTERLEAVED_2_5_CHECKSUM
    TYPE_CODE_128
    TYPE_CODE_128_A
    TYPE_CODE_128_B
    TYPE_CODE_128_C
    TYPE_EAN_2
    TYPE_EAN_5
    TYPE_EAN_8
    TYPE_EAN_13
    TYPE_UPC_A
    TYPE_UPC_E
    TYPE_MSI
    TYPE_MSI_CHECKSUM
    TYPE_POSTNET
    TYPE_PLANET
    TYPE_RMS4CC
    TYPE_KIX
    TYPE_IMB
    TYPE_CODABAR
    TYPE_CODE_11
    TYPE_PHARMA_CODE
    TYPE_PHARMA_CODE_TWO_TRACKS
    https://github.com/picqer/php-barcode-generator
    */

    public function __construct()
    {
    }

    public function generate()
    {
    }
}
