<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import {inject} from 'vue'

const props = defineProps({
    users:Object
})

let deleteForm = useForm({});

let selectedUserForDelete = null
function remove(prod) {
    selectedUserForDelete = prod
    deleteForm.delete('/products/ '+selectedUserForDelete.id)
}

const themeMode = inject('themeMode')
</script>

<template>
     <Head title="Users" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl leading-tight">Users</h2>
        </template>

        <div class="py-12">
            <div class="flex justify-between mt-5 mb-2">
                <h1 class="text-3xl font-medium text-gray-700 "></h1>
                <Link href="users/create" v-if="$page.props.auth.permissions.includes('create-product')" class="btn-primary inline-flex items-center mr-20 px-3 py-3 bg-blue-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 focus:bg-blue-600 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    Create User</Link>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" :class="themeMode">
                <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                    <!-- component -->
                    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
                    <table class="w-full border-collapse  text-left text-sm ">
                        <thead class="">
                        <tr>
                            <th scope="col" class="px-6 py-4 font-medium ">Name</th>
                            <th scope="col" class="px-6 py-4 font-medium ">Email</th>
                            <th scope="col" class="px-6 py-4 font-medium "></th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 border-t border-gray-100" v-for="usr in users" :key="usr.id">
                        <tr class="hover:bg-gray-50">
                            <th class="flex gap-3 px-6 py-4 font-normal ">

                            <div class="text-sm">
                                <div class="font-medium ">{{ usr.name}}</div>

                            </div>
                            </th>
                            <td class="px-6 py-4">{{ usr.email }}</td>

                            <td class="px-6 py-4">
                            <div class="flex justify-end gap-4">
                                <button @click="remove(prod)" x-data="{ tooltip: 'Delete' }" >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="h-6 w-6"
                                    x-tooltip="tooltip"
                                >
                                    <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                    />
                                </svg>
                                </button>
                                <a x-data="{ tooltip: 'Edite' }" :href="'/users/edit/'+usr.id">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="h-6 w-6"
                                    x-tooltip="tooltip"
                                >
                                    <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                    />
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
    </AuthenticatedLayout>
</template>
