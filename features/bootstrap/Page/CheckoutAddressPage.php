<?php

namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class CheckoutAddressPage extends BasePage
{
    protected $path = "";

    protected $elements = array(
        "proceed_to_shipping" => ".button[name=\"processAddress\"]",
    );

    public function proceedToShipping()
    {
        $this->waitForElement("proceed_to_shipping");
        $this->getElement("proceed_to_shipping")->click();
    }


}