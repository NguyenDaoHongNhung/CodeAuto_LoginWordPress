<?php
namespace Step\Acceptance;
use Page\HomePage;

class HomeSteps extends \AcceptanceTester
{
    public function nextpage(){
        $I = $this;
        $I->amOnPage(HomePage::$URL);
        $I->waitForElementVisible(HomePage::$nextPage);
        $I->click(HomePage::$nextPage);
    }

    public function showPageEdit(){
        $I = $this;
        $I->amOnPage(HomePage::$URL);
        $I->waitForElementVisible(HomePage::$edit);
        $I->click(HomePage::$edit);
    }

    public function reloadData(){
        $I = $this;
        $I->amOnPage(HomePage::$URL);
        $I->waitForElementVisible(HomePage::$reloadData);
        $I->click(HomePage::$reloadData);
    }

    public function deleteSuccess(){
        $I = $this;
        $I->amOnPage(HomePage::$URL);
        $I->waitForElementVisible(HomePage::$delete);
        $I->click(HomePage::$delete);
    }

}