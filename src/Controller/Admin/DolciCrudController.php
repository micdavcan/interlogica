<?php

namespace App\Controller\Admin;

use App\Entity\Dolci;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;


class DolciCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Dolci::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Dolce')
            ->setEntityLabelInPlural('Dolci')
            ->setSearchFields(['nome'])
            ->setDefaultSort(['nome' => 'ASC']);
        ;
    }
/*
    public function configureFields(string $pageName): iterable
    {
        //yield AssociationField::new('idDolce');
        yield TextField::new('nome');
        yield MoneyField::new('prezzo');
    }
    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
