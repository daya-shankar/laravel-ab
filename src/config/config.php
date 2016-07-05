<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Database Connection
    |--------------------------------------------------------------------------
    |
    | The database connection used to store the A/B testing information.
    |
    */

    'connection' => '',

    /*
    |--------------------------------------------------------------------------
    | Experiments
    |--------------------------------------------------------------------------
    |
    | A list of experiment identifiers.
    |
    | Example: ['big-logo', 'small-buttons']
    |
    */

    'experiments' => [],

    /*
    |--------------------------------------------------------------------------
    | Goals
    |--------------------------------------------------------------------------
    |
    | A list of goals. This list can contain urls, route names or custom goals.
    |
    | Example: ['pricing/order', 'signup']
    |
    */

    'goals' => [],


    /*
    |--------------------------------------------------------------------------
    | IP Addresses that need to be blocked from tracking
    |--------------------------------------------------------------------------
    |
    | A list of ipv4 addresses that should not be tracked when tracking experiments and goals
    |
    | Example: ['113.200.181.200', '113.200.181.122']
    |
    */

    'ipaddresses' => [],

);
