<?php declare(strict_types=1);

    namespace STDW\Contract\Http;


    interface MiddlewareManagerInterface
    {
        public function add(MiddlewareInterface $middleware): void;

        public function setFinalHandler(MiddlewareInterface $middleware): void;

        public function handle(RequestInterface $request, ResponseInterface $response): ResponseInterface;
    }
