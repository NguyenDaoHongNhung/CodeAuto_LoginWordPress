<?php

use Page\Acceptance\First as FirstPage;
use Step\Acceptance\Admin3 as Admin3Step;

class LI_07Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }

    //Verify field password will be able to display  with a valid username
    public function checkStatusPassword(AcceptanceTester $I, $scenario)
    {
        $I = new Admin3Step($scenario);
        $I->checkLogin('nguyendaohongnhung');
        $I->waitForElementVisible(FirstPage::$passWord, 5);
    }
}
