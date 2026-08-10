<?php declare(strict_types=1);

    namespace STDW\Contract\Http;

    use Stringable;

    interface UriInterface extends Stringable
    {
        /**
         * @param string $url 
         * @return UriInterface 
         */
        public static function fromUrl(string $url): UriInterface;

        /**
         * @param array{
         *     scheme?: string,
         *     host?: string,
         *     port?: null|int,
         *     user?: null|string,
         *     pass?: null|string,
         *     path?: string,
         *     query?: array<string, mixed>,
         *     fragment?: null|string
         * } $data
         * @return UriInterface 
         */
        public static function fromArray(array $data): UriInterface;

        /** @return string 
         */
        public function getScheme(): string;

        /** @return string 
         */
        public function getHost(): string;

        /** @return null|int 
         */
        public function getPort(): ?int;

        /** @return null|string 
         */
        public function getUser(): ?string;

        /** @return null|string 
         */
        public function getPass(): ?string;

        /** @return string 
         */
        public function getAuthority(): string;

        /** @return string 
         */
        public function getPath(): string;

        /** @return array<string, mixed>  
         */
        public function getQuery(): array;

        /** @return null|string 
         */
        public function getFragment(): ?string;
    }
