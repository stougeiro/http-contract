<?php declare(strict_types=1);

    namespace STDW\Contract\Http;


    interface ResponseInterface
    {
        /** @return int 
         */
        public function getStatus(): int;

        /**
         * @param int $code 
         * @return ResponseInterface 
         */
        public function withStatus(int $code): ResponseInterface;

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

        /**
         * @param string $name 
         * @param string $value 
         * @return ResponseInterface 
         */
        public function withHeader(string $name, string $value): ResponseInterface;

        /**
         * @param string $name 
         * @return ResponseInterface 
         */
        public function withoutHeader(string $name): ResponseInterface;

        /** @return null|string 
         */
        public function getBody(): ?string;

        /**
         * @param mixed $body 
         * @return ResponseInterface 
         */
        public function withBody(mixed $body): ResponseInterface;

        /** @return void 
         */
        public function send(): void;
    }
