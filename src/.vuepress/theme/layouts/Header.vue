<template>
  <section class="header">
    <div class="wrap">
      <h1>{{ $site.title }}</h1>
      <div class="pages">
        <ul>
          <li
            class="menu"
            v-for="page in $site.pages"
            v-if="page.frontmatter.navbar == true"
            :key="page.key"
          >
            <a :href="page.path">{{ page.title || "Home" }}</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="subnav" v-if="$page.frontmatter.subnav">
      <ul>
        <li
          class="menu"
          v-for="page in $site.pages"
          v-if="
            page.frontmatter.navbar !== true &&
            page.frontmatter.subnav === $page.frontmatter.subnav
          "
          :key="page.key"
        >
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
  margin: 0px;
  background-color: #a10;

  .wrap {
    padding: 5px 45px;
  }

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

  .subnav {
    background-color: #ba4336;
    padding: 5px 45px;
    height: 23px;
    box-sizing: content-box;
    ul {
      margin: 0;
      padding: 0;
      li {
        list-style: none;
        margin: 0;
        padding: 1px 2px;
        font-size: 14px;
        display: inline-block;
        a {
          color: #e3e3e3 !important;
          padding: 1px 5px;
          transition: 0.3s;
          &:hover {
            color: white !important;
            text-decoration: none;
          }
        }
      }
    }
  }
}
</style>