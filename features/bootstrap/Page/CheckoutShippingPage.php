<?php

namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class CheckoutShippingPage extends BasePage
{
    protected $path = "";

    protected $elements = array(
        "terms_agree_checkbox" => ".checkbox #cgv",
        //proceed to checkout in this page
        "proceed_to_checkout" => ".standard-checkout[name=\"processCarrier\"]",
    );

    public function agreeToTerms()
    {
        $this->waitForElement("terms_agree_checkbox");
        $this->getElement("terms_agree_checkbox")->click();
    }

    public function proceedToPayment()
    {
        $this->waitForElement("proceed_to_checkout");
        $this->getElement("proceed_to_checkout")->click();
    }


}