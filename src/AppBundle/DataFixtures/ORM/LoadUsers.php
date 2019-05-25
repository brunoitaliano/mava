<?php
// mava/src/AppBundle/DataFixtures/ORM/LoadUsers.php
namespace AppBundle\DataFixtures\ORM;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use AppBundle\Entity\User;

class LoadUsers extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $manager)
  {
    // previous code
    $this->addReference('user-john', $user1);
    $this->addReference('user-jack', $user2);
  }

  public function getOrder() {
    return 10;
  }
}

