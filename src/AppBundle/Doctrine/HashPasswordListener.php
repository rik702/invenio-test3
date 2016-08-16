<?php
/**
 * Created by PhpStorm.
 * User: macrich
 * Date: 14/08/2016
 * Time: 21:15
 */

namespace AppBundle\Doctrine;

use AppBundle\Entity\IvoUser;
use Doctrine\Common\EventSubscriber;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Doctrine\ORM\Event\LifecycleEventArgs;

class HashPasswordListener implements EventSubscriber
{

    private $passwordEncoder;
    /**
     * HashPasswordListener constructor.
     */
    public function __construct(UserPasswordEncoder $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function getSubscribedEvents()
    {
        return ['prePersist', 'preUpdate'];
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        if (!$entity instanceof IvoUser) {
            return;
        }

        $this->encodePassword($entity);
    }


    public function preUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        if (!$entity instanceof IvoUser) {
            return;
        }

        $this->encodePassword($entity);

        // necessary to force the update to see the change
        $em = $args->getEntityManager();
        $meta = $em->getClassMetadata(get_class($entity));
        $em->getUnitOfWork()->recomputeSingleEntityChangeSet($meta, $entity);
    }
    /**
     * @param IvoUser $user
     */
    private function encodePassword(IvoUser $entity)
    {
        $encoded = $this->passwordEncoder->encodePassword(
            $entity,
            $entity->getPlainPassword()
        );
        $entity->setIvoPassword($encoded);
    }
}