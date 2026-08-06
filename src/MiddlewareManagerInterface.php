<?php declare(strict_types=1);

    namespace STDW\Contract\Http;


    interface MiddlewareManagerInterface
    {
        /**
         * @param MiddlewareInterface $middleware 
         * @return void 
         */
        public function add(MiddlewareInterface $middleware): void;

        /**
         * @param MiddlewareInterface $middleware 
         * @return void 
         */
        public function setFinalHandler(MiddlewareInterface $middleware): void;

        /**
         * @param RequestInterface $request 
         * @param ResponseInterface $response 
         * @return ResponseInterface 
         */
        public function handle(RequestInterface $request, ResponseInterface $response): ResponseInterface;
    }
