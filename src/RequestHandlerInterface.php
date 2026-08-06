<?php declare(strict_types=1);

    namespace STDW\Contract\Http;


    interface RequestHandlerInterface
    {
        /**
         * @param RequestInterface $request 
         * @param ResponseInterface $response 
         * @return ResponseInterface 
         */
        public function handle(RequestInterface $request, ResponseInterface $response): ResponseInterface;
    }
