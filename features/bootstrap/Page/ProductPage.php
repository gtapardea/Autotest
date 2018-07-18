<?php

namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;
use Helper\CheckoutData;

class ProductPage extends BasePage
{
    protected $path = "/index.php?id_product=3&controller=product#/size-s/color-orange";

    protected $elements = array(
        //setters
        "product_price_set" => "#our_price_display",
        //checks
        "product_name_check" => "#layer_cart_product_title",
        "quantity_check" => "#layer_cart_product_quantity",
        "price_check1" => "#layer_cart_product_price",
        "price_check2" => ".ajax_block_products_total",
        "shipping_check" => ".layer_cart_row .ajax_cart_shipping_cost",
        "total_check" => ".layer_cart_row .ajax_block_cart_total",
        //Others
        "add_to_cart_button" => "#add_to_cart button",
        //Proceed to checkout POPUP
        "proceed_to_checkout_button" => ".button-container a",
        "proceed_to_checkout_popup" => "#layer_cart[style^=\"display: block\"]",
    );

    /**
     * Only the UnitPrice is read from the site!!!
     * The $total is computed!!!
     */
    public function setCheckoutData()
    {
        $this->waitForElement("product_price_set");
        CheckoutData::$unitPrice = CheckoutData::sanitizeFloatInput($this->getElement("product_price_set")->getText());
        CheckoutData::$quantity = 1;
        CheckoutData::$shipping = 2;
        CheckoutData::$totalProducts = CheckoutData::$unitPrice * CheckoutData::$quantity;
        CheckoutData::$total = CheckoutData::$totalProducts + CheckoutData::$shipping;
        CheckoutData::$productName = "Printed Dress";
    }

    public function checkCheckoutData(){
        $this->waitForElement("proceed_to_checkout_popup");
        assert(CheckoutData::$quantity == CheckoutData::sanitizeFloatInput($this->getElement("quantity_check")->getText()), "Wrong quantity");
        assert(CheckoutData::$productName == $this->getElement("product_name_check")->getText(), "Wrong product");
        assert(CheckoutData::$totalProducts == CheckoutData::sanitizeFloatInput($this->getElement("price_check1")->getText()), "Wrong Products Price");
        assert(CheckoutData::$totalProducts == CheckoutData::sanitizeFloatInput($this->getElement("price_check2")->getText()), "Wrong Products Price");
        assert(CheckoutData::$shipping == CheckoutData::sanitizeFloatInput($this->getElement("shipping_check")->getText()), "Wrong Shipping Price");
        assert(CheckoutData::$total == CheckoutData::sanitizeFloatInput($this->getElement("total_check")->getText()), "Wrong Total Price");
    }

    public function addToCart()
    {
        $this->waitForElement("add_to_cart_button");
        $this->getElement("add_to_cart_button")->click();
    }

    public function proceedToCheckout()
    {
        $this->waitForElement("proceed_to_checkout_popup");
        $this->waitForElement("proceed_to_checkout_button");
        $this->getElement("proceed_to_checkout_button")->click();
    }
}