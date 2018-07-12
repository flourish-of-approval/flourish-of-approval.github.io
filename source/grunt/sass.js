const sass = require('node-sass');

module.exports = {
	"options":
	{
		"implementation": sass,
		"sourceMap": true
	},
	"dist":
	{
		"files":
		{
			"../style.css": "style/style.scss"
		}
	}
};