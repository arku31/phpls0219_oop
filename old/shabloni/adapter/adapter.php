<?php
require_once "Twitter.php";

class DB
{
    public function createOrUpdate()
    {
        return true;
    }
}

class User extends DB
{

}

class Profile extends DB
{

}

class Account
{
    public function newAccount()
    {
        $user = new User();
        $user->createOrUpdate();

        $profile = new Profile();
        $profile->createOrUpdate();
    }
}

class vk
{
    function post()
    {

    }
}

class fb
{
    protected static $name;

    public static function post()
    {
        echo self::$name;
    }
}

class Social
{
    function post()
    {
        $vk = new vk();
        $vk->post();
//        fb::post();
        $fb = new fb();
        $fb->post();

        $twitter = new Twitter();
        $twitter->post();
    }
}