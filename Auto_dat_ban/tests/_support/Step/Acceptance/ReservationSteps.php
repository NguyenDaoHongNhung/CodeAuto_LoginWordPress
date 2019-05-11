<?php
namespace Step\Acceptance;
use Page\HomePage as Home;
use Page\ReservationPage as Reservation;

class ReservationSteps extends \AcceptanceTester
{
    public function reservationSuccess($tableID, $numberOfPerson, $date, $description, $startTime){
        $I = $this;
        $I->amOnPage(Home::$URL);
        $I->amOnPage(Home::$newRervation);
        $I->waitForElementVisible(Reservation::$tableID, 30);
        $I->fillField(Reservation::$tableID);
        $I->fillField(Reservation::$numberOfPerson);
        $I->fillField(Reservation::$date);
        $I->fillField(Reservation::$description);
        $I->fillField(Reservation::$startTime);
    }


}