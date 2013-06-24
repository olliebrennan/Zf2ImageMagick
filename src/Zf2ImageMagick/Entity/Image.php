<?php

namespace Zf2ImageMagick\Entity;

class Image
{
    /**
     * @var string $originalFilename
     */
    protected $originalFilename;

    /**
     * @var string $newFilename
     */
    protected $newFilename;

    /**
     * @var string $size
     */
    protected $size;

    /**
     * @var string $pointsize
     */
    protected $pointsize;

    /**
     * @var string $fill
     */
    protected $fill;

    /**
     * @var string $strokeWidth
     */
    protected $strokeWidth;

    /**
     * @var string $draw
     */
    protected $draw;

    /**
     * @var string $comment
     */
    protected $comment;

    /**
     * @var string $whitespace
     */
    protected $whitespace;

    /**
     * @var string $whitespaceGravity
     */
    protected $whitespaceGravity;

    /**
     * @var string $whitespaceComposite
     */
    protected $whitespaceComposite;

    /**
     * @var string $drawing
     */
    protected $drawing;

	/**
     * @return the $whitespaceGravity
     */
    public function getWhitespaceGravity()
    {
        return $this->whitespaceGravity;
    }

	/**
     * @return the $whitespaceComposite
     */
    public function getWhitespaceComposite()
    {
        return $this->whitespaceComposite;
    }

	/**
     * @param string $whitespaceGravity
     */
    public function setWhitespaceGravity($whitespaceGravity)
    {
        $this->whitespaceGravity = $whitespaceGravity;
    }

	/**
     * @param boolean $whitespaceComposite
     */
    public function setWhitespaceComposite(boolean $whitespaceComposite)
    {
        $this->whitespaceComposite = (boolean) $whitespaceComposite;
    }

	/**
     * @return the $originalFilename
     */
    public function getOriginalFilename()
    {
        return $this->originalFilename;
    }

	/**
     * @return the $newFilename
     */
    public function getNewFilename()
    {
        return $this->newFilename;
    }

	/**
     * @return the $size
     */
    public function getSize()
    {
        return $this->size;
    }

	/**
     * @return the $pointsize
     */
    public function getPointsize()
    {
        return $this->pointsize;
    }

	/**
     * @return the $fill
     */
    public function getFill()
    {
        return $this->fill;
    }

	/**
     * @return the $strokeWidth
     */
    public function getStrokeWidth()
    {
        return $this->strokeWidth;
    }

	/**
     * @return the $draw
     */
    public function getDraw()
    {
        return $this->draw;
    }

	/**
     * @return the $comment
     */
    public function getComment()
    {
        return $this->comment;
    }

	/**
     * @return the $whitespace
     */
    public function getWhitespace()
    {
        return $this->whitespace;
    }

	/**
     * @return the $drawing
     */
    public function getDrawing()
    {
        return $this->drawing;
    }

	/**
     * @param string $originalFilename
     */
    public function setOriginalFilename($originalFilename)
    {
        $this->originalFilename = $originalFilename;
        return $this;
    }

	/**
     * @param string $newFilename
     */
    public function setNewFilename($newFilename)
    {
        $this->newFilename = $newFilename;
        return $this;
    }

	/**
     * @param string $size
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

	/**
     * @param string $pointsize
     */
    public function setPointsize($pointsize)
    {
        $this->pointsize = $pointsize;
        return $this;
    }

	/**
     * @param string $fill
     */
    public function setFill($fill)
    {
        $this->fill = $fill;
        return $this;
    }

	/**
     * @param string $strokeWidth
     */
    public function setStrokeWidth($strokeWidth)
    {
        $this->strokeWidth = $strokeWidth;
        return $this;
    }

	/**
     * @param string $draw
     */
    public function setDraw($draw)
    {
        $this->draw = $draw;
        return $this;
    }

	/**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

	/**
     * @param string $whitespace
     */
    public function setWhitespace($whitespace)
    {
        $this->whitespace = $whitespace;
        return $this;
    }

	/**
     * @param string $drawing
     */
    public function setDrawing($drawing)
    {
        $this->drawing = $drawing;
        return $this;
    }
}
