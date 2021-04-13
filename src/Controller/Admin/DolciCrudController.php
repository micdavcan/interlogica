<?php

namespace App\Controller\Admin;

use App\Entity\Dolci;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class DolciCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Dolci::class;
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
