<?php

namespace App\Controller\Admin;

use App\Entity\Dolci;
use App\Entity\Ingredienti;
use App\Entity\Vendita;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Interlogica');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
        yield MenuItem::linktoRoute('Home page', 'fas fa-home', 'homepage');
        yield MenuItem::linkToCrud('Dolci', 'fas fa-map-marker-alt', Dolci::class);
        yield MenuItem::linkToCrud('Ingredienti', 'fas fa-comments', Ingredienti::class);
        yield MenuItem::linkToCrud('Vetrina', 'fas fa-comments', Vendita::class);
    }
}
