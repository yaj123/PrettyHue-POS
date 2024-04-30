<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\On;

class UserTable extends Component {
    use WithPagination;
    public $selectedUser = 0;
    public $username, $name, $location, $number, $position, $password;
    public $usersList;
    public User $userObject;

    public function mount(User $userObject) {
        $this->userObject = $userObject;
    }

    public $listeners = [
        'refreshTable' => 'render',
        'populateFieldsEdit' => 'populateFieldsEdit'
    ];

    public function editUser(User $user) {
        $this->userObject = $user;
    }


    public function render() {
        $this->usersList = User::orderBy('created_at', 'DESC')->paginate(10)->items();
        return view('livewire.user-table', ['users' => User::orderBy('created_at', 'DESC')->paginate(10)]);
    }

    public function showDeleteModal($userID) {
        $this->selectedUser = $userID;
    }


    public function deleteUser() {
        if ($this->selectedUser == 0) {
            return;
        }
        $user = User::find($this->selectedUser);
        $user->delete();
        $this->selectedUser = 0;
        session()->flash('message', 'User deleted Successfully!!');
        $this->fetchUsers();
        $this->refresh();
    }

    public function addUser() {
        $this->validate();
        $data = [
            'name' => $this->name,
            'username' =>  $this->username,
            'location'  =>  $this->location,
            'number' =>  $this->number,
            'position' =>  $this->position,
            'password' =>  Hash::make($this->password),
        ];

        try {
            User::create($data);
            session()->flash('message', 'User added Successfully!!');
            $this->resetFields();
            $this->resetPage();
        } catch (\Exception $e) {
            session()->flash('success', $e->getMessage());
            $this->resetPage();
        }
    }

    public function resetFields() {
        $this->name = '';
        $this->username = '';
        $this->location = '';
        $this->number = '';
        $this->position = '';
        $this->password = '';
    }

    protected $rules = [
        'userObject.username' => 'required',
        'userObject.name' => 'required',
        'userObject.number' => 'required',
        'userObject.location' => 'required',
        'userObject.position' => 'required',
    ];

    public function fetchUsers() {
        $this->usersList = User::orderBy('created_at', 'DESC')->paginate(10)->items();
    }
}
