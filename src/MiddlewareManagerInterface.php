<?php declare(strict_types=1);

    namespace STDW\Contract\Http;


    interface MiddlewareManagerInterface
    {
        public function add(MiddlewareInterface $middleware): void;

        public function setFinal(MiddlewareInterface $middleware): void;

        public function handle(RequestInterface $request, ResponseInterface $response): ResponseInterface;
    }
