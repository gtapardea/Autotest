Feature:
  CheckOut

  @javascript @CheckOut @V1
    Scenario: Checkout user existent adresa default bankwire
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

