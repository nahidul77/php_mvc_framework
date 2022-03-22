<?php
class Router 
{
    /**
     * Associative array of routes (the routing table)
     * @var array
     */

    protected $routes = [];

    /**
     * Parameters from the matched route
     * @var array
     */
    protected $params = [];
    /**
     * add a route to the routing table
     * 
     * @param string $route the route URL
     * @param array $params Parameters (controller, action, etc.)
     * 
     * @return void
    */

    public function add($route, $params)
    {
        $this->routes[$route] = $params;
    }

    /**
     * Get all the routes from the routing table
     * 
     * @return array
     */

    public function getRoutes()
    {
         return $this->routes;
    }

    /**
     * Get the currently matched parameters
     * 
     * @return array
     */
    public function match($url)
    {
        foreach($this->routes as $route => $params){
            if($url == $route){
                $this->params = $params;
                return true;
            }
        }

        return false;
    }

    /**
     * Get the currently matched parameters
     * 
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }
} 