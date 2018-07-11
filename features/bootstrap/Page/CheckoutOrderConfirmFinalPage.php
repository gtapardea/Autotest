<?php

namespace Page;

use Behat\Testwork\Call\Exception\FatalThrowableError;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class CheckoutOrderConfirmFinalPage extends BasePage
{
    protected $path = "";
    const ORDEROK = "Your order on My Store is complete.";

    protected $elements = array(
        "order_OK" => ".cheque-indent",
    );

    public function iCheckOrderOK()
    {
        $this->waitForElement("order_OK");
        assert($this->getElement("order_OK")->getText() !== self::ORDEROK , "The order in NOT OK!");
        $this->getDriver()->wait( 11111, 0);
    }


}