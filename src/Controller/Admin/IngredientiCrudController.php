<?php

namespace App\Controller\Admin;

use App\Entity\Ingredienti;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class IngredientiCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Ingredienti::class;
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
