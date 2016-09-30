module.exports = function(grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		less: {
			development: {
				options: {
					paths: ['Empower-UI/style/**']
				},
				files: {
					'./admin/styles/css/style.css': './admin/styles/less/style.less'
				}
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-less');
}