<div>
    <div class="shadow  rounded-md overflow-hidden ">
        <div class="bg-white space-y-6  rounded-t-md">

            <form wire:submit.prevent="search">
                <div class="">
                    <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 flex items-center">
                            <span class="">Search Filters</span>
                        </h3>
                        @include('include.errors')

                        <div class="grid grid-cols-10 gap-6">
                            <div class="col-span-8 sm:col-span-2 lg:col-span-2">
                                <label for="name"
                                       class="block text-sm font-medium text-gray-700">Customer Name</label>
                                <input id="name" type="text" autocomplete="off"
                                       class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div class="col-span-8 sm:col-span-2 lg:col-span-2">
                                <label for="company"
                                       class="block text-sm font-medium text-gray-700">Business Name</label>
                                <input id="company" type="text" autocomplete="off"
                                       class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div class="col-span-8 sm:col-span-2 lg:col-span-2">
                                <label for="location"
                                       class="block text-sm font-medium text-gray-700">Location</label>
                                <input id="location" type="number" autocomplete="off"
                                       class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>


                            <div class="col-span-8 sm:col-span-2">
                                <button type="submit"
                                        class="bg-white mt-6 py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Search
                                </button>
                                <button type="button" wire:click="clear"
                                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                    Reset
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="mt-5 shadow sm:rounded-md">
        <div class="flex flex-col">
            <div class="-my-2  sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="bg-white py-6 px-4 space-y-6 sm:p-6  rounded-t-md">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Customers</h3>
                            <a href="#"
                               class="bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                                Add Customer
                            </a>
                        </div>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50 ">
                        <tr>
                            <th scope="col" class="px-3 py-3 text-left text-sm font-medium text-gray-500   ">
                                #
                            </th>

                            <th wire:click="sortBy('s.business_name')" scope="col"
                                class="px-3 py-3 cursor-pointer text-left text-sm font-medium text-gray-500">
                                Business Name
                            </th>
                            <th wire:click="sortBy('s.primary_contact_name')" scope="col"
                                class="px-3 py-3 cursor-pointer text-left text-sm font-medium text-gray-500">
                                Contact Name
                            </th>
                            <th scope="col" class="px-3 py-3 text-left text-sm font-medium text-gray-500   ">
                                Email
                            </th>
                            <th scope="col" class="px-3 py-3 text-left text-sm font-medium text-gray-500   ">
                                Phone
                            </th>
                            <th scope="col" class="px-3 py-3 text-left text-sm font-medium text-gray-500 content  ">
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            </td>
                            <td class="px-3 py-4 whitespace-nowrap text-sm text-gray-500">
                            </td>
                            <td class="px-3 py-4 whitespace-nowrap text-sm text-gray-500">
                            </td>

                            <td class="px-3 py-4 whitespace-nowrap text-sm text-gray-500">
                            </td>
                            <td class="px-3 py-4 whitespace-nowrap text-sm text-gray-500">
                            </td>
                            <td class="px-3 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex">
                                    <a href="#"
                                       class="">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="text-blue-500 hover:text-blue-600 cursor-pointer h-5 w-4"
                                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                        </svg>
                                    </a>
                                    <span class="mx-1 text-gray-500 font-light">|</span>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="text-red-500 hover:text-red-600 cursor-pointer h-5 w-4"
                                             fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
