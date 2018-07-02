<?php

namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class GooglePage extends BasePage
{
    protected $path = "/";

    protected $elements = array (
        "searchTextBox" => "#lst-ib",
        "searchButton" => "input[name=\"btnK\"]",
    );

    public function test()
    {
        echo "\n test\n";

       // $this->getSession()->visit("https://google.com");

        $this->getElement("searchTextBox")->setValue("Hello World");
        $this->getElement("searchButton")->click();

   //     $this->getSession()->wait(10000);
    }
}