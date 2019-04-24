<?php

use Page\Acceptance\First as FirstPage;
use Step\Acceptance\Admin3 as Admin3Step;

class LI_02Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }

    //Verify field password will be able to display  with a valid email
    public function checkStatusPassword(AcceptanceTester $I, $scenario)
    {
        $I = new Admin3Step($scenario);
        $I->checkLogin('nguyendaohongnhung97@gmail.com');
        $I->waitForElementVisible(FirstPage::$passWord, 5);
    }
}
