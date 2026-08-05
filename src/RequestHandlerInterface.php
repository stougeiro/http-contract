<?php declare(strict_types=1);

    namespace STDW\Contract\Http;


    interface RequestHandlerInterface
    {
        public function handle(RequestInterface $request, ResponseInterface $response): ResponseInterface;
    }
