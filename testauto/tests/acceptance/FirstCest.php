<?php 

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {

    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('//log-in?redirect_to=https%3A%2F%2Fwordpress.com%2F');
        $I->fillField("//*[@id=\"usernameOrEmail\"]", 'nguyendaohongnhung97@gmail.com');
        $I->click('Continue');
        $I->wait(2);
    }
}
