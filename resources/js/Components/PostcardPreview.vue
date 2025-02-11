<template>
    <textarea
        class="border border-black w-full h-full message-preview text-black"
        v-model="postcardState.message"
    ></textarea>
</template>

<script setup>
import { inject } from 'vue';

const postcardState = inject('postcardState');

if (!postcardState) {
  console.error('postcardState is not provided');
}
</script>
