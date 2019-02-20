<?php

class User
{
    public function createOrUpdate($name, $address, $mobile, $userid = null)
    {
        if (is_null($userid)) {
            // пользователя не существует, создаем запись
        } else {
            // запись есть, обновляем ее
        }
    }
}