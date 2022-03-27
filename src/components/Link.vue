<template>
  <a :href="href">{{text}}</a>
</template>

<script>
export default {
    // import props
    props: {
        href : {
            type: String,
            required: true
        },
        text : {
            type: String,
            required: true
        }
    },
}
</script>

<style>

</style>