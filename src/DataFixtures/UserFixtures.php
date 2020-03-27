<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;
    const USER= 'user-1';
    const USER_2= 'user-2';
    const USER_3= 'user-3';
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $user = new User();
        $user->setPassword($this->passwordEncoder->encodePassword(
                    $user,
                    '123'
                    ))
            ->setEmail('you@blabla.com')
            ->setForName('Younes')
            ->setLastName('SARI')
            ->setRoles(['ROLE_SUPER_ADMIN'])
                    ;
        $manager->persist($user);

        $user2 = new User();
                $user2->setPassword($this->passwordEncoder->encodePassword(
                        $user2,
                    '123'
                    ))
                    ->setEmail('zied@blabla.com')
                    ->setForName('Zied')
                    ->setLastName('Moha')
                    ->setRoles(['ROLE_ADMIN'])
                    ;
        $manager->persist($user2);

        $user3 = new User();
        $user3->setPassword($this->passwordEncoder->encodePassword(
                    $user3,
                    '123'
                    ))
            ->setEmail('user@user.com')
            ->setForName('USR')
            ->setLastName('user')
            ->setRoles(['ROLE_USER'])
                    ;
        $manager->persist($user3);

        $manager->flush();
        $this->addReference(self::USER,$user);
        $this->addReference(self::USER_2,$user2);
        $this->addReference(self::USER_3,$user3);
    


            }
        }