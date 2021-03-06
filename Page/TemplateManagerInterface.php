<?php

/*
 * This file is part of the Sonata project.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\PageBundle\Page;

use Symfony\Component\HttpFoundation\Response;
use Sonata\PageBundle\Model\Template;

/**
 * Interface for template management and rendering
 *
 * @author Olivier Paradis <paradis.olivier@gmail.com>
 */
interface TemplateManagerInterface
{
    /**
     * Renders a template code
     *
     * @param string   $code       Template code
     * @param array    $parameters An array of view parameters
     * @param Response $response   Response to update
     *
     * @return Response
     */
    function renderResponse($code, array $parameters = array(), Response $response = null);

    /**
     * Adds a template
     *
     * @param string   $code     Code
     * @param Template $template Template object
     */
    function add($code, Template $template);

    /**
     * Returns the template by code
     *
     * @param string $code
     *
     * @return Template|null
     */
    function get($code);

    /**
     * Sets the default template code
     *
     * @param string $code
     */
    function setDefaultTemplateCode($code);

    /**
     * Returns the default template code
     *
     * @return string
     */
    function getDefaultTemplateCode();

    /**
     * Sets the templates
     *
     * @param Template[] $templates
     */
    function setAll($templates);

    /**
     * Returns the templates
     *
     * @return Template[]
     */
    function getAll();
}