<?php declare(strict_types=1);

    namespace STDW\Contract\Http;


    interface RequestInterface
    {
        /** @return string 
         */
        public function getMethod(): string;

        /** @return UriInterface 
         */
        public function getUri(): UriInterface;

        /** @return array<string, string>
         */
        public function getHeaders(): array;

        /**
         * @param string $name 
         * @return null|string 
         */
        public function getHeader(string $name): ?string;

        /**
         * @param string $name 
         * @return bool 
         */
        public function hasHeader(string $name): bool;

        /** @return array<string, mixed> 
         */
        public function getCookies(): array;

        /**
         * @param string $name 
         * @return null|array<string, mixed> 
         */
        public function getCookie(string $name): ?array;

        /** @return array<string, mixed> 
         */
        public function getParams(): array;

        /**
         * @param string $key 
         * @param mixed $default 
         * @return mixed 
         */
        public function param(string $key, mixed $default = null): mixed;

        /** @return mixed 
         */
        public function getBody(): mixed;

        /**
         * @param string $key 
         * @param mixed $default 
         * @return mixed 
         */
        public function input(string $key, mixed $default = null): mixed;

        /** @return array<string, array<int, UploadedFileInterface>|UploadedFileInterface>
         */
        public function getUploadedFiles(): array;

        /**
         * @param string $name 
         * @return null|array<int, UploadedFileInterface>|UploadedFileInterface 
         */
        public function getUploadedFile(string $name): null|array|UploadedFileInterface;

        /** @return array<string, mixed> 
         */
        public function getAttributes(): array;

        /**
         * @param string $name 
         * @return mixed 
         */
        public function getAttribute(string $name): mixed;

        /**
         * @param string $name 
         * @param mixed $value 
         * @return RequestInterface 
         */
        public function withAttribute(string $name, mixed $value): RequestInterface;

        /**
         * @param string $name 
         * @return RequestInterface 
         */
        public function withoutAttribute(string $name): RequestInterface;
    }
