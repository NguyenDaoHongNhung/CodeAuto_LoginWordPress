<?php
namespace Step\Acceptance;

use Page\Acceptance\First as FirstPage;

class Admin3 extends \AcceptanceTester
{
    public function checkLogin($name){
        $I = $this;
        $I->amOnPage(FirstPage::$URL);
        $I->fillField(FirstPage::$userName, $name);
        $I->click(FirstPage::$buttonContinue);



    }
}