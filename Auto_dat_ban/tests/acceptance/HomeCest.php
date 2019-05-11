<?php
use Page\HomePage;
use Step\Acceptance\HomeSteps ;

class HomeCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }

    public  function nextPage(HomeSteps $I){
        $I->wantToTest('i want to next page');
        $I->nextpage();
        $I->see('You are staying two page');
    }

    public function showPageEdit(HomeSteps $I){
        $I->wantToTest('i want to see page edit');
        $I->showPageEdit();
        $I->see('You are staying page edit');
    }

    public function reloadData(HomeSteps $I){
        $I->wantToTest('i want to test load data');
        $I->reloadData();
        $I->see('You had loaded data');
    }

    public function deleteSucess(HomeSteps $I){
        $I->wantToTest('i want to test delete data');
        $I->deleteSuccess();

        $I->see('You deleted data');
    }

}
