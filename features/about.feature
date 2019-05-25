Feature: about page
  In order to see about page contents
  As a user
  I am able to visit about page


  Scenario: Visiting about page for an existing user
    Given I am on "/about/john"
    When I press the details button
    Then I should see "email"

