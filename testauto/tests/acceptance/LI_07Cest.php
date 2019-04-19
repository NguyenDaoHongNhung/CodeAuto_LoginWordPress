<?php
use Step\Acceptance\Admin1 as AdminTester;

class LI_07Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function testCase07(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('nguyen97@gmail.com', '19ng');
        $I->see('Error Email or UserName'); // show mess thông báo
    }
}