<?php
namespace Page;

class HomePage
{
    // include url of current page
    /**
     * @var string
     */
    public static $URL = '/QATest/';

    /**
     * @var string
     */
    public static $newRervation = '//*p[1]/a';

    /**
     * @var string
     */
    public static $nextPage = '//*div[@class="t-data-grid-pager"]/a';

    /**
     * @var string
     */
    public static $reloadData = '//*p[2]/a';

    /**
     * @var string
     */
    public static  $edit = '//*td[@class="edit"]/a';

    /**
     * @var string
     */
    public static  $delete = '//*td[@class="delete"]/a';



    public static function route($param)
    {
        return static::$URL.$param;
    }


}
