<?php


namespace Page;


class ReservationPage
{
    /**
     * @var string
     */
    public static $tableID = '//*input[@id="tableID"]';

    /**
     * @var string
     */
    public static $numberOfPerson = '//*input[@id="numberofperson"]';

    /**
     * @var string
     */
    public static $description = '//*textarea[@id="description"]';

    /**
     * @var string
     */
    public static $startTime = '//*input[@id="startTime"]';

    /**
     * @var string
     */
    public static $buttonAddEdit = '//*input[@class="t-beaneditor-submit"]';

    /**
     * @var string
     */
    public static $clear = '/html/body/a';

    public static $date = '//*input[@id="date"]';
}