<?php
use Step\Acceptance\Admin as AdminTester;

class LI_10Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function testCase09(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('nguyendaohongnhung97@gmail.com', '19011997nhung');
        $I->see('Eye close - you cant see password'); // show mess thông báo
    }
}