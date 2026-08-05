<?php declare(strict_types=1);

    namespace STDW\Contract\Http;


    interface UriInterface
    {
        public static function fromArray(array $data): UriInterface;

        public function getScheme(): string;

        public function getHost(): string;

        public function getPort(): ?int;

        public function getUser(): ?string;

        public function getPass(): ?string;

        public function getAuthority(): string;

        public function getPath(): string;

        public function getQuery(): array;

        public function getFragment(): ?string;
    }
