<?php
/**
 * Diglin
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category    Diglin
 * @package     Diglin_Chat
 * @copyright   Copyright (c) 2011-2016 Diglin (http://www.diglin.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Diglin\Zopim\Model\Config\Source;

/**
 * Class Classicthemes
 * @package Diglin\Zopim\Model\Config\Source
 */
class Classicthemes implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @deprecated
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => '', 'label' => __('-- Please Select (Some depends on your plan) --')],
            ['value' => 'alphacube', 'label' => __('Alphacube')],
            ['value' => 'plastic', 'label' => __('Plastic')],
            ['value' => 'solid', 'label' => __('Solid')],
            ['value' => 'floral', 'label' => __('Floral')],
            ['value' => 'windows7', 'label' => __('Windows 7')],
            ['value' => 'macOs', 'label' => __('MacOs')],
            ['value' => 'chrome', 'label' => __('Chrome')],
        ];
    }
}
