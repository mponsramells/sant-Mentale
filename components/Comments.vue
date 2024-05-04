<template>
  <h2 class="text-center text-primary text-3xl font-semibold py-8">Les amis d'iki disent ...</h2>
  <div class="flex overflow-x-auto snap-x snap-mandatory w-full">
    <Comment v-for="item in comments" :key="item.title" :comment="item" />
  </div>
</template>

<script setup>
const comments = [
  { title: 'comment 1', content: '#about', name: 'mockup', date: 'link' },
  { title: 'comment 2', content: '#about', name: 'mockup', date: 'link' },
  { title: 'comment 3', content: '#about', name: 'mockup', date: 'link' },
  { title: 'comment 4', content: '#about', name: 'mockup', date: 'link' },
  { title: 'comment 4', content: '#about', name: 'mockup', date: 'link' },
  { title: 'comment 4', content: '#about', name: 'mockup', date: 'link' },
  { title: 'comment 4', content: '#about', name: 'mockup', date: 'link' },
]
</script>

<style scoped>

</style>