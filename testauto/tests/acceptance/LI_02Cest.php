<?php
use Step\Acceptance\Admin2 as AdminTester;

class LI_02Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function testCase02(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('');
        $I->see('Email or user not empty'); // show mess thông báo
    }

}
