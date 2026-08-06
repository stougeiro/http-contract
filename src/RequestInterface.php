<?php declare(strict_types=1);

    namespace STDW\Contract\Http;


    interface RequestInterface
    {
        public function getMethod(): string;

        public function getUri(): UriInterface;

        public function getHeaders(): array;

        public function getHeader(string $name): ?string;

        public function hasHeader(string $name): bool;

        public function getCookies(): array;

        public function getParams(): array;

        public function param(string $key, ?string $cast = null): mixed;

        public function getBody(): mixed;

        public function input(string $key, ?string $cast = null): mixed;

        public function getUploadedFiles(): array;

        public function getUploadedFile(string $name): ?UploadedFileInterface;

        public function getAttributes(): array;

        public function getAttribute(string $name): mixed;

        public function withAttribute(string $name, mixed $value): RequestInterface;

        public function withoutAttribute(string $name): RequestInterface;
    }
