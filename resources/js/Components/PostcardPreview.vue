<template>
    <div class="w-100 h-100 border-black border-3">
        <div class="message-preview">
            <span v-if="message">{{ message }}</span>  
    </div>
</div>
</template>
<script setup>
import { ref } from "vue";
import { usePage } from "@inertiajs/vue3";

const page = usePage();
const message = ref(page.props.value.message);

return {
    message,
};
</script>