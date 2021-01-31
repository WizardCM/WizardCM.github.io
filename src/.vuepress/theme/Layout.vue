<template>
  <section class="content">
    <h1 v-if="$page.id == 'post'">{{ $page.title }}</h1>
    <small class="meta" v-if="$page.id == 'post'">on <span>{{ postDate($page.frontmatter.date) }} </span> by <span>{{ $page.frontmatter.author }}</span> | 0 Comments</small>
    <div v-if="$pagination">
      <div v-for="page in $pagination.pages">
        <h2><a v-bind:href="page.path">{{ page.title }}</a></h2>
        <small class="meta">on <span>{{ postDate(page.frontmatter.date) }} </span> by <span>{{ page.frontmatter.author }}</span></small>
        <div v-html="page.excerpt">
        </div>
      </div>
    </div>
    <Content v-else />
  </section>
</template>

<script>
import dayjs from 'dayjs';
import advancedFormat from 'dayjs/plugin/advancedFormat';
dayjs.extend(advancedFormat)

export default {
  methods: {
    postDate: (date) => dayjs(date).format('MMMM Do, YYYY')
  }
};
</script>

<style lang="scss">
.content {
  padding: 10px 15px;
  margin-right: 0px;
  width: calc(100% - 340px);
  background: #eeeeee;
  display: inline-block;
  h1 {
    margin: 0;
    font-weight: bold;
    font-size: 19pt;
  }
  .meta {
    color: #666;
  }
  p {
    margin: 15px 0px;
  }
}
@media screen and (max-width: 700px) {
  .content {
    width: 100%;
  }
}
</style>