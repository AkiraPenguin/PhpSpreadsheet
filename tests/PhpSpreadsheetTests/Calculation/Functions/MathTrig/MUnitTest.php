<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation\Functions\MathTrig;

use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\MatrixFunctions;

class MUnitTest extends AllSetupTeardown
{
    public function testMUNIT(): void
    {
        $identity = MatrixFunctions::funcMUnit(3);
        self::assertEquals([[1, 0, 0], [0, 1, 0], [0, 0, 1]], $identity);
        $startArray = [[1, 2, 2], [4, 5, 6], [7, 8, 9]];
        $resultArray = MatrixFunctions::funcMMult($startArray, $identity);
        self::assertEquals($startArray, $resultArray);
        $inverseArray = MatrixFunctions::funcMInverse($startArray);
        $resultArray = MatrixFunctions::funcMMult($startArray, $inverseArray);
        self::assertEquals($identity, $resultArray);
        self::assertEquals('#VALUE!', MatrixFunctions::funcMUnit(0));
        self::assertEquals('#VALUE!', MatrixFunctions::funcMUnit(-1));
        self::assertEquals('#VALUE!', MatrixFunctions::funcMUnit('X'));
    }
}
