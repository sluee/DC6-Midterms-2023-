<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ClientCard from '@/Components/ClientCard.vue'
import { Head, Link } from '@inertiajs/vue3';
import { inject, ref } from 'vue';

const props = defineProps({
    clients:Object
})
const isDarkMode = inject('isDarkMode', ref(false));
</script>

<template>
     <Head title="Clients" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl  leading-tight">Clients</h2>
        </template>

        <div class="py-10">
            <div class="flex justify-between mt-5">
                <h1 class="text-3xl font-medium text-gray-700 "></h1>
                <Link href="clients/create" v-if="$page.props.auth.permissions.includes('create-product')" class="btn-primary inline-flex items-center mr-20 px-3 py-3 bg-blue-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 focus:bg-blue-600 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    Create Client</Link>
            </div>
            <div class="mx-auto grid max-w-7xl  grid-cols-1 gap-4 p-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
                <ClientCard v-for="client in props.clients" :client="client" :key="client.id"   :class="{ 'light-mode': !isDarkMode, 'dark-mode': isDarkMode }"></ClientCard>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
