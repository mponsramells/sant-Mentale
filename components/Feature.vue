<script setup>
defineProps({
  feature: Object,
  imagePosition: {
    type: String,
    default: 'left',
  }
})
</script>

<template>
  <div class="flex justify-between w-3/4">
    <img :src="feature.mockup" alt="" :class="imagePosition === 'right' ? 'order-last' : ''">
    <div class="flex flex-col items-center justify-center">
      <h2 class="text-primary text-4xl">{{ feature.title }}</h2>
      <p class="w-3/4 text-start py-5">{{ feature.content }}</p>
      <a :href="feature.link" class="btn bg-secondary text-white p-2 px-4 rounded-full">This is a button</a>
    </div>
  </div>
</template>

<style scoped>
</style>
