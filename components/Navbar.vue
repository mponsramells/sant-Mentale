<script setup>
const menu = ref([
  { name: 'À propos', url: '#about' },
  { name: 'Fonctionnalités', url: '#features' },
  { name: 'Contact', url: '#contact' },
])
</script>
<template>
  <nav class="text-black p-4">
    <ul class="flex justify-between items-center">
      <li class="w-1/4 ml-16">
        <NuxtLink to="/" class="text-2xl font-bold text-primary"><img src="/logoHorizontalPrimary.png" alt=""></NuxtLink>
      </li>
      <li class="w-1/4">
        <ul class="flex justify-between mr-16">
          <li v-for="{name, url} in menu" :key="name">
            <NuxtLink :to="url" class="hover:text-red-500 font-semibold">{{ name }}</NuxtLink>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
</template>

<style scoped>
</style>