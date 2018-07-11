Feature:
  hello world

#  @javascript @hello
#  Scenario: hello world
#    Given I am on homepage
#    Then I fill in "firstName" with "Mircea"
#    Then I fill in "lastName" with "Dana"
#    Then I fill in "phone" with "+40741819165"
#    Then I fill in "userName" with "mdia239r32@gmail.com"
#    Then I fill in "address1" with "Aleaa Tibles 30"
#    Then I fill in "address2" with "apartment3"
#    Then I fill in "city" with "Bucharest"
#    Then I fill in "state" with "Romania"
#    Then I fill in "postalCode" with "060233"
#    Then I select "171" from "country"
#    Then I fill in "email" with "mirceadana"
#    Then I fill in "password" with "fa56sdf1v56asfa#^TRF%"
#    Then I fill in "confirmPassword" with "fa56sdf1v56asfa#^TRF%"
#    Then I press "register"
#
#
#  @javascript @hello2
#    Scenario: Fillform
#    Given I am on homepage
#    Then I fill in the register form

  @javascript @x1
    Scenario: Checkout user existent adresa default M1
    Given I am on homepage
    And I go to the product page
    And I add the product to cart
    And I proceed to checkout
    And I proceed to sign in
    And I enter my credentials and sign in
    And I proceed to shipping
    Then I agree with the terms
    And I proceed to payment
    Then I select pay by bankwire
    Then I confirm the order
    Then I check the order is complete