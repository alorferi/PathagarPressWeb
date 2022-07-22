<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         //Post
         $user_create = Permission::create([
            'name' => Permission::user_create,
            'display_name' => 'user_create',
        ]);

        $user_edit = Permission::create([
            'name' => Permission::user_edit,
            'display_name' => 'user_edit',
        ]);


        //Post
        $post_create = Permission::create([
            'name' => Permission::post_create,
            'display_name' => 'post_create',
        ]);

        $post_edit = Permission::create([
            'name' => Permission::post_edit,
            'display_name' => 'post_edit',
        ]);

        $post_index = Permission::create([
            'name' => Permission::post_index,
            'display_name' => 'post_index',
        ]);

        //Comment
        $comment_create = Permission::create([
            'name' => Permission::comment_create,
            'display_name' => 'comment_create',
        ]);

        $comment_edit = Permission::create([
            'name' => Permission::comment_edit,
            'display_name' => 'comment_edit',
        ]);

        $comment_index = Permission::create([
            'name' => Permission::comment_index,
            'display_name' => 'comment_index',
        ]);



        //Option
        $option_create = Permission::create([
            'name' => Permission::option_create,
            'display_name' => 'option_create',
        ]);

        $option_edit = Permission::create([
            'name' => Permission::option_edit,
            'display_name' => 'option_edit',
        ]);

        $option_index = Permission::create([
            'name' => Permission::option_index,
            'display_name' => 'option_index',
        ]);


        //Author
        $author_create = Permission::create([
            'name' => Permission::author_create,
            'display_name' => 'author_create',
        ]);


        $author_edit = Permission::create([
            'name' => Permission::author_edit,
            'display_name' => 'author_edit',
        ]);


        $author_index = Permission::create([
            'name' => Permission::author_index,
            'display_name' => 'author_index',
        ]);


        //SA
        $saRole =   Role::create([
            'name' => Role::sa,
            'display_name' => 'Super Admin',
        ]);

        $saRole->attachPermission($user_create);
        $saRole->attachPermission($user_edit);

        $saRole->attachPermission($author_create);
        $saRole->attachPermission($author_edit);
        $saRole->attachPermission($author_index);

        $saRole->attachPermission($post_create);
        $saRole->attachPermission($post_edit);
        $saRole->attachPermission($post_index);

        $saRole->attachPermission($comment_create);
        $saRole->attachPermission($comment_edit);
        $saRole->attachPermission($comment_index);

        $saRole->attachPermission($option_create);
        $saRole->attachPermission($option_edit);
        $saRole->attachPermission($option_index);


        $gaRole =   Role::create([
            'name' => Role::ga,
            'display_name' => 'General Admin',
        ]);


        $gaRole->attachPermission($author_create);
        $gaRole->attachPermission($author_edit);
        $gaRole->attachPermission($author_index);




        Role::create([
            'name' => Role::author,
            'display_name' => 'Author',
        ]);
    }
}
