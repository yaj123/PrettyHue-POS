<div class="p-4 sm:ml-64">
          <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
          <div class="text-gray-900">
            <strong>
             <span class="flex-1 ms-3 whitespace-nowrap" style="font-size:150%;">User Management</span>
            </strong>
          </div>
                    <div class="relative overflow-x-auto">
                        <x-user-components.user-field-section />

                    </div>
                    <div class="relative overflow-x-auto bg-white rounded-lg shadow dark:bg-gray-700" style="padding: 1%; height: 400px; margin-top:5px;">
                        <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <strong>
                                    <tr>
                                        <x-table-components.thead>
                                            Username
                                        </x-table-components.thead>

                                        <x-table-components.thead>
                                            Name
                                        </x-table-components.thead>

                                        <x-table-components.thead>
                                            Location
                                        </x-table-components.thead>

                                        <x-table-components.thead>
                                            Number
                                        </x-table-components.thead>

                                        <x-table-components.thead>
                                            Position
                                        </x-table-components.thead>

                                        <x-table-components.thead>
                                            Action
                                        </x-table-components.thead>
                                    </tr>
                                </strong>
                            </thead>
                            <tbody>
                                @foreach($usersList as $user)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                    <x-table-components.tdata>
                                        {{ $user->username}}
                                    </x-table-components.tdata>

                                    <x-table-components.tdata>
                                        {{ $user->name}}
                                    </x-table-components.tdata>

                                    <x-table-components.tdata>
                                        {{ $user->location}}
                                    </x-table-components.tdata>

                                    <x-table-components.tdata>
                                        {{ $user->number}}
                                    </x-table-components.tdata>

                                    <x-table-components.tdata>
                                        {{ $user->position}}
                                    </x-table-components.tdata>

                                    <x-table-components.tdata>
                                        <x-delete-button wire:click="showDeleteModal( {{ $user->id }})" data-modal-target="deleteUserModal" data-modal-show="deleteUserModal" type="button">
                                            {{ __('Delete') }}
                                        </x-delete-button>
                                        <x-edit-button wire:click="editUser({{$user->id }})" type="button">
                                            {{ __('View') }}
                                        </x-edit-button>
                                    </x-table-components.tdata>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $users -> links() }}
                    @include('components.modal-components.user-delete')
          </div>

</div>
