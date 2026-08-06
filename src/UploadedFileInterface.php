<?php declare(strict_types=1);

    namespace STDW\Contract\Http;


    interface UploadedFileInterface
    {
        /**
         * @param array{
         *     name: string,
         *     type: string,
         *     tmp_name: string,
         *     error: int,
         *     size: int
         * } $data
         * @return UploadedFileInterface 
         */
        public static function fromArray(array $data): UploadedFileInterface;

        /** @return array{
         *     name: string,
         *     type: string,
         *     tmp_name: string,
         *     error: int,
         *     size: int
         *  } $data
         */
        public function getRawData(): array;

        /** @return string 
         */
        public function getName(): string;

        /** @return string 
         */
        public function getType(): string;

        /** @return int 
         */
        public function getSize(): int;

        /** @return null|string 
         */
        public function getTmpName(): ?string;

        /** @return int 
         */
        public function getError(): int;

        /** @return null|string 
         */
        public function getErrorMessage(): ?string;

        /** @return string 
         */
        public function getPath(): string;

        /** @return string 
         */
        public function getFilename(): string;

        /**
         * @param string $filename 
         * @return UploadedFileInterface 
         */
        public function withName(string $filename): UploadedFileInterface;

        /**
         * @param string $targetPath 
         * @return void 
         */
        public function moveTo(string $targetPath): void;
    }
