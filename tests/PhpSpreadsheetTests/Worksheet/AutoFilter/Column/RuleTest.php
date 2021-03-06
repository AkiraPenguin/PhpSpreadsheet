<?php

namespace PhpOffice\PhpSpreadsheetTests\Worksheet\AutoFilter\Column;

use PhpOffice\PhpSpreadsheet\Worksheet\AutoFilter\Column;
use PHPUnit\Framework\TestCase;

class RuleTest extends TestCase
{
    private $testAutoFilterRuleObject;

    private $mockAutoFilterColumnObject;

    protected function setUp(): void
    {
        $this->mockAutoFilterColumnObject = $this->getMockBuilder(Column::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->testAutoFilterRuleObject = new Column\Rule(
            $this->mockAutoFilterColumnObject
        );
    }

    public function testGetRuleType(): void
    {
        $result = $this->testAutoFilterRuleObject->getRuleType();
        self::assertEquals(Column\Rule::AUTOFILTER_RULETYPE_FILTER, $result);
    }

    public function testSetRuleType(): void
    {
        $expectedResult = Column\Rule::AUTOFILTER_RULETYPE_DATEGROUP;

        //    Setters return the instance to implement the fluent interface
        $result = $this->testAutoFilterRuleObject->setRuleType($expectedResult);
        self::assertInstanceOf(Column\Rule::class, $result);

        $result = $this->testAutoFilterRuleObject->getRuleType();
        self::assertEquals($expectedResult, $result);
    }

    public function testSetValue(): void
    {
        $expectedResult = 100;

        //    Setters return the instance to implement the fluent interface
        $result = $this->testAutoFilterRuleObject->setValue($expectedResult);
        self::assertInstanceOf(Column\Rule::class, $result);

        $result = $this->testAutoFilterRuleObject->getValue();
        self::assertEquals($expectedResult, $result);
    }

    public function testGetOperator(): void
    {
        $result = $this->testAutoFilterRuleObject->getOperator();
        self::assertEquals(Column\Rule::AUTOFILTER_COLUMN_RULE_EQUAL, $result);
    }

    public function testSetOperator(): void
    {
        $expectedResult = Column\Rule::AUTOFILTER_COLUMN_RULE_LESSTHAN;

        //    Setters return the instance to implement the fluent interface
        $result = $this->testAutoFilterRuleObject->setOperator($expectedResult);
        self::assertInstanceOf(Column\Rule::class, $result);

        $result = $this->testAutoFilterRuleObject->getOperator();
        self::assertEquals($expectedResult, $result);
    }

    public function testSetGrouping(): void
    {
        $expectedResult = Column\Rule::AUTOFILTER_RULETYPE_DATEGROUP_MONTH;

        //    Setters return the instance to implement the fluent interface
        $result = $this->testAutoFilterRuleObject->setGrouping($expectedResult);
        self::assertInstanceOf(Column\Rule::class, $result);

        $result = $this->testAutoFilterRuleObject->getGrouping();
        self::assertEquals($expectedResult, $result);
    }

    public function testGetParent(): void
    {
        $result = $this->testAutoFilterRuleObject->getParent();
        self::assertInstanceOf(Column::class, $result);
    }

    public function testSetParent(): void
    {
        //    Setters return the instance to implement the fluent interface
        $result = $this->testAutoFilterRuleObject->setParent($this->mockAutoFilterColumnObject);
        self::assertInstanceOf(Column\Rule::class, $result);
    }

    public function testClone(): void
    {
        $result = clone $this->testAutoFilterRuleObject;
        self::assertInstanceOf(Column\Rule::class, $result);
    }
}
