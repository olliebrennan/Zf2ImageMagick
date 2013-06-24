<?php

namespace Zf2ImageMagick\Service;

use Zend\ServiceManager\ServiceManagerAwareInterface;
use Zend\ServiceManager\ServiceManager;
use ZfcBase\EventManager\EventProvider;
use \Zf2ImageMagick\Exception\MagickException as MagickException;

class ImageMagick extends EventProvider implements ServiceManagerAwareInterface
{
    /**
     * @var ServiceManager
     */
    protected $serviceManager;

    /**
     * @param \Zf2ImageMagick\Entity\Image $entity
     */
    public function resize(\Zf2ImageMagick\Entity\Image $entity)
    {
        if (! $entity->getOriginalFilename()) {
            return new MagickException('Original filename missing');
        }
        if (! $entity->getNewFilename()) {
            return new MagickException('New filename missing');
        }
        if (! $entity->getSize()) {
            return new MagickException('Missing size');
        }

        $shellCmd = '/usr/bin/convert ' . $entity->getOriginalFilename() .
            ' -resize ' . $entity->getSize() . '\> -size ' . $entity->getSize();

        if ($pointsize = $entity->getPointsize()) {
            $shellCmd .= ' -pointsize ' . $pointsize;
        }

        if ($fill = $entity->getFill()) {
            $shellCmd .= ' -fill ' . $fill;
        }

        if ($strokewidth = $entity->getStrokeWidth()) {
            $shellCmd .= ' -strokewidth ' . $strokewidth;
        }

        if ($drawing = $entity->getDrawing()) {
            $shellCmd .= '-draw ' . $drawing;
        }

        if ($whitespace = $entity->getWhitespace()) {
            $shellCmd .= ' ' . $whitespace;
        }

        if ($whitespaceGravity = $entity->getWhitespaceGravity()) {
            $shellCmd .= ' -gravity ' . $whitespaceGravity;
        }

        if ($entity->getWhitespaceComposite()) {
            $shellCmd .= ' -composite';
        }

        if ($comment = $entity->getComment()) {
            $shellCmd .= ' -comment ' . '\'' . $comment . '\'';
        }

        $shellCmd = ' ' . $entity->getNewFilename() . ' 2>&1';

        return shell_exec($shellCmd);
    }

    /**
     * @param \Zf2ImageMagick\Entity\Image $entity
     */
    public function getEntity($prefill = true)
    {
        $entity = new \Zf2ImageMagick\Entity\Image();
        if (! $prefill) {
            return $entity;
        }

        $entity->setSize('200x200')
            ->setPointsize(15)
            ->setFill('white')
            ->setStrokeWidth(5)
            ->setComment('Made with love')
            ->setDrawing('"gravity SouthWest text +4 +4 \'Made with love\'"')
            ->setWhitespace('xc:white +swap')
            ->setWhitespaceComposite(true)
            ->setWhitespaceGravity('center');
        return $entity;
    }

    /**
     * Retrieve service manager instance
     *
     * @return ServiceManager
     */
    public function getServiceManager()
    {
        return $this->serviceManager;
    }

    /**
     * Set service manager instance
     *
     * @param ServiceManager $serviceManager
     * @return Client
     */
    public function setServiceManager(ServiceManager $serviceManager)
    {
        $this->serviceManager = $serviceManager;
        return $this;
    }
}
