<?php

use Step\Acceptance\Admin2 as Admin2Step;

class LI_09Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }

    //Verify if a user will be able to login with a username valid and a incorrect password
    public function checkLoginWithValueValid(AcceptanceTester $I, $scenario)
    {
        $I = new Admin2Step($scenario);
        $I->checkLogin('nguyendaohongnhung97@gmail.com', '1901nhung');

    }
}
