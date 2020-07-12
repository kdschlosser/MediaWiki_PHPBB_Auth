

if (!class_exists('Auth_phpBB'))
{
    require_once './extensions/Auth_phpBB/Auth_phpBB.php';
}


if (!class_exists('User'))
{
    require_once './includes/User.php';
}

if (!interface_exists('iUser'))
{
    /**
     * Auth Plug-in Interface
     *
     */
    require_once './extensions/Auth_phpBB/iUser.php';

}

 class User_phpBB extends User implements iUser
{

    public function getCanonicalName( $name, $validate = 'valid')
    {
        return Auth_phpBB::getCanonicalName($name);
    }

}
