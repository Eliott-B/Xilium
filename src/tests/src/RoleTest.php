<?php

namespace app\xiliumtest;

use PHPUnit\Framework\TestCase;
use app\models\Role;
use Exception;

final class RoleTest extends TestCase
{
    public function testCreation()
    {
        $role = new Role();
        $role->create([
            'rol_id' => 400,
            'rol_name' => "text"
        ]);
        $new_role = (array)$role->find(400);
        $this->assertSame('text', $new_role["rol_name"]);
        $role->delete($new_role["rol_id"]);

        $role = new Role();
        try {
            $role->create([
                'rol_id' => 400,
                'rol_name' => 53.1
            ]);
            $this->fail("Le nom du role doit être une chaine de caractère");
        } catch (Exception $e) {
            $this->assertEquals("Le nom du role doit être une chaine de caractère", $e->getMessage());
        }
        
        try {
            $new_role = (array)$role->find(400);
            $this->fail("Aucun enregistrement trouvé");
        }
        catch (Exception $e) {
            $this->assertEquals("Aucun enregistrement trouvé", $e->getMessage());
        }
        
    }

    public function testUpdate()
    {
        $role = new Role();
        $role->create([
            'rol_id' => 400,
            'rol_name' => "text"
        ]);
        $role->find(400);
        $role->update([
            'rol_name' => "text2"
        ]);
        $new_role = (array)$role->find(400);
        $this->assertSame('text2', $new_role["rol_name"]);
        $role->delete($new_role["rol_id"]);

        
        $role = new Role();
        try {
            $role->find(400);
            $role->update([
                'rol_name' => "text2"
            ]);
            $this->fail("Aucun enregistrement trouvé");
        }
        catch (Exception $e) {
            $this->assertEquals("Aucun enregistrement trouvé", $e->getMessage());
        }

        $role = new Role();
        try {
            $role->find(1);
            $role->update([
                'rol_name' => 53.1
            ]);
            $this->fail("Le nom du role doit être une chaine de caractère");
        }
        catch (Exception $e) {
            $this->assertEquals("Le nom du role doit être une chaine de caractère", $e->getMessage());
        }
    }

    public function testDelete()
    {
        $role = new Role();
        $role->create([
            'rol_id' => 400,
            'rol_name' => "text"
        ]);
        $role->delete(400);
        try {
            $role->find(400);
            $this->fail("Aucun enregistrement trouvé");
        }
        catch (Exception $e) {
            $this->assertEquals("Aucun enregistrement trouvé", $e->getMessage());
        }
    }
}