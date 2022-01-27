<template>
    <div class="flex">
        <template v-for="(link, key) in links" :key="key">
            <div v-if="link.url == null" v-html="link.label" class="p-2 ml-2 bg-white shadow rounded font-semibold text-gray-400 leading-4 border" :class="{ 'bg-gray-200': link.active }">
            </div>
            <div v-else class="p-2 ml-2 bg-white shadow rounded font-semibold leading-4 border" :class="{ 'bg-gray-200': link.active }">
                <Link :href="link.url" v-html="link.label" />
            </div>
        </template>
    </div>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3';
import {defineProps} from 'vue';


defineProps({
    links: Array
})



</script>

<style scoped>

</style>
