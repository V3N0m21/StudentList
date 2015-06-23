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

function getSortingLink($column, $sort, $dir, $search)
{
	$link = "?sort=$column";
	if ($sort == $column && $dir == 'desc') $link .= '&dir=asc';
	$search = u($search);
	$link .= "&search=$search";
	return $link;
}

function getArrow ($column, $sort, $dir)
{
	if ($column == $sort){
		if ($dir == 'desc'){
			return "&#8595;";
		} else {
			return "&#8593;";
		}
	}
}

