
@if ($errors->any())
<div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <span class="sr-only">Info</span>
    <div>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </div>
</div>
@endif

@if (session()->has('message'))
<div class="flex items-center p-4 mb-4 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:border-green-800 flash-message">
    <div class="text-black text-sm"> {{ session('message') }}</div>
</div>
 @endif	


    <div class="relative" style="height: 400px">
        <div class="relative bg-white shadow dark:bg-gray-700 rounded-lg shadow dark:bg-gray-700" style="padding: 1%; margin: 5px;" >
            <h1> User Information </h1>
        
            <form style="margin: 5px"  method="POST">
                <div class="p-1 space-y-1">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-9 sm:col-span-1">
                            <x-input-label for="username">Username</x-input-label>
                            <x-user-components.text-input-field-user wire:model="userObject.username" type="text" name="username" id="username" placeholder="Username" required=""/>
                        </div>
                        <div class="col-span-9 sm:col-span-2">
                            <x-input-label for="name">Name</x-input-label>
                            <x-user-components.text-input-field-user wire:model="userObject" type="text" name="name" id="name" placeholder="Name" required=""/> 
                        </div>
                        <div class="col-span-9 sm:col-span-1">
                            <x-input-label for="location">Location</x-input-label>
                            <x-user-components.text-input-field-user wire:model="userObject" type="text" name="location" id="location" placeholder="Location" required=""/>
                        </div>
                        <div class="col-span-9 sm:col-span-2">
                            <x-input-label for="number">Number</x-input-label>
                            <x-user-components.text-input-field-user wire:model="userObject" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" name="number" id="number" placeholder="Number" required="" maxlength="11"/>
                        </div>
                        <div class="col-span-9 sm:col-span-1">
                            <x-input-label for="position">Position</x-input-label>
                            <x-user-components.text-input-field-user wire:model="userObject" type="text" name="position" id="position" placeholder="Position" required=""/>
                        </div>
                        <div class="col-span-9 sm:col-span-2">
                            <x-input-label for="password">Password</x-input-label>
                            <x-user-components.text-input-field-user type="password" name="password" id="password" placeholder="••••••••" required=""/>
                            
                        </div>  
                        <div class="col-span-9 sm:col-span-2">
                            <button wire:click="addUser" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add User</button>
                            <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-greed-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Update</button>
                        </div>   
                    </div> 
                </div>
            </form>
        </div>
    </div>