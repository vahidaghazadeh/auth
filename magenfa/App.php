<?php
/* framework app class
 * @author Vahid Aghazade <v.opsource@gmail.com>
 * @package app\core
 */

namespace Magenfa\Core;

class App{

    public static string $CURRENT_PATH;
    public Router $router;
    public Request $request;
    public Response $response;
    public static App $app;
    public function __construct($currentPath)
    {
        self::$CURRENT_PATH = $currentPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}