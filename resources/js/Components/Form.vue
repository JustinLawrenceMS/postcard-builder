<template>
    <form v-bind="$attrs" @submit.prevent="submit">
        <div class="container">
            <div class="flex flex-row">
                <div class="flex-1">
                <label for="name">Recipient Name</label>
                <input class="w-full" v-model="name" />
                </div>
            </div>
            <div class="flex flex-row">
                <div class="flex-1">
                <label for="street_1">Street Address</label>
                <input class="w-full" v-model="street_1" />
                </div>
            </div>
            <div class="flex flex-row">
                <div class="flex-1">
                    <label for="street_2">Street Address 2</label>
                    <input class="w-1/2" v-model="street_2" />
                </div>
                <div class="flex-1">
                    <label for="city">City</label>
                    <input class="w-1/2" v-model="city" />
                </div>
            </div>
            <div class="flex flex-row">
                <div class="flex-1">
                    <label for="state">State</label>
                    <input class="w-1/2" v-model="state" />
                </div>
                <div class="flex-1">
                    <label class="w-1/2" for="zip">Zip</label>
            <input v-model="zip" />
                </div>
                </div>
            <label for="message">Message</label>
            <textarea v-model="message" @input="handleMessage"></textarea>
        </div>
    </form>
</template>
<script setup>
import { ref } from "vue";
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

const handleMessage = async (e) => {
    message.value = e.target.value;
    console.log(message.value);
    await fetch("/api/v1/message", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({ message: message.value }),
    });
};
</script>
