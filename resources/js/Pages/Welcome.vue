<script setup>
import { reactive, provide } from "vue";
import Form from "@/Components/Form.vue";
import PostcardPreview from "@/Components/PostcardPreview.vue";

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