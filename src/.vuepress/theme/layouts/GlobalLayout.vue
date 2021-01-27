<!-- .vuepress/theme/layouts/GlobalLayout.vue -->
<template>
  <div id="global-layout">
    <Header />
    <div class="wrap">
      <component :is="layout" />
      <Footer />
    </div>
  </div>
</template>

<script>
import Header from "./Header";
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
    Footer,
  },
};
</script>

<style lang="scss" scoped>
.wrap {
  margin: 0px auto;
  padding: 0 40px;
}
</style>