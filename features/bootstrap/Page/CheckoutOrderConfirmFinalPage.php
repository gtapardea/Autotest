<?php

namespace Page;

use Behat\Testwork\Call\Exception\FatalThrowableError;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class CheckoutOrderConfirmFinalPage extends BasePage
{
    protected $path = "";
    protected $matches;
    const ORDEROK = "Your order on My Store is complete.";

    protected $elements = array(
        "order_OK" => ".cheque-indent",
        "text_box" => ".box",
    );

    public function iCheckOrderOK()
    {
        $this->waitForElement("order_OK");
        assert($this->getElement("order_OK")->getText() === self::ORDEROK , "The order in NOT OK!");
        preg_match('/[A-Z]{9}/',$this->getElement("text_box")->getText(), $this->matches);
        echo "\n The order number is: " . $this->matches[0];
//        $this->getDriver()->wait( 11111, 0);
    }


}