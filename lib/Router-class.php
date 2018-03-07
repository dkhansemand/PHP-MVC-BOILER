<?php

class Router extends Core
{
    private static  $BASE = null,
                    $params = [],
                    $RouteIndex = null,
                    $Routes = null,
                    $controller = null,
                    $view = null,
                    $REQ_ROUTE = null;

    public static function ValidateRoutes(array $routes, array $keys) : bool
    {
        $errors = 0;
        foreach($routes as $route)
        {
            if(!Helpers::array_key_exists_r($keys, $route))
            {
                $errors++;
            }
        }
        return ( $errors === 0 );
    }

    public static function GetParamByName(string $param) : string
    {
        return rawurldecode(self::$params[$param]) ?? null;
    }

    public static function GetParamByIndex(int $index) : string
    {
        return rawurldecode(self::$params[$index]) ?? null;
    }

    public static function GetParams() : array
    {
        return self::$params ?? [];
    }

    public static function Redirect(string $location) : void
    {
        ob_start();
        header('Location:' . rtrim(self::$BASE, '/') . $location);
        exit;
    }

    public static function Init(string $url, array $routes) : void
    {
        if(self::ValidateRoutes($routes, ['path', 'view']))
        {
            self::$Routes = $routes;
            $url = Filter::SanitizeURL($url);
            self::$BASE = substr($_SERVER['PHP_SELF'], 0, strpos($_SERVER['PHP_SELF'], "index.php"));
            self::$REQ_ROUTE = '/'.str_replace(strtolower(self::$BASE), '', strtolower($url));
            $match = false;
            $newPath = explode('/', rtrim(self::$REQ_ROUTE, '/'));
            $newPath = array_splice($newPath, 1, count($newPath)-1);
            foreach($routes as $routeIdx => $route)
            {
                self::$params = [];
                $pathCount = count(explode('/', $route['path'])) - 1;
                $path = null;
                for($pCnt = 0; $pCnt < $pathCount; $pCnt++)
                {
                    if(isset($newPath[$pCnt]))
                    {
                        $path .= '/'.$newPath[$pCnt];
                    }
                }
                if(strtolower($route['path']) === strtolower($path))
                {
                    $match = true;
                    //echo '<pre>',var_dump($route),'</pre>';
                    self::$RouteIndex = $routeIdx;
                    $URLparams = array_slice($newPath, $pCnt, count($newPath));
                    if(array_key_exists('params', $route) && sizeof($route['params']) > 0)
                    {
                        for($ParamCnt = 0; $ParamCnt < count($URLparams); $ParamCnt++)
                        {
                            if(isset($route['params'][$ParamCnt]))
                            {
                                self::$params[$route['params'][$ParamCnt]] = $URLparams[$ParamCnt];
                            }
                            else
                            {
                                self::$params[] = $URLparams[$ParamCnt];
                            }
                        }
                    }
                    else
                    {
                        self::$params = $URLparams;
                    }
                    
                }
                
            }
            /* echo '<p>New Path: ',var_dump($newPath), 
                ' | <br>Param count: ',
                    var_dump($pathCount),
                ' |<br> Path match: ',
                    var_dump(self::$REQ_ROUTE),
                '<br> | Params: ',
                    var_dump(self::$params)
                ,'</p>'; */

            if($match)
            {
                if(array_key_exists('controller', self::$Routes[self::$RouteIndex]))
                {
                    if(!self::CanLoadController(self::$Routes[self::$RouteIndex]['controller']))
                    {
                        throw new Exception("Cannot load controller '".self::$Routes[self::$RouteIndex]['controller']."'");
                    }
                }

                if(array_key_exists('view', self::$Routes[self::$RouteIndex]))
                {
                    if(!self::CanLoadView(self::$Routes[self::$RouteIndex]['view']))
                    {
                        throw new Exception("Cannot load view '".self::$Routes[self::$RouteIndex]['controller']."'");
                    }
                }

                if(array_key_exists('permissions', self::$Routes[self::$RouteIndex]))
                {
                    (new Guard)->Protect(self::$Routes[self::$RouteIndex]['permissions']);
                }
            }
            else
            {
                if(defined('DEFAULT_ROUTE') && self::$REQ_ROUTE === '/')
                {
                    foreach(self::$Routes as $route)
                    {
                        if(DEFAULT_ROUTE === $route['path'])
                        {
                            self::Redirect($route['path']);
                        }
                    }
                }

                if(file_exists(__ROOT__ . DS . 'views' . DS .'ErrorPages' . DS . '404.view.php'))
                {
                   self::Redirect('/Error/404');
                }
                else
                {
                    header("HTTP/1.0 404 Not Found");
                    exit;
                }
            }

            if(@__DEBUG__ === true)
            {
                echo 'BASE: <pre>',var_dump(self::$BASE), '</pre>';
                echo 'REQ_ROUTE<pre>',var_dump(self::$REQ_ROUTE), '</pre>';
                echo 'Routes: <pre>',var_dump($routes), '</pre>';
                echo 'Controller: <pre>',var_dump(self::$Controller), '</pre>';
                echo 'View: <pre>',var_dump(self::$View), '</pre>';
            }
        }
        else
        {
            throw new Exception('Routes not defined correctly!');
        }
    }

}
