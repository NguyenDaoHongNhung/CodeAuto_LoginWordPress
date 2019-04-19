<?php
use Step\Acceptance\Admin1 as AdminTester;

class LI_08Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function testCase08(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('nguyendaohongnhung97@gmail.com', '');
        $I->see('Password not empty'); // show mess thông báo
    }
}