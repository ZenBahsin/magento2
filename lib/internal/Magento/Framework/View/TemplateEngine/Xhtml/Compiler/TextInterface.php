<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\Framework\View\TemplateEngine\Xhtml\Compiler;

use Magento\Framework\DataObject;

/**
 * Interface TextInterface
 *
 * @api
 */
interface TextInterface
{
    /**
     * Compiles the Element node
     *
     * @param \DOMText $node
     * @param DataObject $processedObject
     * @return void
     */
    public function compile(\DOMText $node, DataObject $processedObject);
}
