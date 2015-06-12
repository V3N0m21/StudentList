<?php
function h($in)
{
	return htmlspecialchars($in, ENT_QUOTES);
}

function u($in)
{
	return urlencode($in);
}

function authStudent($password)
	{
		setcookie('user', $password, time()+ 60*60*60*24*365, '/');
	}
function setToken($token)
	{
		setcookie('token', $token, time()+ 60*60*60, '/');
	}
function generatePassword($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function getSortingLink($column, $dir, $search)
{

}

