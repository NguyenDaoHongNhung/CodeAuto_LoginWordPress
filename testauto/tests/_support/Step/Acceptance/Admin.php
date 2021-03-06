<?php
namespace Step\Acceptance;

use Page\Login as LoginPage;

class Admin extends \AcceptanceTester
{

    public function loginAsAdmin($name,$password)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernameField, $name);;
        $I->click(LoginPage::$continueButton);
        $I->fillField(LoginPage::$passwordField, $password);
        $I->click(LoginPage::$loginButton);
    }

}