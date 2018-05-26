<?php

namespace luya\account\admin;

/**
 * Account Admin Module.
 *
 * File has been created with `module/create` command. 
 * 
 * @author
 * @since 1.0.0
 */
class Module extends \luya\admin\base\Module
{
    public $apis = [
        'api-account-user' => 'luya\account\admin\apis\UserController',
        'api-account-userlogin' => 'luya\account\admin\apis\UserLoginController',
        
    ];
    
    public function getMenu()
    {
        return (new \luya\admin\components\AdminMenuBuilder($this))
        ->node('User', 'extension')
        ->group('Group')
        ->itemApi('User', 'accountadmin/user/index', 'label', 'api-account-user')
        ->itemApi('Logins', 'accountadmin/user-login/index', 'label', 'api-account-userlogin');
    }
}