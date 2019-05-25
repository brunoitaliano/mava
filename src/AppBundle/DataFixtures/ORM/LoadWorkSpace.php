<?php
// src/AppBundle/DataFixtures/ORM/LoadWorkSpaces.php
namespace AppBundle\DataFixtures\ORM;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use AppBundle\Entity\Workspace;

class LoadWorkSpace extends AbstractFixture implements OrderedFixtureInterface {
  public function load(ObjectManager $manager) {
    $workspace1 = new Workspace();
    $workspace1->setTitle('Writing');
    $workspace1->setDescription('info for writing Workspace');
    $manager->persist($workspace1);
    $manager->flush();
    $this->addReference('workspace-writing', $workspace1);
  }

  public function getOrder() {
    return 10; // the order which fixtures will be loaded
  }
}
