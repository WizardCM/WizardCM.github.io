<template>
  <section class="header">
    <h1>WizardCM</h1>
    <div class="pages">
      <ul>
        <li class="menu" v-for="page in $site.pages" :key="page.key">
          <a :href="page.regularPath">{{ page.title || "Home" }}</a>
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
}

.header h1 {
  margin: 6px 0px;
  padding: 0px;
  color: white !important;
  font-size: 38px;
}

.pages ul {
  margin: 0;
}

.pages ul li {
  list-style: none;
  padding: 2px 4px;
  margin: 0px;
  display: inline-block;
}

.header a {
  display: block;
  padding: 3px 7px;
  margin: 0px;
  text-transform: uppercase;
  color: #dedede;
  transition: 0.3s;
}

.header a:hover {
  text-decoration: none;
  color: white;
}
</style>