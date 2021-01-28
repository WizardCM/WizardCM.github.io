<template>
  <section class="sidebar">
    <div class="column github-events" v-if="githubEvents">
      <h3>GitHub Activity</h3>
      <ul v-for="event in githubEvents">
        <li><span v-html="githubIcon(event.type)" v-bind:title="githubEvent(event.type)"></span> <span>{{ event.repo.name }}</span></li>
      </ul>
    </div>
  </section>
</template>

<script>
import octicons from '@primer/octicons';

export default {
  data() {
    return {
      githubEvents: null,
      githubIcons: {
        PushEvent: octicons['repo-push'],
        IssueCommentEvent: octicons['comment'],
        PullRequestEvent: octicons['git-pull-request'],
      },
    };
  },
  methods: {
    githubIcon: function (eventType) {
      if (this.githubIcons[eventType]) return this.githubIcons[eventType].toSVG();
      return octicons['question'].toSVG();
	},
	githubEvent: function (eventName) {
		let event = eventName.replace('Event', '');
		return event.replace(/([A-Z])/g, ' $1').trim();
	}
  },
  mounted() {
    fetch("https://api.github.com/users/wizardcm/events?per_page=8", {
      cache: "force-cache",
    })
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        this.githubEvents = data;
      });
  },
};
</script>

<style lang="scss" scoped>
.sidebar {
  width: 300px;
  display: inline-block;
  vertical-align: top;
  margin-left: 30px;
  .github-events li {
    font-size: 80%;
    span {
		vertical-align: top;
	}
  }

}
</style>