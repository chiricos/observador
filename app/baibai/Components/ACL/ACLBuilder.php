<?php namespace baibai\baibai\Components\ACL;

use baibai\User;
use baibai\baibai\Entities\Role;

class ACLBuilder
{
    private $idRole;
    private $idUser;
    private $permissionName;
    private $permissions;


    public function getPermissionsAll($idUser = false){
        $this->idUser = ($idUser) ? $idUser : (\Auth::check() ? \Auth::user()->id : false);
        $this->idRole = User::find($this->idUser)->role_id;
        $permissionsRole = $this->permissionsRole();
        $permissionsUser = $this->permissionsUser();
        return ['permissionsRole' => $permissionsRole,
            'permissionsUser' => $permissionsUser,
            'permissionsMerge' => array_merge(
                $permissionsRole, $permissionsUser
            )
        ];
    }
    public function getPermissions($idUser = false){
        $this->idUser = ($idUser) ? $idUser : (\Auth::check() ? \Auth::user()->id : false);
        $this->idRole = User::find($this->idUser)->role_id;
        return array_merge(
            $this->permissionsRole(), $this->permissionsUser()
        );

    }
    public function check($permissionName,$idUser = false)
    {
        $this->permissionName = $permissionName;
        $this->idUser = ($idUser) ? $idUser : (\Auth::check() ? \Auth::user()->id : false);
        $this->idRole = User::find($this->idUser)->role_id;

        return $this->compileACL();

    }

    private function compileACL(){
        if( ! $this->idRole ){ return false; }
        $this->permissions = array_merge(
            $this->permissionsRole(), $this->permissionsUser()
        );
        return $this->checkPermission();
    }

    private function checkPermission(){
        return (array_key_exists( $this->permissionName, $this->permissions))
            ?($this->permissions[$this->permissionName]['available'])?true:false
            :false;

    }
    private function permissionsRole()
    {
        $data = array();
        $permissions = Role::join('permission_roles', 'roles.id', '=', 'permission_roles.role_id')
            ->join('permissions', 'permission_roles.permission_id', '=', 'permissions.id')
            ->whereRaw('roles.id = ? AND permission_roles.available = ?', [$this->idRole, 1])
            ->get();


        foreach($permissions as $permission){
            $key = $permission->name;
            $data[$key] = array(
                'permissionName' => $key,
                'available' => $permission->available,
                'inherit' => false,
            );
        }
        return $data;

    }
    private function permissionsUser(){
        $data = array();
        $permissions = User::join('permission_users', 'users.id', '=', 'permission_users.user_id')
            ->join('permissions', 'permission_users.permission_id', '=', 'permissions.id')
            ->whereRaw('users.id = ? ', [$this->idUser])
            ->get();

        foreach($permissions as $permission){
            $key = $permission->name;
            $data[$key] = array(
                'permissionName' => $key,
                'available' => $permission->available,
                'inherit' => true,
            );
        }
        return  $data;
    }
}
