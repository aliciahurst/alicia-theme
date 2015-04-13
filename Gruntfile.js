module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        jshint: {
            options: {
                jshintrc: '.jshintrc'
            },
            all: [
                'Gruntfile.js',
                'assets/js/*.js'
            ]
        },

        concat: {   
            dist: {
                src: [
                    'assets/js/vendor/*.js',
                ],
                dest: 'assets/js/build/scripts.js',
            }
        },

        sass: {
          dist: {
            options: {
              style: 'expanded'
            },
            files: {
                'assets/css/main.css': 'assets/sass/main.scss'
            }
          }
        },

        imagemin: {
            dynamic: {                         // Dynamic target
              files: [{
                expand: true,                  // Enable dynamic expansion
                cwd: 'assets/img/raw/',               // Src matches are relative to this path
                src: ['*.{png,jpg,gif}'],       // Actual patterns to match
                dest: 'assets/img/min/'               // Destination path prefix
              }]
            }
        },

        svgmin: {
            options: {
                plugins: [
                    {
                        removeViewBox: false
                    }, {
                        removeUselessStrokeAndFill: false
                    }
                ]
            },
            
            dist: {
                expand: true,
                cwd: 'assets/img/svg-raw',
                src: ['*.svg'],
                dest: 'assets/img/svg-min',
                ext: '.min.svg'
            }
        },

        watch: {
            scripts: {
                files: ['assets/js/**/*.js', 'assets/**/*.scss'],
                tasks: ['concat', 'sass', 'jshint'],
                options: {
                    spawn: false,
                },
            },

            sass: {
                files: ['assets/css/*.scss', 'assets/css/*/*.scss'],
                tasks: ['compass'],
                options: {
                    spawn: false,
                }
            },
            images: {
              files: ['assets/img/raw/*.{png,jpg,gif}'],
              tasks: ['imagemin'],
              options: {
                    spawn: false,
                }
            },
            livereload: {
		        // Browser live reloading
		        // https://github.com/gruntjs/grunt-contrib-watch#live-reloading
		        options: {
		          livereload: true
		        },
		        files: [
                    'assets/css/main.css',
                    'assets/js/build/scripts.js',
		        ]
		    }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-svgmin');
    
    // Register tasks
    grunt.registerTask('default', [
        'sass',
        'concat',
        'jshint',
        'imagemin',
        'svgmin'
      ]);

    grunt.registerTask('svgs', [
        'svgmin',
    ]);
};