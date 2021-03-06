<?php

return [
    ['11111111', '"FF"'],
    ['111111111', '"1FF"'],
    ['#NUM!', '200'],
    ['1000000000', '"FFFFFFFE00"'], // 2's Complement
    ['#NUM!', '"FFFFFFFDFF"'], // 2's Complement
    ['111111111', '"01FF"'], // highest positive
    ['#NUM!', '"0200"'],
    ['1000000000', '"FFFFFFFE00"'], // lowest negative
    ['#NUM!', '"FFFFFFFDFF"'],
    ['110101011', '"01AB"'],
    ['#NUM!', '"ABCD"'],
    ['11110110', '"F6"'],
    ['00001111', '"F", 8'],
    ['10110111', '"B7"'],
    ['#NUM!', '12345'],
    ['#NUM!', '123456789'],
    ['#NUM!', '123.45'],
    ['0', '0'],
    ['#NUM!', '"G3579A"'],
    ['#VALUE!', 'true'],
    ['#VALUE!', 'false'],
    ['01010', '"A", 5'],
    ['#NUM!', '"A", 0'],
    ['#NUM!', '"A", -1'],
    ['#NUM!', '"A", 14'],
    ['#NUM!', '"A", 3'],
    ['1010', '"A", 4'],
    ['1011', 'A2'],
    ['0', 'A3'],
];
