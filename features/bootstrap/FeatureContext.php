<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Page\GooglePage;
use Page\BasePage;
/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context
{
    private $googlePage;
    private $basePage;
    private $registerFormPage;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct(GooglePage $googlePage, BasePage $basePage, \Page\RegisterFormPage $registerFormPage)
    {
        $this->googlePage = $googlePage;
        $this->basePage = $basePage;
        $this->registerFormPage = $registerFormPage;
    }

    /**
     * @Given I fill in the register form
     */
    public function iFillInTheRegisterForm(){
        $this->registerFormPage->fillForm();
    }


    /**
     * @Given I do stuff
     */
    public function iDoStuff()
    {
        echo "\nhello world\n";
        $this->googlePage->test();

    }


//    /**
//     * @Given I press :arg1
//     */
//    public function iPress($arg1)
//    {
//        throw new PendingException();
//    }

}
