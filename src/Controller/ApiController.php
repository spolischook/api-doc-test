<?php

namespace App\Controller;

use FOS\RestBundle\Controller\Annotations\QueryParam;
use Swagger\Annotations as SWG;

class ApiController
{
    /**
     * @SWG\Response(
     *     response=200,
     *     description="List of products"
     * )
     * @SWG\Parameter(
     *     name="cat",
     *     in="query",
     *     type="array",
     *     collectionFormat="multi",
     *     @SWG\Items(
     *         type="string"
     *     ),
     *     description="The field used to order rewards"
     * )
     * @QueryParam(map=true, name="categories", requirements="\d+", description="Id of categories to filter.")
     */
    public function getProductsAction()
    {
        return [];
    }
}