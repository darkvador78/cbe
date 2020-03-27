<?php

namespace App\DataFixtures;

use App\Entity\Admin;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdminFixtures extends Fixture
{
    private $passwordEncoder;
    const ADMIN= 'admin-1';
    const ADMIN_2= 'admin-2';
    const ADMIN_3= 'admin-3';
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $admin = new Admin();
        $admin->setPassword($this->passwordEncoder->encodePassword(
                    $admin,
                    '123'
                    ))
            ->setEmail('you@blabla.com')
            ->setForName('Younes')
            ->setLastName('SARI')
            ->setRoles(['ROLE_SUPER_ADMIN'])
                    ;
        $manager->persist($admin);

        $admin2 = new Admin();
                $admin2->setPassword($this->passwordEncoder->encodePassword(
                        $admin2,
                    '123'
                    ))
                    ->setEmail('zied@blabla.com')
                    ->setForName('Zied')
                    ->setLastName('Moha')
                    ->setRoles(['ROLE_ADMIN'])
                    ;
        $manager->persist($admin2);

        $admin3 = new Admin();
        $admin3->setPassword($this->passwordEncoder->encodePassword(
                    $admin3,
                    '123'
                    ))
            ->setEmail('admin@admin.com')
            ->setForName('USR')
            ->setLastName('admin')
            ->setRoles(['ROLE_USER'])
                    ;
        $manager->persist($admin3);

        $manager->flush();
        $this->addReference(self::ADMIN,$admin);
        $this->addReference(self::ADMIN_2,$admin2);
        $this->addReference(self::ADMIN_3,$admin3);
    


            }
        }