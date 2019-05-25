<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements \Behat\Behat\Context\SnippetAcceptingContext
{


    /**
     * @When I press the details button
     */
    public function iPressTheDetailsButton()
    {
        throw new PendingException();
        $this->getSession()
        ->getPage()
        ->findButton("more")
        ->press();
    }
}
