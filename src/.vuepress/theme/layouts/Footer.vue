<template>
  <section class="footer">
    <div class="column projects">
      <h3>Current Projects</h3>
      <ul v-for="project in projects">
        <li>
          <a :href="project.link" target="_blank" rel="noopener">
            {{ project.name }}
          </a>
        </li>
      </ul>
    </div>
    <div class="column posts">
      <h3>Recent Blog Posts</h3>
      <ul v-for="post in $site.pages" v-if="post.id === 'post'">
        <li>
          <a :href="post.regularPath">{{ post.frontmatter.title }}</a>
        </li>
      </ul>
    </div>
    <div class="column tiles">
      <h3>Contact Me</h3>
      <div class="tiles">
        <div class="tile">
          <div class="tilelabel">Twitter</div>
        </div>
        <div class="tile">
          <div class="tilelabel">Email</div>
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
          tooltip: "",
        },
        {
          name: "07craft, RuneScape in Minecraft",
          link: "https://07craft.com",
          tooltip:
            "Building the world of Gielinor in Minecraft, block by block.",
        },
        {
          name: "Worldwide Minecraft Alliance",
          link: "https://wma.im",
          tooltip: "",
        },
      ]
    };
  },
};
</script>

<style lang="scss" scoped>
.footer {
  position: relative;
  box-sizing: content-box;
  .column {
    display: inline-block;
    vertical-align: top;
    margin: 0px;
    padding: 20px 10px;
    box-sizing: content-box;

    &.projects {
      width: 290px;
    }
    &.posts {
      width: 380px;
    }
    &.tiles {
      width: 230px;
      position: absolute;
      right: 0;
      .tile {
        background: #aa1100;
        width: 106px;
        height: 106px;
        float: left;
        margin-top: 3px;
        vertical-align: text-bottom;
        color: white;
        .tilelabel {
          font-size: 12px;
          position: absolute;
          float: left;
          margin-top: 85px;
          margin-left: 5px;
        }
		&:not(:last-child) {
			margin-right: 5px;
		}
      }
    }

    h3 {
      text-transform: lowercase;
      font-size: 22px;
      margin: 0px 0px 10px;
      font-weight: normal;
    }

    ul {
      margin: 0px;
      padding: 0px;
      li {
        list-style: none;
        margin: 2px 0px;
        padding: 0px 0px 0px 20px;
        a {
          color: black;
          &:hover {
            text-decoration: underline;
          }
        }
      }
    }
  }
}
</style>