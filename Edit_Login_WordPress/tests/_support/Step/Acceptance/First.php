<?php
namespace Step\Acceptance;
use Page\Acceptance\First as FirstPage;

class First extends \AcceptanceTester
{
    /**
     * check userName field exist on login page
     */
    public function checkUserNameExist()
    {
        $I = $this;
        $I->wantToTest('Go to login page');
        $I->amOnPage(FirstPage::$URL);
        $I->wantToTest('I want to check user name exist'); // Mày đang muốn test cái gì
        $I->waitForElementVisible(FirstPage::$userName, 3); // Đợi cái element này nó hiển thị với thời gian maximum 3s
       // $I->waitForElement(FirstPage::$userName, 30); // check button có ở trong page mặc dù element có hiển thị hay không

    }
}