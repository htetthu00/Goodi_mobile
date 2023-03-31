<?php



use Core\Response;
require('Router.php');



function dd($value) 
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
};

function urlIs($value) 
{
    if($_SERVER['REQUEST_URI'] == $value)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    $router = new Core\Router;
    if(! $condition){
        $router->abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH.$path;
}

function view($path, $attribute=[])
{
    extract($attribute);

    require base_path('views/'.$path);
}

function redirectTo($path = '')
{
    header("location: /{$path}");
    exit();
}
function setError($message)
{
    $_SESSION['errors'] = [$message];
}

function setSuccess($message)
{
    $_SESSION['normalSuccess'] = $message;
}

function checkAuth($key)
{
    return isset($_SESSION[$key]);
}

function getAuth($key)
{
    if(checkAuth($key)){
        return $_SESSION[$key];
    }else {
        return null;
    }
}

function bcrypt($value) {
    return md5($value);
}
