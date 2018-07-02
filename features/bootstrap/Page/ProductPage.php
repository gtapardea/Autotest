<?php

namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class ProductPage extends BasePage
{
    protected $path = "/index.php?id_product=3&controller=product";

    protected $elements = array(
        "add_to_cart_button" => "#add_to_cart button",
        //Proceed to checkout POPUP
        "proceed_to_checkout_button" => ".button-container a",
        "proceed_to_checkout_popup" => "#layer_cart[style^=\"display: block\"]",
    );

    public function addToCart(){
        $this->waitForElement("add_to_cart_button");
        $this->getElement("add_to_cart_button")->click();
    }

    public function proceedToCheckout(){
        $this->waitForElement("proceed_to_checkout_popup");
        $this->waitForElement("proceed_to_checkout_button");
        $this->getElement("proceed_to_checkout_button")->click();
    }
}