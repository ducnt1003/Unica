<template>
  <div>
    <Header></Header>
    <router-view v-slot="{ Component }">
      <transition name="fade" mode="out-in">
        <component :is="Component"></component>
      </transition>
    </router-view>
    <Footer></Footer>
  </div>
</template>

<script >
import Footer from "@/components/Footer.vue";
import Header from "@/components/Header.vue";

export default {
  name: 'DefaultLayout',
  components: {
    Footer,
    Header,
  },
};
</script>

