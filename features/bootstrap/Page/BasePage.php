<?php

namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class BasePage extends Page
{
    protected $path = "https://google.com";

    protected $elements = array (

    );



    public function waitForElement($element, $timeToWait = 10000)
    {
        $condition = "document.contains(document.querySelector('" . $this->elements[$element] . "'))";
        $this->getDriver()->wait($timeToWait, $condition);
   }

    public function waitForElementNotVisible($element, $timeToWait = 10000)
    {
        $condition = "! document.contains(document.querySelector('" . $this->elements[$element] . "'))";
        $this->getDriver()->wait($timeToWait, $condition);
    }


}