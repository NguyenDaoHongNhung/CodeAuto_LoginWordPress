<?php 
use Step\Acceptance\First as FirstStep;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    /**
     * @param FirstStep $I
     * check user name exist on login page
     */
    public function checkUserNameExist(FirstStep $I)
    {
        $I->checkUserNameExist();
    }
}
