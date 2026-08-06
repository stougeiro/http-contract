<?php declare(strict_types=1);

    namespace STDW\Contract\Http;

    use Closure;


    interface MiddlewareInterface
    {
        /**
         * @param RequestInterface $request 
         * @param ResponseInterface $response 
         * @param Closure $next 
         * @return ResponseInterface 
         */
        public function process(RequestInterface $request, ResponseInterface $response, Closure $next): ResponseInterface;
    }
