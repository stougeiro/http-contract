<?php declare(strict_types=1);

    namespace STDW\Contract\Http;


    interface UploadedFileInterface
    {
        /**
         * @param array{
         *     name: string,
         *     type: string,
         *     tmp_name: string,
         *     size: int,
         *     error: int
         * } $data
         * @return UploadedFileInterface 
         */
        public static function fromArray(array $data): UploadedFileInterface;

        /** @return array{
         *     name: string,
         *     type: string,
         *     tmp_name: string,
         *     size: int,
         *     error: int
         *  } $data
         */
        public function getRawData(): array;

        /** @return string 
         */
        public function getName(): string;

        /** @return string 
         */
        public function getType(): string;

        /** @return null|string 
         */
        public function getTmpName(): ?string;

        /** @return int 
         */
        public function getSize(): int;

        /** @return int 
         */
        public function getError(): int;

        /** @return null|string 
         */
        public function getErrorMessage(): ?string;

        /** @return null|string 
         */
        public function getPath(): ?string;

        /**
         * @param string $name 
         * @return UploadedFileInterface 
         */
        public function withName(string $name): UploadedFileInterface;

        /**
         * @param string $path 
         * @return void 
         */
        public function moveTo(string $path): void;
    }
