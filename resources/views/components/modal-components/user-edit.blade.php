<!-- Edit user modal -->
<div wire:ignore.self id="editUserModal" tabindex="-1" aria-hidden="true" class="modal fade fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <form class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            @csrf
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Edit user
                </h3>
            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editUserModal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <x-input-label for="username">Username</x-input-label>
                        <x-text-input type="text" name="username" id="username" placeholder="Username" required="" wire:model="selectedUsername"/>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-input-label for="name">Name</x-input-label>
                        <x-text-input type="text" name="name" id="name" placeholder="Name" required="" value="{{ $selectedName}}" />
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-input-label for="location">Location</x-input-label>
                        <x-text-input type="text" name="location" id="location" placeholder="Location" required="" value="{{ $selectedLocation }}"/>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-input-label for="number">Number</x-input-label>
                        <x-text-input  wire:model="selectedNumber" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" name="number" id="number" placeholder="Number" required="" maxlength="11" /> 
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-input-label for="position">Position</x-input-label>
                        <x-text-input type="text" name="position" id="position" placeholder="Position" required="" value="{{ $selectedPosition }}"/>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-input-label for="password">New Password</x-input-label>
                        <x-text-input type="password" name="password" id="password" placeholder="••••••••"/>
                    </div>   
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                <button wire:click="userUpdate" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
            </div>
        </form>
    </div>
</div>