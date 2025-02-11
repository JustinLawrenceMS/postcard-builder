<script setup>
import { reactive, provide } from "vue";
import Form from "@/Components/Form.vue";
import PostcardPreview from "@/Components/PostcardPreview.vue";
defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById("screenshot-container")?.classList.add("!hidden");
    document.getElementById("docs-card")?.classList.add("!row-span-1");
    document.getElementById("docs-card-content")?.classList.add("!flex-row");
    document.getElementById("background")?.classList.add("!hidden");
}

const postcardState = reactive({
    message: '',
});

provide('postcardState', postcardState);
</script>

<template>
  <div class="flex flex-row">
    <div class="w-1/2">
      <Form />
    </div>
    <div class="w-1/2">
      <PostcardPreview />
    </div>
  </div>
</template>
