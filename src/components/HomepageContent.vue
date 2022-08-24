<script setup>
import Link from './Link.vue'
</script>

<template>
    <div class="wrapper">
        <div class="row-container">
            <p class="welcome-text">Hey</p>
            <Link class="link" href="https://github.com/TheVoxcraft/" text="Github" />
            <Link class="link" href="https://www.linkedin.com/in/jonas-silva-b1a628ba/" text="LinkedIn" />
            <Link class="link" href="http://tracker.jonaslsa.com/" text="Tracker" />
           <p>hey@jonaslsa.com</p>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>
.welcome-text {
    font-weight: 200;
    font-size: 4.2rem;
}

.row-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-direction: column;
    gap: 0.6rem;
    font-size: 1.2rem;
    font-weight: normal;
}
</style>