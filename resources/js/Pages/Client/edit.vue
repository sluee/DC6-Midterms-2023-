<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3'
</script>

<template>
    <Head title="Create client"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl  leading-tight">
                Create Client
            </h2>
        </template>
        <!-- component -->
        <div class="py-12">
            <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                    <form>
                        <div class="grid gap-6 mb-6 lg:grid-cols-2">
                            <div>
                                <label for="first_name" class="block mb-2 text-sm font-medium text-black dark:text-white-300">First name</label>
                                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" >
                            </div>
                            <div>
                                <label for="last_name" class="block mb-2 text-sm font-medium text-black ">Last name</label>
                                <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" >
                            </div>
                            <div>
                                <label for="address" class="block mb-2 text-sm font-medium text-black ">Address</label>
                                <input type="text" id="address" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Address" >
                            </div>
                            <div>
                                <label for="company" class="block mb-2 text-sm font-medium text-black ">Company</label>
                                <input type="text" id="company" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="091212*****" >
                            </div>
                            <div>
                                <label for="company" class="block mb-2 text-sm font-medium text-black ">Company</label>
                                <input type="text" id="company" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1000" >
                            </div>

                        </div>
                        <div class="flex justify-between mt-5">
                            <h1 class="text-3xl font-medium text-gray-700 "></h1>
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Client</button>
                        </div>
                    </form>
                </div>
            </div>
         </div>
    </AuthenticatedLayout>
</template>
