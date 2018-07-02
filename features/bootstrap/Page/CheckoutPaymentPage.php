<?php

namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class CheckoutPaymentPage extends BasePage
{
    protected $path = "";

    protected $elements = array(
        "pay_by_bank_wire" => ".bankwire",
    );

    public function payByBankWire()
    {
        $this->waitForElement("pay_by_bank_wire");
        $this->getElement("pay_by_bank_wire")->click();
    }


}