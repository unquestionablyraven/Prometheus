<script setup>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard"/>

    <AuthenticatedLayout>
        <div class="grid grid-cols-[1fr,min-content,1fr] gap-x-24">
            <div class="flex flex-col justify-center">
                <span class="text-5xl font-black leading-tight">Good Afternoon, <br /><span class="text-indigo-500">{{ $page.props.auth.user.name }}</span></span>

                <p class="mt-8 text-gray-700">
                    It’s 29°C on a
                    <span class="font-semibold text-indigo-500">Sunday</span>
                    , and you have
                    <span class="font-semibold text-indigo-500">two classes</span>
                    ahead of you.</p>
            </div>

            <div class="border-l border-gray-100"></div>

            <div class="flex h-64 w-80 flex-col justify-center rounded bg-gray-900 p-6">
                <span class="font-medium text-indigo-100">One</span>

                <span class="mt-6 text-xl font-bold text-white">Year 10 Biology</span>

                <div class="mt-2 flex items-center justify-between">
                    <span class="text-lg text-gray-100">8:30 PM</span>

                    <span class="text-xs font-semibold uppercase text-indigo-500">In Person</span>
                </div>

                <span class="mt-4 text-sm font-light text-gray-500">Dr. John Doe</span>

                <span class="mt-6 text-xs font-semibold uppercase text-indigo-500">90 Minutes</span>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
