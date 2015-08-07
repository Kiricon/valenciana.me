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
        browserSync: {
          dev: {
            bsFiles: {
              src : ['public/css/*.css', 'app/views/*/*.phtml', 'public/js/*.js', 'public/partials/*.html']
            },
            options: {
              proxy: "valenciana.me",
              reloadDelay: 500
            }
          }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-browser-sync');

    grunt.registerTask('default', ['cssmin', 'uglify', 'browserSync']);
};
