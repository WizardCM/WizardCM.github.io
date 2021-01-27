<template>
  <section class="footer">
    <div class="column">
      <h3>Current Projects</h3>
      <ul v-for="project in projects">
        <li>
          <a :href="project.link">{{ project.name }}</a>
        </li>
      </ul>
    </div>
    <div class="column">
      <h3>Recent Blog Posts</h3>
      <ul v-for="post in posts">
        <li>
          <a :href="post.link">{{ post.title }}</a>
        </li>
      </ul>
    </div>
	<div class="column">
		<h3>Contact Me</h3>
		<div class="tiles">
			<div class="tile">
				Twitter
			</div>
		</div>
	</div>
  </section>
</template>

<script>
export default {
  name: "Footer",
  data() {
    return {
      projects: [
        {
          name: "OBS Studio (Community Contributor)",
          link: "https://obsproject.com",
        },
        {
          name: "07craft, RuneScape in Minecraft",
          link: "https://07craft.com",
		},
		{
			name: 'Worldwide Minecraft Alliance',
			link: "https://wma.im"
		}
	  ],
	  posts: []
    };
  },
};
</script>

<style scoped>
	.column {
		display: inline-block;
		vertical-align: top;;
	}
</style>