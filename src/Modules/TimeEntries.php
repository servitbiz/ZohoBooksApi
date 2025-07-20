<?php

namespace Webleit\ZohoBooksApi\Modules;

use Webleit\ZohoBooksApi\Client;

class TimeEntries extends Module
{
    public function getUrlPath()
    {
        return 'projects/timeentries';
    }
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }
}