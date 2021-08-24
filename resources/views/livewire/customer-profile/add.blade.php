<div>
    <div class="pb-5">
        <div class="flex items-center justify-between">
            <h3 class="text-lg leading-6 font-medium text-gray-900 flex items-center">
                <a href="#"
                   class="p-3 bg-gray-200 border-2 rounded-md  border-gray-400 cursor-pointer hover:bg-gray-300 ">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            fill-rule="evenodd"
                            d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <span class="ml-4">Add Customer Profile</span>
            </h3>
        </div>
    </div>
    <form wire:submit.prevent="save">
        <div class="shadow  rounded-md overflow-hidden ">
            <div class="bg-white space-y-6  rounded-t-md">
                <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                    @include('include.errors')
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-2 lg:col-span-2">
                            <label for="customer_name"
                                   class="block text-sm font-medium text-gray-700">Customer Name</label>
                            <input type="text" autocomplete="off"
                                   id="customer_name"
                                   class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6 sm:col-span-2 lg:col-span-2">
                            <label for="business_name"
                                   class="block text-sm font-medium text-gray-700">Business Name</label>
                            <input type="text" autocomplete="off"
                                   id="business_name"
                                   class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6 sm:col-span-2 lg:col-span-2">
                            <label for="contact_number"
                                   class="block text-sm font-medium text-gray-700">Contact Number</label>
                            <input type="text" autocomplete="off"
                                   id="contact_number"
                                   class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6 sm:col-span-2 lg:col-span-2">
                            <label for="general_email"
                                   class="block text-sm font-medium text-gray-700">General Email</label>
                            <input type="email" name="gen_email"
                                   autocomplete="off"
                                   class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6 sm:col-span-2 lg:col-span-2">
                            <label for="accounts_email"
                                   class="block text-sm font-medium text-gray-700">Accounts Email</label>
                            <input type="email" name="account_email"
                                   autocomplete="off"
                                   class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6 sm:col-span-2 lg:col-span-2">
                            <label for="sales_email"
                                   class="block text-sm font-medium text-gray-700">Sales Email</label>
                            <input type="email" name="sale_email"
                                   autocomplete="off"
                                   class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6 sm:col-span-2 lg:col-span-2">
                            <label for="phone"
                                   class="block text-sm font-medium text-gray-700">Phone</label>
                            <input type="text" name="phone"
                                   autocomplete="off"
                                   class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6 sm:col-span-2 lg:col-span-2">
                            <label for="primary_contact_number"
                                   class="block text-sm font-medium text-gray-700">Primary Contact Number</label>
                            <input type="text" autocomplete="off"
                                   name="pri_contact_number"
                                   class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6 sm:col-span-2 lg:col-span-2">
                            <label for="secondary_contact_number"
                                   class="block text-sm font-medium text-gray-700">Secondary Contact Number</label>
                            <input type="text"
                                   autocomplete="off"
                                   name="sec_contact_number"
                                   class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6 sm:col-span-2 lg:col-span-2">
                            <label for="post_code"
                                   class="block text-sm font-medium text-gray-700">Post Code</label>
                            <input type="text" autocomplete="off"
                                   name="code"
                                   class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6 sm:col-span-6 lg:col-span-6">
                            <label for="address1"
                                   class="block text-sm font-medium text-gray-700">Address 1</label>
                            <input type="text" autocomplete="off"
                                   name="address_1"
                                   class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6 sm:col-span-6 lg:col-span-6">
                            <label for="address2"
                                   class="block text-sm font-medium text-gray-700">Address 2</label>
                            <input type="text" autocomplete="off"
                                   name="address_2"
                                   class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit"
                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <div wire:loading wire:target="save">
                        Saving...
                    </div>
                    <div wire:loading.remove wire:target="save">
                        Save
                    </div>
                </button>
            </div>
        </div>
    </form>
</div>
