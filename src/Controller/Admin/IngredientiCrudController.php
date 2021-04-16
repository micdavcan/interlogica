<?php

namespace App\Controller\Admin;

use App\Entity\Ingredienti;

use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;


class IngredientiCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Ingredienti::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Ingrediente per dolce')
            ->setEntityLabelInPlural('Ingredienti per Dolci')
            ->setSearchFields(['nome', 'quantita', 'unitaMisura'])
            //->setDefaultSort(['nome' => 'DESC']);
        ;
    }
    
    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add(EntityFilter::new('Dolce'))->add('nome')
        ;
    }
    
    public function configureFields(string $pageName): iterable
    {
        yield AssociationField::new('Dolce');
        yield TextField::new('nome');
        yield IntegerField::new('quantita');
        yield TextField::new('unitaMisura');    
    }
}
