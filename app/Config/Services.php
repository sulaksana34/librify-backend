<?php

namespace Config;

use Auth0\SDK\Auth0;
use Auth0\SDK\Exception\CoreException;
use App\Libraries\Auth0SessionStore;
use CodeIgniter\Config\BaseService;

/**
 * Services Configuration file.
 *
 * Services are simply other classes/libraries that the system uses
 * to do its job. This is used by CodeIgniter to allow the core of the
 * framework to be swapped out easily without affecting the usage within
 * the rest of your application.
 *
 * This file holds any application-specific services, or service overrides
 * that you might need. An example has been included with the general
 * method format you should use for your service methods. For more examples,
 * see the core Services file at system/Config/Services.php.
 */
class Services extends BaseService
{
    /*
     * public static function example($getShared = true)
     * {
     *     if ($getShared) {
     *         return static::getSharedInstance('example');
     *     }
     *
     *     return new \CodeIgniter\Example();
     * }
     */

     public static function auth0(bool $getShared = true)
     {
         if ($getShared)
         {
             return static::getSharedInstance('auth0');
         }
 
         $config = config('Auth0');
         $config = [
             'domain'        => getenv('AUTH0_DOMAIN'),
             'client_id'     => getenv('AUTH0_CLIENT_ID'),
             'client_secret' => getenv('AUTH0_CLIENT_SECRET'),
             'redirect_uri'  => getenv('AUTH0_BASE_URL'),
            //  'scope'         => getenv('AUTH0_BASE_URL'),
             'store'         => new Auth0SessionStore(),
         ];
 
         return new Auth0($config);
     }
}
