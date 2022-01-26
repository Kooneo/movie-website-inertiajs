<template>
    <AdminLayout title="Tags Index">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Tags Create
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto sm:px-6 lg:px-8">
                Form
            </div>
        </div>
    </AdminLayout>

</template>

<script>
import { defineComponent } from 'vue';
import AdminLayout from '@/Layouts/AdminLayout.vue';
import {Link} from '@inertiajs/inertia-vue3';

export default defineComponent({
    name: "CreateTag",
    components: {
        AdminLayout,
        Link
    }
})
</script>

<style scoped>

</style>
