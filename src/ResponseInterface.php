<?php declare(strict_types=1);

    namespace STDW\Contract\Http;


    interface ResponseInterface
    {
        public function getStatus(): int;

        public function withStatus(int $code): ResponseInterface;

        public function getHeaders(): array;

        public function getHeader(string $name): ?string;

        public function hasHeader(string $name): bool;

        public function withHeader(string $name, string $value): ResponseInterface;

        public function withoutHeader(string $name): ResponseInterface;

        public function getBody(): mixed;

        public function withBody(mixed $body): ResponseInterface;

        public function send(): void;
    }
