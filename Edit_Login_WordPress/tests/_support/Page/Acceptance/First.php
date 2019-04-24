<?php
namespace Page\Acceptance;

class First
{
    /**
     * @var string
     */
    public static $URL = '/log-in?redirect_to=https%3A%2F%2Fwordpress.com%2F';

    /**
     * @var string
     */
    public static $userName = '//input[@id="usernameOrEmail"]';

    /**
     * @var string
     */
    public static $passWord = '//input[@id="password"]';

    /**
     * @var string
     */
    public static $buttonContinue = 'Continue';

    /**
     * @var string
     */
    public static $buttonLogin = 'Log In';






    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
