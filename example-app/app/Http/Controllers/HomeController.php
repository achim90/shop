<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Hashing\HashManager;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class HomeController
{

    public $name = 'Jeseka';
    public $namePet = 'Peti';
    public $age = 5;
    public $kindOfPet = 'dog';


    public function setPet($name, $namePet, $age ,$kindOfPet)
    {

        $this->name= 'This is '. $name. 's pet' ;
        $this->namePet= 'it is name '. $namePet;
        $this->age= 'it is '. $age. ' years old';
        $this->kindOfPet = 'this is a '. $kindOfPet;
    }

    public function getName()
    {
        return  'This is '. $this->name. 's pet'. "\n"  .
                'it is name '. $this->namePet. "\n"  .
                'it is '. $this->age. ' years old'. "\n" .
                'this is a '. $this->kindOfPet;
    }
}

$myPet = new HomeController();

$myPet->setPet('July','Ben', 4, 'ket');

//echo $myPet->name. "\n" ;
//echo $myPet->namePet. "\n" ;
//echo $myPet->age. "\n";
//echo $myPet->kindOfPet. "\n";
//echo $myPet->getName();


//////////////////////////////////////////////////////////////////////////



class HomeControllerConstructor
{
    public $name = 'Jeseka';
    public $surName = 'Belly';
    public $age = 25;
    public $hobby = ['piskadrocher', 'anonizm', 'cooking'];
    public function __construct($name, $surName, $age, $hobby)
    {
        $this->name = $name;
        $this->surName = $surName;
        $this->age = $age;
        $this->hobby = $hobby;

    }
}

$person = new HomeControllerConstructor('Vasy', 'Pupkin', 45, ['gdfgsdgr', 'dfgsgsth', 'fgsdgrgdrg']);
echo $person->surName. "\n";

foreach ($person->hobby as $pr) {
    echo $pr. "\n";

}


//////////////////////////////////////////////////////////////////////////



class HomeControllerExtends
{

    public $name = 'Jeseka';
    public $namePet = 'Peti';
    public $age = 5;
    public $kindOfPet = 'dog';


    public function __construct(string $name, string $namePet, int $age, string $kindOfPet)
    {
        $this->name = $name;
        $this->namePet = $namePet;
        $this->age = $age;
        $this->kindOfPet = $kindOfPet;
    }
}

class HomeControllerExtendsOne extends HomeControllerExtends
{
    public $haveEat = ['meat', 'eggs'];

    public function __construct(string $name, string $namePet, int $age, string $kindOfPet, array $haveEat)
    {
        parent::__construct($name, $namePet, $age, $kindOfPet);
        $this->haveEat = $haveEat;

    }
}
$myPet = new HomeControllerExtendsOne(
    'July',
    'Ben',
    4,
    'ket',
    ['dd'=>'dfsfdf', 'dfsdfas']);

print_r($myPet);



///////////////////////////////////////////////////////////////////////////////////////


$users = [
    [
        'id' => 1,
        'name' => 'Maya Dooley',
        'email' => 'dillon02@example.com',
        'email_verified_at' => '2022-07-02T17:46:17.000000Z',
        'created_at' => '2022-07-02T17:46:17.000000Z',
        'updated_at' => '2022-07-02T17:46:17.000000Z',
        'bank_details' => 'WSmN774VsC',
        'address' => '478 Nelle Curve\nDickifort, DE 35362-6224',
        'treaty' => 459186,
        'phone_number' => '785-767-5841',
        'contact_name' => 'Nolan Rice'
    ],
    [
        'id' => 2,
        'name' => 'Ardella Stamm',
        'email' => 'brad47@example.com',
        'email_verified_at' => '2022-07-02T17:46:17.000000Z',
        'created_at' => '2022-07-02T17:46:17.000000Z',
        'updated_at' => '2022-07-02T17:46:17.000000Z',
        'bank_details' => '0VxoVOkuk6',
        'address' => '19959 Mayer Parkway\nWilfridstad, WY 27816-1086',
        'treaty' => 3333,
        'phone_number' => '+1 (351) 329-0075',
        'contact_name' => 'Lucie Farrell'
    ],
    [
        'id' => 3,
        'name' => 'Brennan Romaguera',
        'email' => 'wbeatty@example.net',
        'email_verified_at' => '2022-07-02T17:46:17.000000Z',
        'created_at' => '2022-07-02T17:46:17.000000Z',
        'updated_at' => '2022-07-02T17:46:17.000000Z',
        'bank_details' => 'stfL391O7C',
        'address' => '37286 Grant Crossroad\nEast Alexys, KS 74602-9923',
        'treaty' => 946236,
        'phone_number' => '(440) 649 - 5391',
        'contact_name' => 'Prof. Jakob Pagac II'
    ],
    [
        'id' => 4,
        'name' => 'Mr. Toy Beatty',
        'email' => 'parker.sally@example.com',
        'email_verified_at' => '2022-07-02T17:46:17.000000Z',
        'created_at' => '2022-07-02T17:46:17.000000Z',
        'updated_at' => '2022-07-02T17:46:17.000000Z',
        'bank_details' => 'c6YMIhKZKU',
        'address' => '5656 Stoltenberg Loaf Apt. 936\nAmericabury, UT 63440-2418',
        'treaty' => 3333,
        'phone_number' => '1-217-588-4248',
        'contact_name' => 'Sarah Turner'
    ],
];
$name = 3333;


foreach ($users as $user) {
    echo $user ['id']. ' ';
       if($user ['treaty'] == $name) {
           echo ($user['name'])  . "\n";
//           echo print_r($user)  . "\n";
       }else {
           echo 'No' ."\n";
       }
}



$name = '';
if ($name ) {
    echo 'yes';
} else{
    echo 'no';

}










$person = [
    'name' => 'Vasya',
    'age' => 20,

];

$person['hobby'] = 'swimming'; //ADD A NEW KAY=>VALUE

unset($person['name']);// delete KAY=>VALUE

print_r($person);//prent array

