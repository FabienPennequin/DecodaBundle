<?php

namespace Bundle\DecodaBundle\Templating\Helper;

use Symfony\Component\Templating\Helper\Helper;
use Symfony\Component\OutputEscaper\Escaper;
use Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver;

/**
 * DecodaHelper.
 *
 * @author Fabien Pennequin <fabien@pennequin.me>
 */
class DecodaHelper extends Helper
{
    protected $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    /**
     * Transforms a BBCode String into HTML Code
     *
     * @return string
     */
    public function parse($string, $allowedTags=array())
    {
        $this->loadDecoda();

        $code = new \Decoda($string, $allowedTags);
        return $code->parse();
    }

    /**
     * Loads file with Decoda class
     *
     * @return void
     */
    protected function loadDecoda()
    {
        if (!class_exists('Decoda')) {
            require $this->file;
        }
    }

    /**
     * Returns the canonical name of this helper.
     *
     * @return string The canonical name
     */
    public function getName()
    {
        return 'decoda';
    }
}
