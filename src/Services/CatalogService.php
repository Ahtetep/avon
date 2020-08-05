<?php

namespace App\Services;


use App\Entity\Catalog;
use Doctrine\ORM\EntityManagerInterface;

class CatalogService
{
    /**
     * @var EntityManagerInterface
     */
    protected $_em;

    private const LIMIT = 1;

    /**
     * CatalogService constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->_em = $entityManager;
    }

    /**
     * @return array
     */
    public function getCurrentCatalog()
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('
            _c.catalog,
            _c.catalogDate,
            _c.titleImage
        ')
            ->from(Catalog::class, '_c')
            ->where('_c.catalogDate < ?1')
            ->setParameters([
                1 => date('Y-m-d H:i:s'),
            ])
            ->setMaxResults(self::LIMIT)
            ->orderBy('_c.catalogDate', 'DESC');

        return $qb->getQuery()->getArrayResult();
    }

    /**
     * @return array
     */
    public function getNextCatalog()
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('
            _c.catalog,
            _c.catalogDate,
            _c.titleImage
        ')
            ->from(Catalog::class, '_c')
            ->where('_c.catalogDate > ?1')
            ->setParameters([
                1 => date('Y-m-d H:i:s'),
            ])
            ->setMaxResults(self::LIMIT)
            ->orderBy('_c.catalogDate', 'DESC');

        return $qb->getQuery()->getArrayResult();
    }
}