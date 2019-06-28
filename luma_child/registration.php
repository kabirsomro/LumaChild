<?php
/**
 * Copyright © 2019-2020 Developer, Ltd. All rights reserved.
 * See COPYING.txt for license details.
 *
 *  Register Child theme and set the path for theme
 *  
 */


\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::THEME,
    'frontend/Magento/luma-child',
    __DIR__
);
