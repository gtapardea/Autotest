<?php

namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class RegisterFormPage extends BasePage
{
    protected $path = "/";

    protected $elements = array (
        "searchTextBox" => "#lst-ib",
        "searchButton" => "input[name=\"btnK\"]",
        "FirstName" => "input[name=\"firstName\"]",
        "Submit" => "input[name=\"register\"]",
    );

    public function fillForm(){
        $this->getElement("FirstName")->setValue("Mircea");
        $this->getElement("Submit")->click();
    }
    public function test()
    {
        echo "\n test\n";

       // $this->getSession()->visit("https://google.com");

        $this->getElement("searchTextBox")->setValue("Hello World");
        $this->getElement("searchButton")->click();

   //     $this->getSession()->wait(10000);
    }
}