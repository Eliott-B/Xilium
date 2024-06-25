<?php

namespace app\xiliumtest;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use app\models\Role;

final class RoleTest extends TestCase
{
    public function testCreation()
    {
        // $role = new Role();
        // $result = $role->create([
        //     'rol_name' => "text"
        // ]);
        // $new_role = (array)$role->find($role->id);
        // $this->assertTrue($result);
        // $this->assertSame('text', $new_role["rol_name"]);
        // $role->delete(end($roles)["rol_id"]);

        // $role = new Role();
        // $result = $role->create([
        //     'rol_name' => 53.1
        // ]);
        // $roles = $role->all();
        // $this->assertFalse($result);
        // $this->assertNotEquals(53.1, end($roles)["rol_name"]);
    }
}