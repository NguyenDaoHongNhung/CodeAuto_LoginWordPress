<?php
use Step\Acceptance\ReservationSteps as ReservationStep;
use Step\Acceptance\HomeSteps;

class ReservationCest
{
    /**
     * @var string
     */
    protected $tableID;

    /**
     * @var string
     */
    protected $numberOfPerson;

    /**
     * @var string
     */
    protected $date;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $startTime;

    /**
     * ReservationCest constructor.
     */
    public function __construct()
    {
        $this->tableID = '5';
        $this->numberOfPerson = '4';
        $this->date = '10/5/2019';
        $this->description = 'Oder table for dinner';
        $this->startTime = '20';
    }

    public function doReservation(ReservationStep $I){

        $I->reservationSuccess($this->tableID, $this->numberOfPerson, $this->date, $this->description, $this->startTime);
    }


    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
