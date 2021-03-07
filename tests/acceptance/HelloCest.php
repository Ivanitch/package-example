<?php

namespace Test;

use AcceptanceTester;

class HelloCest
{
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('http://localhost:3000');
        $I->see('Hello world');
    }
}
