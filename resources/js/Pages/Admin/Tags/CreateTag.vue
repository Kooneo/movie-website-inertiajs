<template>
    <AdminLayout title="Tags Index">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Tags Create
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto sm:px-6 lg:px-8">
                <div class="w-full flex p-2">
                    <Link :href="route('admin.tags.index')" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-800">Tag Index</Link>
                </div>

                <div class="bg-white mt-4 mb-8 overflow-hidden rounded-lg shadow-lg p-4 ">
                    <form @submit.prevent="form.post('/admin/tags')">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-5">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="tag_name" class="block text-sm font-medium text-gray-700">Tag
                                            name</label>
                                        <input type="text" autocomplete="given-name" id="tag_name" v-model="form.tagName"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                    </div>
                                     <div class="flex col-span-2 sm:col-span-2 justify-center">
                                        <button class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-800 ">
                                            Submit
                                        </button>
                                     </div>
                                </div>

                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </AdminLayout>

</template>

<script>
import { defineComponent } from 'vue';
import AdminLayout from '@/Layouts/AdminLayout.vue';
import {Link, useForm} from '@inertiajs/inertia-vue3';

export default defineComponent({
    name: "CreateTag",
    components: {
        AdminLayout,
        Link
    },
    setup () {
        const form = useForm({
            tagName: '',

        })
        return { form }
    },

})

</script>

<style scoped>

</style>
