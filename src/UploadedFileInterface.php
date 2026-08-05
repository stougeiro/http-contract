<?php declare(strict_types=1);

    namespace STDW\Contract\Http;


    interface UploadedFileInterface
    {
        public static function fromArray(array $data): UploadedFileInterface;

        public function getRawData(): array;

        public function getName(): string;

        public function getType(): string;

        public function getSize(): int;

        public function getTmpName(): ?string;

        public function getError(): int;

        public function getErrorMessage(): ?string;

        public function getPath(): string;

        public function getFilename(): string;

        public function withName(string $filename): UploadedFileInterface;

        public function moveTo(string $targetPath): void;
    }
