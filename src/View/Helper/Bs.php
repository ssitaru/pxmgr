<?php

namespace PXMgr\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

class BsHelper extends Helper
{
    // initialize() hook is available since 3.2. For prior versions you can
    // override the constructor if required.
    public function initialize(array $config)
    {
        debug($config);
    }
}