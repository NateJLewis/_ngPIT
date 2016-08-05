'use strict';
module.exports = function (grunt) {

	// load all grunt tasks matching the `grunt-*` pattern
	require('load-grunt-tasks')(grunt);
	var autoprefixer = require('autoprefixer')({
		browsers: [
		  //
		  // Official browser support policy:
		  // http://v4-alpha.getbootstrap.com/getting-started/browsers-devices/#supported-browsers
		  //
		  'Chrome >= 35', // Exact version number here is kinda arbitrary
		  // Rather than using Autoprefixer's native "Firefox ESR" version specifier string,
		  // we deliberately hardcode the number. This is to avoid unwittingly severely breaking the previous ESR in the event that:
		  // (a) we happen to ship a new Bootstrap release soon after the release of a new ESR,
		  //     such that folks haven't yet had a reasonable amount of time to upgrade; and
		  // (b) the new ESR has unprefixed CSS properties/values whose absence would severely break webpages
		  //     (e.g. `box-sizing`, as opposed to `background: linear-gradient(...)`).
		  //     Since they've been unprefixed, Autoprefixer will stop prefixing them,
		  //     thus causing them to not work in the previous ESR (where the prefixes were required).
		  'Firefox >= 31', // Current Firefox Extended Support Release (ESR)
		  // Note: Edge versions in Autoprefixer & Can I Use refer to the EdgeHTML rendering engine version,
		  // NOT the Edge app version shown in Edge's "About" screen.
		  // For example, at the time of writing, Edge 20 on an up-to-date system uses EdgeHTML 12.
		  // See also https://github.com/Fyrd/caniuse/issues/1928
		  'Edge >= 12',
		  'Explorer >= 9',
		  // Out of leniency, we prefix these 1 version further back than the official policy.
		  'iOS >= 8',
		  'Safari >= 8',
		  // The following remain NOT officially supported, but we're lenient and include their prefixes to avoid severely breaking in them.
		  'Android 2.3',
		  'Android >= 4',
		  'Opera >= 12'
		]
	});
	var libs = [
		'assets/scripts/libs/angular/angular.js',
        'assets/scripts/libs/angular/angular-animate.js',
    	'assets/scripts/libs/angular/angular-messages.js',
        'assets/scripts/libs/angular/angular-resource.js',
        'assets/scripts/libs/angular/angular-sanitize.js',
        'assets/scripts/libs/ui-router/angular-ui-router.js',
        'assets/scripts/libs/ngCart/dist/ngCart.js'
	]

	grunt.initConfig({

		// watch for changes and trigger sass, jshint, uglify and livereload
		watch: {
			sass: {
				files: ['assets/styles/sass/**/*.{scss,sass}'],
				tasks: ['sass', 'postcss', 'cssmin']
			},
			scripts: {
				files: ['assets/scripts/**/*.js'],
				tasks: ['concat', 'uglify']
			}
		},
		// sass
		sass: {
			dist: {
				options: {
					map: false,
					style: 'expanded',
				},
				files: {
					'assets/styles/style.css': 'assets/styles/sass/bootstrap.scss'
				}
			}
		},
		postcss: {
			options: {
				map: false,
				processors: autoprefixer,
			},
			dist: {
				src: 'assets/styles/*.css'
			}
		},
		// css minify
		cssmin: {
			options: {
				map: false,
				keepSpecialComments: '*'
			},
			minify: {
				expand: true,
				cwd: 'assets/styles',
				src: ['*.css', '!*.min.css'],
				ext: '.css'
			}
		},
		concat: {
			options: {
				stripBanners: true
			},
			libs: {
				src: libs,
				dest: 'assets/scripts/pit-libs.js'
			}
		},
		uglify: {
			plugins: {
				files: {
					'assets/scripts/pit.min.js': [
						'assets/scripts/pit-libs.js',
						'assets/scripts/pit-app.js'
					]
				}
			}
		}
	});
	grunt.registerTask('default', ['sass', 'postcss', 'cssmin', 'concat', 'uglify', 'watch']);

};
