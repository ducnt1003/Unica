<template>
  <div>
    <router-view/>
  </div>
</template>

<script >
import Footer from "@/components/Footer.vue";
import Header from "@/components/Header.vue";

export default {
  components: {
    Footer,
    Header,
  },
};
</script>

