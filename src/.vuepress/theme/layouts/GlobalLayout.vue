<!-- .vuepress/theme/layouts/GlobalLayout.vue -->
<template>
  <div id="global-layout">
    <Header />
    <div class="global-wrap">
      <component :is="layout" />
      <Sidebar />
      <Footer />
    </div>
  </div>
</template>

<script>
import Header from "./Header";
import Sidebar from './Sidebar';
import Footer from "./Footer";

export default {
  computed: {
    layout() {
      if (this.$page.path) {
        if (this.$frontmatter.layout) {
          // You can also check whether layout exists first as the default global layout does.
          return this.$frontmatter.layout;
        }
        return "Layout";
      }
      return "NotFound";
    },
  },
  components: {
    Header,
    Sidebar,
    Footer,
  },
};
</script>

<style lang="scss">
.global-wrap {
  margin: 0px auto;
  padding: 0 40px;
}
@media screen and (max-width: 700px) {

}
</style>