<?php

namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class CheckoutSignInPage extends BasePage
{
    protected $path = "";

    protected $elements = array(

        "sign_in_email_field" => ".form-group #email",
        "sign_in_password_field" => ".form-group #passwd",
        "sign_in_submit" => ".submit #SubmitLogin",
    );

    public function signIn()
    {
        $this->waitForElement("sign_in_email_field");
        $this->getElement("sign_in_email_field")->setValue("atg.autotesting@gmail.com");
        $this->getElement("sign_in_password_field")->setValue('1@3$qWeR');
        $this->getElement("sign_in_submit")->click();
    }


}