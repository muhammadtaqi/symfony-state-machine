<?php
/**
 * Created by PhpStorm.
 * User: muhammadtaqi
 * Date: 8/4/18
 * Time: 10:34 PM
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Order;

/**
 * Class OrderController
 * @package App\Controller
 */
class OrderController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return new JsonResponse(
            (array)$request->request->all()
        );
    }

    /**
     * @Route("/new", name="homepage")
     */
    public function newAction(Request $request)
    {
        $order = new Order();
        // Get the factory
        $factory = $this->get('sm.factory');
        // Get the state machine for this object, and graph called "simple"
        $orderSM = $factory->get($order, 'simple');
        // Check if a transition can be applied: returns true or false
        $orderSM->can('address');

        return new JsonResponse(
            (array)$request->request->all()
        );
    }




    /**
     * @Route("/ping", name = "api.service.ping")
     */
    public function pingAction(Request $request){
        return new Response(json_encode(array('status'=>'200')));
    }
}