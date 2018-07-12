"use strict";

module.exports = function(grunt) {
	let path = require('path');

	require('load-grunt-config')(grunt, {
		configPath: path.join(process.cwd(), 'grunt'),
		jitGrunt: {
		}
	});
};
