<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Page\ProductPage;
use Page\BasePage;
use Page\CheckoutSummaryPage;
use Page\CheckoutSignInPage;
use Page\CheckoutAddressPage;
use Page\CheckoutShippingPage;
use Page\CheckoutPaymentPage;
use Page\CheckoutConfirmPage;

/**
 * Defines application features from the specific context.
 */
//  $this->getDriver()->wait( 11111, 0);
class CheckoutContext implements Context
{
    private $checkoutSummaryPage;
    private $checkoutSignInPage;
    private $checkoutAddressPage;
    private $checkoutShippingPage;
    private $checkoutPaymentPage;
    private $checkoutConfirmPage;


    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct(
        CheckoutSummaryPage $checkoutSummaryPage,
        CheckoutSignInPage $checkoutSignInPage,
        CheckoutAddressPage $checkoutAddressPage,
        CheckoutShippingPage $checkoutShippingPage,
        CheckoutPaymentPage $checkoutPaymentPage,
        CheckoutConfirmPage $checkoutConfirmPage
    )
    {
        $this->checkoutSummaryPage = $checkoutSummaryPage;
        $this->checkoutSignInPage = $checkoutSignInPage;
        $this->checkoutAddressPage = $checkoutAddressPage;
        $this->checkoutShippingPage = $checkoutShippingPage;
        $this->checkoutPaymentPage = $checkoutPaymentPage;
        $this->checkoutConfirmPage = $checkoutConfirmPage;
    }

    /**
     * @Given I proceed to sign in
     */
    public function iProceedToSignIn()
    {
        $this->checkoutSummaryPage->proceedToSignIn();
    }

    /**
     * @Given I enter my credentials and sign in
     */
    public function iEnterMyCredentialsAndSignIn()
    {
        $this->checkoutSignInPage->signIn();
    }

    /**
     * @Given I proceed to shipping
     */
    public function iProceedToShipping(){
        $this->checkoutAddressPage->proceedToShipping();
    }

    /**
     * @Given I agree with the terms
     */
    public function iAgreeWithTheTerms(){
    $this->checkoutShippingPage->agreeToTerms();
    }

    /**
     * @Given I proceed to payment
     */
    public function iProceedToPayment()
    {
        $this->checkoutShippingPage->proceedToPayment();
    }

    /**
     * @Given I select pay by bankwire
     */
    public function iSelectPayByBankwire(){
        $this->checkoutPaymentPage->payByBankWire();
    }

    /**
     * @Given I confirm the order
     */
    public function iConfirmTheOrder(){
    $this->checkoutConfirmPage->iConfirmTheOrder();
    }
}


