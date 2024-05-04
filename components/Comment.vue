<template>
    <div class="snap-start  flex-shrink-0 flex flex-col items-center justify-center max-w-md mx-10">
      <div class="w-80 bg-white mx-auto border border-primary rounded-xl p-5 m-5">
        <div class="flex justify-between items-center mb-3">
          <h5 class="text-base font-bold text-primary">Titre</h5>
          <p class="text-primary">1 Avr</p>
        </div>
        <div class="flex justify-between items-center">
          <div class="flex">
            <svg class="w-5 h-5 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            </svg>
          </div>
          <p class="text-sm text-primary">Nickname</p>
        </div>
        <p class="text-primary 0 mt-3 text-sm">Review: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
</template>

<script setup >
defineProps({
  comment: Object
})
</script>

<style scoped>

</style>