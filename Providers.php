<?php

namespace Apps\Fintech\Packages\Apis\Providers;

use System\Base\Providers\BasepackagesServiceProvider\Packages\ApiClientServices\Apis;

class Providers extends Apis
{
    public function init($apiConfig = null, $api = null, $httpOptions = null, $monitorProgress = null)
    {
        if (!isset($apiConfig['category'])) {
            $apiConfig['category'] = 'Providers';
        }

        parent::init($apiConfig, $api, $httpOptions, $monitorProgress);

        return $this;
    }
}