<?php

namespace App\Controller\Admin;

use App\Entity\Vendita;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class VenditaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Vendita::class;
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
