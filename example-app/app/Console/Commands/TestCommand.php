<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Console\Commands\TestOOP\Encoded;
use App\Console\Commands\TestOOP\TestClass;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:test ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run test';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
//        $testObject = new TestClass(2, 3);
//          $this->info($testObject->sum());

//        TestClass::setSumStatic('muslim and akim');

//        $arg  = $this->argument('optionString');
////        $this->info($arg);

//        Encoded::setTextEncoded($arg);
//        $this->info(Encoded::getTextEncoded());

        $this->info(Encoded::getTextDecoded());


//        $textEncoded = new Encoded($arg);
//        $textEncoded->encode();
//        $this->info($textEncoded->getTextDynamicEncoded());

        return 0;
    }
}
