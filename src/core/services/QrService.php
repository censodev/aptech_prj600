<?php

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Writer\Result\ResultInterface;

class QrService
{
    public function generate(mixed $data, int $size = 300): ResultInterface
    {
        return Builder::create()
            ->writer(new PngWriter())
            ->writerOptions([])
            ->data($data)
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
            ->size($size)
            ->roundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->backgroundColor(new Color (255, 255, 255, 127))
            ->build();
    }
}