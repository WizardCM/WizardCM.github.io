<template>
  <section class="sidebar">
    <div class="column github-events" v-if="githubEvents">
      <h3>GitHub Activity</h3>
      <ul v-for="event in githubEvents" v-if="Object.keys(githubIcons).includes(event.type)">
        <li>
          <span
            v-html="githubIcon(event.type)"
            v-bind:title="githubEvent(event.type)"
          ></span>
          <span>{{ event.repo.name }}</span>
        </li>
      </ul>
    </div>
  </section>
</template>

<script>
import octicons from "@primer/octicons";

export default {
  data() {
    return {
      githubEvents: null,
      githubIcons: {
        // https://docs.github.com/en/developers/webhooks-and-events/github-event-types#in-this-article
        CreateEvent: octicons["git-branch"],
        ForkEvent: octicons["repo-forked"],
        IssueCommentEvent: octicons["comment"],
        IssuesEvent: octicons["issue-opened"],
        PublicEvent: octicons["repo"],
        PullRequestEvent: octicons["git-pull-request"],
        PullRequestReviewCommentEvent: octicons["code-review"],
        PushEvent: octicons["repo-push"],
        ReleaseEvent: octicons["tag"],
        WatchEvent: octicons["star"],
      },
      githubPaths: {
        PushEvent: '',
        IssueCommentEvent: 'issue',
        PullRequestEvent: ''
      }
    };
  },
  methods: {
    githubIcon: function (eventType) {
      if (this.githubIcons[eventType])
        return this.githubIcons[eventType].toSVG();
      return octicons["question"].toSVG();
    },
    githubEvent: function (eventName) {
      let event = eventName.replace("Event", "");
      return event.replace(/([A-Z])/g, " $1").trim();
    },
    // https://gist.github.com/olindgallet/2944032
    createCookie(name, value, minutes) {
      let expires = "";
      if (minutes) {
        let date = new Date();
        date.setTime(date.getTime() + minutes * 60 * 1000);
        expires = "; expires=" + date.toGMTString();
      }
      debugger;
      document.cookie = name + "=" + value + expires + "; path=/";
    },
    // https://gist.github.com/olindgallet/2944032
    readCookie(name) {
      let nameEQ = name + "=";
      let ca = document.cookie.split(";");
      for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == " ") c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
      }
      return null;
    },
  },
  mounted() {
    // TODO
    // let existingData = this.readCookie('github_events');
    let existingData = false;
    if (!existingData) {
      fetch("https://api.github.com/users/wizardcm/events?per_page=8", {
        cache: "force-cache",
      })
        .then((response) => response.json())
        .then((data) => {
          console.log(data);
          this.githubEvents = data;
          // this.createCookie('github_events', JSON.stringify(data), 5);
        });
    } else {
      try {
        existingData = JSON.parse(existingData);
        this.githubEvents = existingData;
      } catch (err) {
        console.log(err);
      }
    }
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