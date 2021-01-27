<template>
  <div>
    <section class="header">
      <h1>WizardCM</h1>
      <div class="pages">
        <ul>
          <li class="menu" v-for="page in $site.pages">
            <a :href="page.regularPath">{{ page.title || "Home" }}</a>
          </li>
        </ul>
      </div>
    </section>
    <section class="content">
      <Content />
    </section>
  </div>
</template>