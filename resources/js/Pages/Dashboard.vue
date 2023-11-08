<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

import { Head } from '@inertiajs/vue3';
import { inject } from 'vue';
import Card from '@/Components/Card.vue';

const themeMode = inject('themeMode')

const shoes = [
    {
        name:"Nike Air Max Pulse Roam",
        price:' 8,895',
        type:'Sneakers',
        color:'Black'
    },
    {
        name:"Nike Dunk Low SE",
        price:' 6,195',
        type:'Sneakers',
        color:'White'
    },
    {
        name:"Husstle Man Faith",
        price:'2,899',
        type:'Sneakers',
        color:'Lavender'
    },

]
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl  leading-tight">Dashboard</h2>
        </template>

        <!-- <div :class="themeMode" class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 ">You're logged in!</div>
                </div>
            </div>
        </div> -->
        <div class="grid py-12" :class="themeMode" >
            <Card >
                <template #head>
                    <div class="w-96 rounded-lg bg-gray-100">
                        <img
                        src="https://images.unsplash.com/photo-1695748966450-3abe5c25b481?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt=""
                        class="h-48 w-full rounded-t-lg opacity-80 transition duration-300 hover:opacity-100 sm:h-56"
                        />
                    </div>
                </template>
                <template #content>
                    <div class="mb-10 px-8 py-4 text-center">
                        <div class="mb-2 text-2xl font-bold uppercase text-purple-600">Nike Dunk Shoes</div>
                        <span class="text-sm">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate
                            tempore eligendi magnam distinctio molestias. Incidunt at consequuntur
                            consequatur officiis repudiandae! Culpa cum vel tenetur itaque eius
                            provident voluptatum similique impedit?
                        </span>
                    </div>
                </template>
                <template #footer>
                    <button
                    class="h-10 w-full mb-2 rounded-b-lg bg-purple-600 text-lg font-extrabold text-gray-100 transition duration-300 hover:bg-purple-700"
                    >
                    View Details
                    </button>
                </template>
            </Card>
        </div>

        <div class="grid">
            <Card>
                <template v-slot:head>

                </template>
            </Card>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>

.grid{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px 24px;
}
</style>

