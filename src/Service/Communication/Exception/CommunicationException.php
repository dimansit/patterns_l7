<?php

declare(strict_types = 1);

namespace Service\Communication\Exception;

use Controller\ProductController;

class CommunicationException extends \Exception, ProductController
{
}
