<?php

use Step\Acceptance\Admin2 as Admin2Step;

class LI_01Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }

    public function checkLoginWithValueValid(AcceptanceTester $I, $scenario)
    {
        $I = new Admin2Step($scenario);
        $I->checkLogin('nguyendaohongnhung97@gmail.com', '19011997nhung');
       // $I->see('Login success'); (bị lỗi nếu thêm dòng này. (chị xem giúp em với ạ
    }
}
