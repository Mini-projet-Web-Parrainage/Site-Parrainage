<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class ControllerAccueil
{
    public function homepage()
    {
        return new Response('Je suis une page maison');
    }
}
?>
