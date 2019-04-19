<?php
use Step\Acceptance\Admin1 as AdminTester;

class LI_06Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function testCase06(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('nguyenhung97@gmail.com', '19011997nhung');
        $I->see('Error Email or UserName'); // show mess thông báo
    }
}