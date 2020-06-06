<div>
    <div class="py-2">
        <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
            <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-no-wrap">
                <div class="flex flex-shrink inline-block ml-4 mt-4">
                    <div class="px-1">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative rounded-md shadow-sm">
                            <input wire:model="keyword" class="form-input block w-full sm:text-sm sm:leading-5" placeholder="keyword" />
                        </div>
                    </div>
                    <div class="px-1 relative w-32">
                        <select wire:model="status" class="form-input block w-full sm:text-sm sm:leading-5 px-4 py-2 pr-8">
                            <option value="all">All Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                    <div class="px-1 relative w-32">
                        <select wire:model="role" class="form-input block w-full sm:text-sm sm:leading-5 px-4 py-2 pr-8">
                            <option value="all">All Role</option>
                            <option value="admin">Admin</option>
                            <option value="merchant">Merchant</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                    <div class="px-1 relative w-32">
                        <select wire:model="display" class="form-input block w-full sm:text-sm sm:leading-5 px-4 py-2 pr-8">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>
                <div class="ml-4 mt-4 flex-shrink-0">
                    <a href="{{ route('users.create') }}">
                        <span class="inline-flex rounded-md shadow-sm">
                            <button type="button" class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700">
                                Create new user
                            </button>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col mt-4">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <thead>
                    <tr>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            <div class="flex flex-row justify-between items-center ">
                                User
                                <div class="flex flex-col">
                                    <button wire:click="sort('name', 'asc')" class="focus:outline-none">
                                        <x-zondicon-cheveron-up class="w-3 h-3 {{ ($sortBy == 'name' && $sortOrder == 'asc') ? 'text-gray-600' : 'text-gray-400' }} cursor-pointer hover:text-gray-600"/>
                                    </button>
                                    <button wire:click="sort('name', 'desc')" class="focus:outline-none">
                                        <x-zondicon-cheveron-down class="w-3 h-3 {{ ($sortBy == 'name' && $sortOrder == 'desc') ? 'text-gray-600' : 'text-gray-400' }} cursor-pointer hover:text-gray-600" />
                                    </button>
                                </div>
                            </div>
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            <div class="flex flex-row justify-between items-center ">
                                Phone
                                <div class="flex flex-col">
                                    <button wire:click="sort('phone', 'asc')" class="focus:outline-none">
                                        <x-zondicon-cheveron-up class="w-3 h-3 {{ ($sortBy == 'phone' && $sortOrder == 'asc') ? 'text-gray-600' : 'text-gray-400' }} cursor-pointer hover:text-gray-600"/>
                                    </button>
                                    <button wire:click="sort('phone', 'desc')" class="focus:outline-none">
                                        <x-zondicon-cheveron-down class="w-3 h-3 {{ ($sortBy == 'phone' && $sortOrder == 'desc') ? 'text-gray-600' : 'text-gray-400' }} cursor-pointer hover:text-gray-600" />
                                    </button>
                                </div>
                            </div>
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            <div class="flex flex-row justify-between items-center ">
                                Status
                                <div class="flex flex-col">
                                    <button wire:click="sort('status', 'asc')" class="focus:outline-none">
                                        <x-zondicon-cheveron-up class="w-3 h-3 {{ ($sortBy == 'status' && $sortOrder == 'asc') ? 'text-gray-600' : 'text-gray-400' }} cursor-pointer hover:text-gray-600"/>
                                    </button>
                                    <button wire:click="sort('status', 'desc')" class="focus:outline-none">
                                        <x-zondicon-cheveron-down class="w-3 h-3 {{ ($sortBy == 'status' && $sortOrder == 'desc') ? 'text-gray-600' : 'text-gray-400' }} cursor-pointer hover:text-gray-600" />
                                    </button>
                                </div>
                            </div>
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            <div class="flex flex-row justify-between items-center ">
                                Role
                                <div class="flex flex-col">
                                    <button wire:click="sort('role', 'asc')" class="focus:outline-none">
                                        <x-zondicon-cheveron-up class="w-3 h-3 {{ ($sortBy == 'role' && $sortOrder == 'asc') ? 'text-gray-600' : 'text-gray-400' }} cursor-pointer hover:text-gray-600"/>
                                    </button>
                                    <button wire:click="sort('status', 'desc')" class="focus:outline-none">
                                        <x-zondicon-cheveron-down class="w-3 h-3 {{ ($sortBy == 'role' && $sortOrder == 'desc') ? 'text-gray-600' : 'text-gray-400' }} cursor-pointer hover:text-gray-600" />
                                    </button>
                                </div>
                            </div>
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            <div class="flex flex-row justify-between items-center ">
                                Created at
                                <div class="flex flex-col">
                                    <button wire:click="sort('created_at', 'asc')" class="focus:outline-none">
                                        <x-zondicon-cheveron-up class="w-3 h-3 {{ ($sortBy == 'created_at' && $sortOrder == 'asc') ? 'text-gray-600' : 'text-gray-400' }} cursor-pointer hover:text-gray-600"/>
                                    </button>
                                    <button wire:click="sort('created_at', 'desc')" class="focus:outline-none">
                                        <x-zondicon-cheveron-down class="w-3 h-3 {{ ($sortBy == 'created_at' && $sortOrder == 'desc') ? 'text-gray-600' : 'text-gray-400' }} cursor-pointer hover:text-gray-600" />
                                    </button>
                                </div>
                            </div>
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($users as $user)
                        <tr class="{{ $loop->odd ? 'bg-white' : 'bg-gray-50' }}">
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="{{ $user->photoUrl(['w' => 60, 'h' => 60, 'fit' => 'crop']) }}" alt="image user" />
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm leading-5 font-medium text-gray-900">{{ $user->name }}</div>
                                        <div class="text-sm leading-5 text-gray-500">{{ $user->email }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                {{ $user->phone ?? '-' }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                {{ $user->status }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                {{ $user->role }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                {{ $user->created_at }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                <div class="inline-flex items-center">
                                    <span class="inline-flex">
                                        <a href="{{ route('users.show', ['user' => $user]) }}" class="cursor-pointer text-70 hover:text-primary mr-3 inline-flex items-center has-tooltip focus:outline-none">
                                            <x-zondicon-search class="w-4 h-4 text-gray-400 hover:text-gray-600"/>
                                        </a>
                                    </span>
                                    <span class="inline-flex">
                                        <a href="{{ route('users.edit', ['user' => $user]) }}" class="cursor-pointer text-70 hover:text-primary mr-3 inline-flex items-center has-tooltip focus:outline-none">
                                            <x-zondicon-edit-pencil class="w-4 h-4 text-gray-400 hover:text-gray-600"/>
                                        </a>
                                    </span>
                                    <span class="inline-flex">
                                        <button x-on:click="openDeleteModal('{{ route('users.destroy', ['user' => $user]) }}')" class="cursor-pointer text-70 hover:text-primary mr-3 inline-flex items-center has-tooltip focus:outline-none">
                                            <x-zondicon-trash class="w-4 h-4 text-gray-400 hover:text-gray-600" />
                                        </button>
                                    </span>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="bg-white">
                            <td colspan="6" class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500 text-center">No data found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {!! $users->links('vendor.pagination.tailwindui') !!}
            </div>
        </div>
    </div>
</div>
