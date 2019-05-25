<?php 

class DefaultControllerCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function indexActionTest(FunctionalTester $I)
    {
      $I->wantTo('too see the welcome message on home page');
      $I->amOnPage('/');
      $I->see('Welcome');

    }
}
