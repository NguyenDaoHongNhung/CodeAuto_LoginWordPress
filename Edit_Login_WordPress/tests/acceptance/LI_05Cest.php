<?php

use Page\Acceptance\First as FirstPage;
use Step\Acceptance\Admin3 as Admin3Step;

class LI_05Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }

    //Verify if a user will be able to login with a email not registration before
    public function checkStatusPassword(AcceptanceTester $I, $scenario)
    {
        $I = new Admin3Step($scenario);
        $I->checkLogin('xidau900@gmail.com');
    }
}
