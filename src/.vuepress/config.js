module.exports = {
	title: 'WizardCM',
	description: "Hey hey, I'm Matt. I'm a front end web developer specialising in React (though this site's written in Vue). In my spare time I contribute to @OBSProject",
	head: [],
	dest: 'docs',
	markdown: {
		anchor: {
			permalink: false
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
						path: '/post.html'
					}
				]
			}
		]
	]
};