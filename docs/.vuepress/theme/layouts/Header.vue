<template>
  <section class="header">
    <h1>{{ $site.title }}</h1>
    <div class="pages">
      <ul>
        <li class="menu" v-for="page in $site.pages" v-if="page.frontmatter.navbar == true" :key="page.key">
          <a :href="page.path">{{ page.title || "Home" }}</a>
        </li>
      </ul>
    </div>
  </section>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
.header {
  padding: 5px 45px;
  margin: 0px;
  background-color: #a10;

  h1 {
    margin: 6px 0px;
    padding: 0px;
    color: white !important;
    font-size: 38px;
    font-weight: normal;
  }

  .pages {
    ul {
      margin: 0;
      padding: 0px;
      li {
        list-style: none;
        padding: 2px 4px;
        margin: 0px;
        display: inline-block;
        a {
          display: block;
          padding: 3px 7px;
          margin: 0px;
          text-transform: uppercase;
          color: #dedede;
          transition: 0.3s;

          &:hover {
            text-decoration: none;
            color: white;
          }
        }
      }
    }
  }
}
</style>