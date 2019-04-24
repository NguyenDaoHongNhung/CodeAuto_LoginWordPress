<?php
namespace Step\Acceptance;
use Page\Acceptance\First as FirstPage;

class Admin2 extends \AcceptanceTester
{
    /**
     * Verify login if user login with password and email valid
     */

    public function checkLogin($name, $pass){
        $I = $this;
        $I->amOnPage(FirstPage::$URL);
        $I->fillField(FirstPage::$userName, $name);
        $I->click(FirstPage::$buttonContinue);
        $I->waitForElementVisible(FirstPage::$passWord, 5);
        $I->fillField(FirstPage::$passWord, $pass);
        $I->click(FirstPage::$buttonLogin);
        $I->wait(3);
    }
}