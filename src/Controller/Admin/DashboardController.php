<?php

namespace App\Controller\Admin;

use App\Entity\Dolci;
use App\Entity\Ingredienti;
use App\Entity\Vendita;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        //return parent::index();
        $routeBuilder = $this->get(CrudUrlGenerator::class)->build();
        $url = $routeBuilder->setController(DolciCrudController::class)->generateUrl();

        return $this->redirect($url);

    }

    public function configureAssets(): Assets
    {
        return Assets::new()->addCssFile('css/menu.css');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Pasticceria');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Pannello di amministrazione', 'fas fa-tools');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
        yield MenuItem::linktoRoute('Home page', 'fas fa-home', 'homepage');
        yield MenuItem::linkToCrud('Dolci', 'fas fa-birthday-cake', Dolci::class);
        yield MenuItem::linkToCrud('Ingredienti', 'fas fa-clipboard-list', Ingredienti::class);
        yield MenuItem::linkToCrud('Vetrina', 'fas fa-store', Vendita::class);
    }
}
