<template>
  <div class="flex flex-row">
    <div class="w-full">
      <form v-bind="$attrs" @submit.prevent="submit">
        <div class="container space-y-4">
            <div class="flex flex-col">
                <label for="name" class="mb-1">Recipient Name</label>
                <input class="w-full" v-model="name" />
            </div>
            <div class="flex flex-col">
                <label for="street_1" class="mb-1">Street Address</label>
                <input class="w-full" v-model="street_1" />
            </div>
            <div class="flex flex-row space-x-4">
                <div class="flex flex-col flex-1">
                    <label for="street_2" class="mb-1">Street Address 2</label>
                    <input class="w-full" v-model="street_2" />
                </div>
                <div class="flex flex-col flex-1">
                    <label for="city" class="mb-1">City</label>
                    <input class="w-full" v-model="city" />
                </div>
            </div>
            <div class="flex flex-row space-x-4">
                <div class="flex flex-col flex-1">
                    <label for="state" class="mb-1">State</label>
                    <input class="w-full" v-model="state" />
                </div>
                <div class="flex flex-col flex-1">
                    <label for="zip" class="mb-1">Zip</label>
                    <input class="w-full" v-model="zip" />
                </div>
            </div>
            <div class="flex flex-col">
                <label for="message" class="mb-1">Message</label>
                <textarea class="w-full" v-model="message" @input="handleMessage"></textarea>
            </div>
            <button type="submit" @click="handleSubmit" class="mt-4 bg-blue-500 text-white rounded p-2">Submit</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script setup>
import { inject, ref } from "vue";

const postcardState = inject("postcardState");

const name = ref("");
const street_1 = ref("");
const street_2 = ref("");
const city = ref("");
const state = ref("");
const zip = ref("");
const message = ref("");

const submit = () => {
    console.log("submit");
};

const handleMessage = (e) => {
    message.value = e.target.value;
    postcardState.message = message.value;
};

const handleSubmit = async (e) => {
    e.preventDefault();
    console.log("submit");
    await axios.post("/api/v1/save", {
        name: name.value,
        street_1: street_1.value,
        street_2: street_2.value,
        city: city.value,
        state: state.value,
        zip: zip.value,
        message: message.value,
    });
};
</script>
