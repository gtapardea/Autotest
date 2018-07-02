<?php

namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class CheckoutSummaryPage extends BasePage
{
    protected $path = "";

    protected $elements = array(
        "proceed_to_checkout" => ".cart_navigation .standard-checkout",
    );

    public function proceedToSignIn()
    {
        $this->waitForElement("proceed_to_checkout");
        $this->getElement("proceed_to_checkout")->click();
    }


}