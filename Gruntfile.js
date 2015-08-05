module.exports = function(grunt) {

    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        cssmin: {
            target: {
                files: {'public/css/initial.min.css':
                            [
                                'public/css/main.css',
                                'public/css/simpletextrotator.css',
                                'public/css/about.css',
                                'public/css/experience.css',
                                'public/css/nav.css',
                                'public/css/skills.css'
                            ]
                }
            }
        },
        uglify: {
            my_target: {
                options: {
                    mangle: false
                },
                files: {
                    'public/js/app.min.js': [
                        'public/js/jquery.simple-text-rotator.js',
                    'public/js/app.js']
                }
            }
        },
        imagemin: {
            dynamic: {
                files: [{
                    expand: true,
                    cwd: 'public/img/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'public/img/min/'
                }]
            }
        },
        svgmin: {                       // Task
            options: {                  // Configuration that will be passed directly to SVGO
                plugins: [{
                    removeViewBox: false
                }]
            },
            dist: {                     // Target
                files: [{               // Dictionary of files
                    expand: true,       // Enable dynamic expansion.
                    cwd: 'public/css/svg',     // Src matches are relative to this path.
                    src: ['*.svg'],  // Actual pattern(s) to match.
                    dest: 'public/css/svg',       // Destination path prefix.
                    ext: '.min.svg'     // Dest filepaths will have this extension.
                    // ie: optimise img/src/branding/logo.svg and store it in img/branding/logo.min.svg
                }]
            }

        }
    });

    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-svgmin');

    grunt.registerTask('default', ['cssmin', 'uglify', 'imagemin', 'svgmin']);

};