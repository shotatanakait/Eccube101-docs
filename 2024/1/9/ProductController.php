<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Customize\Controller\Admin;

use Eccube\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ProductController extends AbstractController
{
    /**
     * ProductController constructor.
     */
    public function __construct(
    ) {}

    /**
     * @Route("/%eccube_admin_route%/product/sample_product", name="admin_product_sample_product", methods={"GET"})
     * @Template("@admin/Product/sample_product.twig")
     */
    public function sampleProduct()
    {
        return [];
    }
}

