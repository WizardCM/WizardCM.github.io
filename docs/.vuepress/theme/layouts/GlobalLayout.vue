<!-- .vuepress/theme/layouts/GlobalLayout.vue -->
<template>
  <div id="global-layout">
    <Header />
    <component :is="layout" />
    <Footer />
  </div>
</template>

<script>
import Header from './Header';
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