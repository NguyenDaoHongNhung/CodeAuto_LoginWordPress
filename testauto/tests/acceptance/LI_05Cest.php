<?php
use Step\Acceptance\Admin1 as AdminTester;

class LI_05Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function testCase05(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('nguyendaohongnhung97@gmail.com', '19097nhung');
        $I->see('Error password'); // show mess thông báo
    }
}