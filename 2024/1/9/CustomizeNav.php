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

namespace Customize;

use Eccube\Common\EccubeNav;

class CustomizeNav implements EccubeNav
{
    public static function getNav()
    {
        return [
            'sample01' => [
                'name' => '第一階層メニュー(追加)',
                'icon' => 'fa-toolbox',
                'children' => [
                    's1' => [
                        'name' => '第二階層メニュー_index',
                        'url' => 'admin_sample01_index',
                    ],
                    's2' => [
                        'name' => '第二階層メニュー_detail',
                        'url' => 'admin_sample01_detail',
                    ],
                ],
            ],
            'product' => [
                'children' => [
                    'sample' => [
                        'name' => '商品の子(追加)',
                        'url' => 'admin_product_sample_product',
                    ],
                ],
            ],
        ];
    }
}

