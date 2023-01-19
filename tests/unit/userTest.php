<?php
namespace Test\Unit;

use PHPUnit\Framework\TestCase;
use Model\User;

//Nota de corte. Si sacas esta nota o menos estas suspendido
class userTest extends TestCase {
public function testUserIsAnAdultReturnsFalseForMinors(){
$user = new User(4);
$this->assertEquals(false, $user->IsAnAdult());
}

//Notas de los alumnos
public function testIsAnAdultReturnsTrueForPeopleOrderThanTreshold(){
$user = new User(6);
$this->assertTrue($user->isAnAdult());

$user = new User(8);
$this->assertTrue($user->isAnAdult());

$user = new User(9);
$this->assertTrue($user->isAnAdult());


}
//Nota a comparar, si es 5 o mas esta aprobado
public function testIsAnAdultReturnsTrueForTreshold(){
    $user = new User(5);
    $this->assertTrue($user->isAnAdult());
}

}