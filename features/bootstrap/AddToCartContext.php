<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Page\ProductPage;
use Page\BasePage;

/**
 * Defines application features from the specific context.
 */
class AddToCartContext implements Context
{
    private $productPage;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct(ProductPage $productPage)
    {
        $this->productPage = $productPage;
    }

    /**
     * @Given I go to the product page
     */
    public function iGoToTheProductPage()
    {
        $this->productPage->open();
    }

    /**
     * @Given I add the product to cart
     */
    public function iAddTheProductToCart()
    {
        $this->productPage->setCheckoutData();
        $this->productPage->addToCart();
        $this->productPage->checkCheckoutData();
    }

    /**
     * @Given I proceed to checkout
     */
    public function iProceedToCheckout()
    {
        $this->productPage->proceedToCheckout();
    }

//    /**
//     * @Given I press :arg1
//     */
//    public function iPress($arg1)
//    {
//        throw new PendingException();
//    }

}
