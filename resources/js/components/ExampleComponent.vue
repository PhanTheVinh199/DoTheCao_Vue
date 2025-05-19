<template>
  <div>
    <h2>Hello từ Vue!</h2>
    <button @click="count++">Đã bấm: {{ count }}</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      count: 0
    };
  }
};
</script>
