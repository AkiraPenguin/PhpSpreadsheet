<?php
namespace PhpOffice\PhpSpreadsheetTests\Writer\Csv;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Csv as CsvWriter;
use PhpOffice\PhpSpreadsheet\Writer\Exception as WriterException;
use PhpOffice\PhpSpreadsheetTests\Functional;

class CsvWriteTest extends Functional\AbstractFunctional
{
    public function testEncoded(): void
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'こんにちは！');
        $sheet->setCellValue('B1', 'Hello！');

        $writer = new Csv($spreadsheet);

        $writer->setOutputEncoding('');      // UTF-8
        $writer->useBOM(false);
        $filename = tempnam(File::sysGetTempDir(), 'phpspreadsheet-test-UTF-8');
        $writer->save($filename);

        $writer->setOutputEncoding('SJIS-win');
        $writer->useBOM(false);
        $filename = tempnam(File::sysGetTempDir(), 'phpspreadsheet-test-SJIS-win');
        $writer->save($filename);
        
        $a = file_get_contents(tempnam(File::sysGetTempDir(), 'phpspreadsheet-test-UTF-8'))
        $b = file_get_contents(tempnam(File::sysGetTempDir(), 'phpspreadsheet-test-SJIS-win'))
        
        self::assertEquals(mb_convert_encoding($a, 'SJIS-win'), $b);
    }
}
