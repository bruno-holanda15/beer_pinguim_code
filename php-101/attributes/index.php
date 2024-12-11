<?php

class Request
{
    public string $uri;
    public string $method;

    public function __construct()
    {
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->method = $_SERVER['REQUEST_METHOD'];
    }
}

#[Attribute]
class Http
{
    public function __construct(
        public string $uri,
        public string $method
    ) {}
}

class MyController
{
    #[Http(uri: "/welcome", method: "GET")]
    public function me()
    {
        return "welcome to brunin url";
    }

    #[Http(uri: "/anime", method: "GET")]
    public function crunch()
    {
        return "welcome otaku";
    }
}

class Router
{
    function handle(Request $request)
    {
        $controller = new ReflectionClass(MyController::class);

        $methods = $controller->getMethods();

        foreach ($methods as $method) {
            $attributes = $method->getAttributes();

            foreach ($attributes as $attribute) {
                $uri = explode("/", $attribute->getArguments()["uri"]);
                $requestUri = explode("/", $request->uri);

                $httpMethod = $attribute->getArguments()["method"];
                $requestMethod = $request->method;

                if (
                    $uri != $requestUri ||
                    $httpMethod != $requestMethod
                ) {
                    continue;
                }

                return $method->invoke(
                    $method->getDeclaringClass()->newInstance()
                );
            }
        }

        return "route not found";
    }
}

$request = new Request();
$router = new Router();

echo $router->handle($request);
