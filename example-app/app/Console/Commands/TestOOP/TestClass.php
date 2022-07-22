<?php

declare(strict_types=1);


namespace App\Console\Commands\TestOOP;


use App\Console\Commands\TestCommand;

class TestClass
{
    private static string|int $firstStatic;

    public function __construct(
        private int|string $first,
        private int|string $second
    )
    {
    }

    public function sum(): int
    {
        $this->transfom();
        return $this->first + $this->second;
    }

    private function transfom(): void
    {
        try {
            $this->first = (int)$this->first;
            $this->second = (int)$this->second;
        } catch (\Throwable $e) {
            $e->getMessage();
        }
    }

    public static function setSumStatic(int|string $firstStatic): void
    {
        self::$firstStatic = $firstStatic;
    }

    public static function getSumStatic(): int|string
    {
        return self::$firstStatic;
    }
}

class Encoded
{
    public static string $text;
    public static string $textDecoder = 'ZHNmc2Rmc2Rmc2RkZXJmYWVyZw==';


    public function __construct(public string $textDynamic = 'ZHNmc2Rmc2Rmc2RkZXJmYWVyZw==')
    {

    }

    public function encode(): void
    {
         $this->textDynamic = base64_encode($this->textDynamic);
    }

    public function getTextDynamicEncoded()
    {
        return $this->textDynamic;
    }

    public static function setTextEncoded(string $text): void
    {
        self::$text = $text;
    }

    public static function getTextDecoded(): string
    {
        $textDecoder = base64_decode(self::$textDecoder);
        return $textDecoder;
    }

    public static function getTextEncoded(): string
    {
        $textCoder = base64_encode(self::$text);
        return $textCoder;
    }
}
