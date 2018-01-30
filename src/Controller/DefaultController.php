<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
    */
    public function indexAction()
    {
        return $this->render('home/home.html.twig', []);
    }

    /**
     * @Route("/generate/pdf", name="generate_pdf")
    */
    public function pdfBarcodeAction()
    {
        $barcodeService = $this->get(\App\Service\Barcode::class);
        return new Response(
            '<html>'.$barcodeService->generate().'</html>'
        );
    }

    /**
     * @Route("/generate/email", name="generate_email")
    */
    public function emailBarcodeAction()
    {
        return $this->redirectToRoute('home');
    }

    public function generateBarcode()
    {
        return true;
    }
}
