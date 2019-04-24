<?php

use Step\Acceptance\Admin2 as Admin2Step;

class LI_26Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }

    //Verify value password have space
    public function checkLoginWithValueValid(AcceptanceTester $I, $scenario)
    {
        $I = new Admin2Step($scenario);
        $I->checkLogin('nguyendaohongnhung97@gmail.com', '  19011997nhung   ');

    }

}
