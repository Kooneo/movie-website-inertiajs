<template>
    <div>
        <Link :href="href" :class="classes">
            <slot></slot>
        </Link>
    </div>
</template>

<script>
import { defineComponent } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

export default defineComponent({
    components: {
        Link,
    },
    props: ['active', 'href'],

    computed: {
        classes() {
            return this.active
                ? 'flex items-center mt-4 py-2 px-6 bg-gray-700 bg-opacity-25 text-gray-100'
                : 'flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100'
        }
    }
})
</script>
