<template>
    <AdminLayout title="Genres Index">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Genres
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                Genres
            </div>
        </div>
    </AdminLayout>
</template>

<script>
import { defineComponent } from 'vue'
import AdminLayout from '@/Layouts/AdminLayout.vue'

export default defineComponent({
    name: "Index",
    components: {
        AdminLayout
    }
})
</script>

<style scoped>

</style>
