<?php

namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class CheckoutConfirmPage extends BasePage
{
    protected $path = "";

    protected $elements = array(
        "i_confirm_the_order" => ".button-medium[type=\"submit\"]",
    );

    public function iConfirmTheOrder()
    {
        $this->waitForElement("i_confirm_the_order");
        $this->getElement("i_confirm_the_order")->click();
        $this->getDriver()->wait( 11111, 0);
    }


}