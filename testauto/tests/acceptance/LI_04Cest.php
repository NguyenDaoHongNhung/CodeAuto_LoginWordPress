<?php
use Step\Acceptance\Admin1 as AdminTester;

class LI_04Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function testCase04(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('   ', '19097nhung');
        $I->see('Email or user not space'); // show mess thông báo
    }
}