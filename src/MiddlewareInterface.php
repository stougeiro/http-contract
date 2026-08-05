<?php declare(strict_types=1);

    namespace STDW\Contract\Http;

    use Closure;


    interface MiddlewareInterface
    {
        public function process(RequestInterface $request, ResponseInterface $response, Closure $next): ResponseInterface;
    }
