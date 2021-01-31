module.exports = {
	title: 'WizardCM',
	description: "Hey hey, I'm Matt. I'm a front end web developer specialising in React (though this site's written in Vue). In my spare time I contribute to @OBSProject",
	head: [
		['link', { rel: "icon", type: "image/x-icon", sizes: "16x16", href: "/favicon.ico" }],
	],
	dest: 'docs',
	markdown: {
		anchor: {
			permalink: false
		},
		lineNumbers: true,
		extendMarkdown: md => {
			md.set({ breaks: true });
		}
	},
	plugins: [
		[
			'vuepress-plugin-clean-urls',
			{
				normalSuffix: '.html',
				indexSuffix: '/',
				notFoundPath: '/',
			},
		],
		[
			'@vuepress/blog',
			{
				directories: [
					{
						id: 'post',
						dirname: 'posts',
						path: '/blog.html',
						layout: 'Layout',
						itemLayout: 'Layout',
						itemPermalink: '/post/:slug'
					}
				],
				feed: {
					canonical_base: 'https://wizardcm.com',
				},
			}
		],
		[
			'@vuepress/search', {
				searchMaxSuggestions: 10
			}
		]
	],
	configureWebpack: (config, isServer) => {
		if (!isServer) {
			// Override hashed filenames to simplify diff
			// TODO Give the chunks better names
			config.output.filename = "assets/js/[name].js";
			config.plugins[1].chunkFilename = "assets/css/[id].styles.css";
		}
	}
};