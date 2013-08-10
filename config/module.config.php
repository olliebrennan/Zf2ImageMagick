<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'service_manager' => array(
        'invokables' => array(
            'Zf2ImageMagick\Entity\Image' => 'Zf2ImageMagick\Entity\Image',
        ),
        'factories' => array(
            'Zf2ImageMagick\ImageService' => 'Zf2ImageMagick\Service\Factory\ImageMagickFactory',
        ),
    ),
);
