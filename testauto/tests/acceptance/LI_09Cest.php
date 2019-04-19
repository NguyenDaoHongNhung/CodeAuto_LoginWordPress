<?php
use Step\Acceptance\Admin3 as AdminTester;

class LI_09Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function testCase09(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('nguyendaohongnhung97@gmail.com', '19011997nhung');
        $I->see('Eye open - you can see password'); // show mess thông báo
    }
}