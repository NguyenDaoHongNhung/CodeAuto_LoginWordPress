<?php
namespace Page;

class Login
{
    // include url of current page
    public static $URL = '//login?redirect_to=https%3A%2F%2Fwordpress.com%2F';
    public static $usernameField = '//*[@id="usernameOrEmail"]';
    public static $passwordField = '//*[@id="password"]';
    public static $loginButton = 'Log In';
    public static $continueButton = 'Continue';

    public static $continueWithGoogleButton = '//*[@id="primary"]/div/main/div/div[1]/div/form/div[2]/div[2]/div/div/div/button';

    public  static  $openEye = '//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/div[1]/div/div/span/svg/g/path';


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


}
