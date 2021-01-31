<template>
  <section class="footer">
    <div class="column projects">
      <h3>Current Projects</h3>
      <ul v-for="project in projects">
        <li>
          <a
            :href="project.link"
            target="_blank"
            rel="noopener"
            v-bind:title="project.tooltip"
          >
            {{ project.name }}
          </a>
        </li>
      </ul>
    </div>
    <div class="column posts">
      <h3><a href="/blog.html">Recent Blog Posts</a></h3>
      <ul v-for="post in $site.pages" v-if="post.id === 'post'">
        <li>
          <a :href="post.path">{{ post.frontmatter.title }}</a>
        </li>
      </ul>
    </div>
    <div class="column tiles">
      <h3>Contact Me</h3>
      <div class="tiles">
        <a href="https://twitter.com/wizardcm" target="_blank" rel="noopener">
          <div class="tile twitter">
            <img :src="$withBase('/assets/twitter.png')" alt="Twitter icon" />
            <div class="tilelabel">Twitter</div>
          </div>
        </a>
        <a href="mailto:webmaster@wizardcm.com" target="_blank" rel="noopener">
          <div class="tile email">
            <img :src="$withBase('/assets/mailicon.png')" alt="Email icon" />
            <div class="tilelabel">Email</div>
          </div>
        </a>
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
          tooltip:
            "Free and open source software for video recording and live streaming",
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
          tooltip: "An Australian-hosted multi-world Minecraft server",
        },
      ],
    };
  },
};
</script>

<style lang="scss">
.footer,
.sidebar {
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
      h3 a {
        color: black;
      }
    }
    &.tiles {
      width: 230px;
      position: absolute;
      right: 0;
      a {
        display: inline-block;
      }
      .tile {
        background: #aa1100;
        width: 106px;
        height: 106px;
        margin-top: 3px;
        vertical-align: text-bottom;
        color: white;
        img {
          margin: 8px;
          position: absolute;
        }
        &.twitter {
          img {
            padding-top: 9px;
            padding-left: 13px;
          }
        }
        .tilelabel {
          font-size: 12px;
          position: absolute;
          float: left;
          margin-top: 85px;
          margin-left: 5px;
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
@media screen and (max-width: 700px) {
  .footer {
    .column {
      width: auto !important;
      position: unset !important;
      right: unset !important;
    }
  }
}
</style>