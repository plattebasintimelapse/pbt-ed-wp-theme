module.exports = function(grunt) {

    var config = {
        assets: 'assets'
    };

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        watch: {
            sass: {
                files: '**/*.scss',
                tasks: ['sass']
            },
            livereload: {
                options: { livereload: true },
                files: ['*.css']
            }

        },

        sass: {
            options: {
                sourcemap: 'none',
                style: 'compressed'
            },
            dist: {
                files: [{
                    expand: true,
                    cwd: '<%= config.assets %>/sass',
                    src: ['*.scss'],
                    dest: '',
                    ext: '.css'
                }]
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['watch']);

};