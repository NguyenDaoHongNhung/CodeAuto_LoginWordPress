<?php
use Step\Acceptance\Admin as AdminTester;

class LI_01Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('nguyendaohongnhung97@gmail.com', '19011997nhung');
        $I->see('HomePage'); // show mess thông báo
    }
}