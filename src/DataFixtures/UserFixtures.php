<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use phpDocumentor\Reflection\Types\Array_;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder) {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $roles = array('admin','user','test');

        for($x = 0; $x <=100; $x++) {
            $user = new User();
            $user->setEmail('welcome'.$x.'@test.com');
            $user->setRoles($roles);
            $user->setPassword($this->passwordEncoder->encodePassword($user, 'welcome_'.$x));

            $manager->persist($user);
        }
        $manager->flush();
    }
}
