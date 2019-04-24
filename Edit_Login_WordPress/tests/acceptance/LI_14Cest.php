<?php

use Page\Acceptance\First as FirstPage;
use Step\Acceptance\Admin3 as Admin3Step;

class LI_14Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }

    //Verify field password won't be able to display with value email is space
    public function checkStatusPassword(AcceptanceTester $I, $scenario)
    {
        $I = new Admin3Step($scenario);
        $I->checkLogin('     ');
        $I->waitForElementNotVisible(FirstPage::$passWord, 5);
    }
}
