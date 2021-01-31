<template>
  <section class="header">
    <div class="wrap">
      <SearchBox />
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
import SearchBox from "@SearchBox";

export default {
  components: { SearchBox },
};
</script>

<style lang="scss">
.header {
  margin: 0px;
  background-color: #a10;

  .wrap {
    padding: 5px 0 5px 45px;
    position: relative;
    margin-right: 45px;
  }

  h1 {
    margin: 6px 0px;
    padding: 0px;
    color: white !important;
    font-size: 38px;
    font-weight: normal;
  }

  .pages,
  .subnav {
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
      li {
        list-style: none;
        padding: 1px 2px;
        font-size: 14px;
        a {
          color: #e3e3e3;
          padding: 1px 5px;
          text-transform: unset;
        }
      }
    }
  }
  .search-box {
    position: absolute;
    right: 0;
    top: 23px;
    margin: 0;
    input {
      border-radius: 0;
      width: 296px;
      padding: 0 2rem 0 0.5rem;
      background-color: #ba4336;
      background-position: right 0.6rem top 0.5rem;
      height: unset;
      border: 0;
      color: white;
    }
    .suggestions {
      border-radius: 0;
      z-index: 100;
      padding: 6px 0;
      .suggestion {
        border-radius: 0;
        &:hover {
          text-decoration: underline;
        }
        &.focused {
          background: #eeeeee;
        }
        .header {
          background: unset;
          color: #AA1100;
        }
      }
    }
  }
}

@media screen and (max-width: 700px) {
  .header {
    .search-box {
      display: none;
    }
  }
}
</style>