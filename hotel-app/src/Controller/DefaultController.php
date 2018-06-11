<?php
/**
 * Created by PhpStorm.
 * User: jhon
 * Date: 6/10/18
 * Time: 9:22 PM
 */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function index() {

        return $this->render(
            'base.html.twig', array('title'=>'Jonathan Chavarria')
        );  
    }
}