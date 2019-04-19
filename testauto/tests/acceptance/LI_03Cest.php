<?php
use Step\Acceptance\Admin1 as AdminTester;

class LI_03Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function testCase03(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('   ', '19011997nhung');
        $I->see('Email or user not space'); // show mess thông báo
    }
}