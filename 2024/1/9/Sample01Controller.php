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

class Sample01Controller extends AbstractController
{
    /**
     * Sample01Controller constructor.
     *
     * @param PurchaseFlow $cartPurchaseFlow
     * @param CustomerFavoriteProductRepository $customerFavoriteProductRepository
     * @param CartService $cartService
     * @param ProductRepository $productRepository
     * @param BaseInfoRepository $baseInfoRepository
     * @param AuthenticationUtils $helper
     * @param ProductListMaxRepository $productListMaxRepository
     */
    public function __construct(
    ) {}

    /**
     * @Route("/%eccube_admin_route%/sample01", name="admin_sample01_index", methods={"GET"})
     * @Template("@admin/Sample01/index.twig")
     */
    public function index()
    {
        return [];
    }

    /**
     * @Route("/%eccube_admin_route%/sample01/detail", name="admin_sample01_detail", methods={"GET"})
     * @Template("@admin/Sample01/detail.twig")
     */
    public function detail()
    {
        return [];
    }
}

