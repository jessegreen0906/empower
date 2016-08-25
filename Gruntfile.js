module.exports = function(grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		less: {
			development: {
				options: {
					paths: ['Empower-UI/style/**']
				},
				files: {
					'./Empower-UI/style/ui-style.css': './Empower-UI/style/ui-style.less'
				}
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-less');
}