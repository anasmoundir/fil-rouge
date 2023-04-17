<template>
  <div>
      <h1>{{ message }}</h1>
      <p>This is a Vue component.</p>
  </div>
</template>

<script>
export default {
  props: {
    message: String
  }
}
</script>