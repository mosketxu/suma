<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Database\Eloquent\Model;

class UserModelTest extends TestCase
{
    /** @test */
    // function a_user_owns_model()
    // {
    //     $userA=$this->createUser();
    //     $userB=$this->createUser();

    //     $ownedByUserA=new OwnedModel(['user_id'=>$userA->id]);
    //     $ownedByUserB=new OwnedModel(['user_id'=>$userB->id]);
        
    //     $this->assertTrue($userA->owns($ownedByUserA));
    //     $this->assertTrue($userB->owns($ownedByUserB));

    //     $this->assertFalse($userA->owns($ownedByUserB));
    //     $this->assertFalse($userB->owns($ownedByUserA));

    // }
}

class OwnedModel extends Model{
    // es una clase de soporte para la prueba
    protected $guarded=[];
}