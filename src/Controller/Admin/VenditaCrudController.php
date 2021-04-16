<?php

namespace App\Controller\Admin;

use App\Entity\Vendita;

use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class VenditaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Vendita::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('vetrina per dolce')
            ->setEntityLabelInPlural('Vetrina per Dolci')
            ->setSearchFields(['data', 'disponibilita'])
            //->setDefaultSort(['nome' => 'DESC']);
        ;
    }
    
    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add(EntityFilter::new('Dolce'))
        ;
    }
    
    public function configureFields(string $pageName): iterable
    {
        yield AssociationField::new('Dolce');
        yield DateField::new('data');
        yield IntegerField::new('disponibilita');
    }
}
