<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use TiagoMarciano\Acl\Acl;
use TiagoMarciano\Acl\Entities\Permission;
use TiagoMarciano\Acl\Entities\Resource;
use TiagoMarciano\Acl\Entities\Role;

class DefaultController extends Controller
{
    public function index()
    {
        $permission = new Permission();
        $permission->setName("view");

        $role = new Role("supervisor");
        $role->addPermissions($permission);

        $roles[] = $role;

        $resource = new Resource(Book::class, "getUserId");
        $resources[] = $resource;

        $book = new Book::find(1);
        $user = new User::find(1);

        $acl = new Acl($roles, $resources);
        $acl->setUser($user);

        dd($acl->isOwner($book));

    }
}
