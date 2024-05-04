<script setup>
const lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam architecto asperiores aspernatur autem, commodi, debitis deleniti dignissimos dolores enim facilis fuga harum illo illum ipsa iusto laudantium minima modi neque provident quia quis, quisquam saepe suscipit unde voluptas voluptatum. Accusamus, adipisci architecto atque culpa deleniti ';
const features = [
  { title: 'Super fonctionnalité *1', content: lorem, mockup: '/feature1.png', link: 'link', imagePosition: 'left' },
  { title: 'Super fonctionnalité *2', content: lorem, mockup: '/feature2.png', link: 'link', imagePosition: 'right' },
  { title: 'Super fonctionnalité *3', content: lorem, mockup: '/feature3.png', link: 'link', imagePosition: 'left' },
]
</script>

<template>
  <div class="flex flex-col justify-between items-center w-full">
    <Feature v-for="item in features" :key="item.title" :feature="item" :imagePosition="item.imagePosition" />
  </div>
</template>

<style scoped>
</style>
