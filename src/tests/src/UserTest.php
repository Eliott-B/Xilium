<?php

namespace app\xiliumtest;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use app\models\User;

final class UserTest extends TestCase
{
    public function testCreation()
    {
        $user = new User();
        $user->create([
            'use_username' => "test_username",
            'use_password' => "test_password",
            'use_name' => "test_name",
            'use_firstname' => "test_firstname",
            'role_id' => 1
        ]);
        $users = $user->all();
        $this->assertSame('test_username', end($users)["use_username"]);
        $this->assertSame('test_password', end($users)["use_password"]);
        $this->assertSame('test_name', end($users)["use_name"]);
        $this->assertSame('test_firstname', end($users)["use_firstname"]);
        $this->assertSame(1, end($users)["role_id"]);
        $user->delete(end($users)["use_id"]);
    }

    public function testUpdate()
    {
        $user = new User();
        $user->create([
            'use_username' => "test_username",
            'use_password' => "test_password",
            'use_name' => "test_name",
            'use_firstname' => "test_firstname",
            'role_id' => 1
        ]);
        $users = $user->all();
        $id = end($users)["use_id"];
        $user->find($id);
        $user->update([
            'use_username' => "test_username2",
            'use_password' => "test_password2",
            'use_name' => "test_name2",
            'use_firstname' => "test_firstname2",
            'role_id' => 10
        ]);
        $us = $user->find($id);
        $this->assertSame('test_username2', $us["use_username"]);
        $this->assertSame('test_password2', $us["use_password"]);
        $this->assertSame('test_name2', $us["use_name"]);
        $this->assertSame('test_firstname2', $us["use_firstname"]);
        $this->assertSame(10, $us["role_id"]);
        $user->delete($us["use_id"]);
    }
}