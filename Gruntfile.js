module.exports = function(grunt) {

	grunt.initConfig({
		phpunit: {
			classes: {
				dir: 'tests/php'
			},
			options: {
				bin: 'vendor/bin/phpunit',
				bootstrap: 'src/boston_neighborhoods.php',
				colors: true
			}
		},
		watch: {
			files: ['src/boston_neighborhoods.php'],
			tasks: ['phpunit']
		}
	});

	grunt.loadNpmTasks('grunt-phpunit');

	grunt.registerTask('test', ['phpunit']);
	grunt.registerTask('default', ['phpunit']);

};