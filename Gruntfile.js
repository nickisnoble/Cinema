module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    compass: {
      scss: {
        options: {
          sassDir: 'scss',
          cssDir: ''
        }
      }
    },
    watch: {
      css: {
        files: '**/*.scss',
        tasks: ['compass']
      }
    },
    csscomb: {
      options: {
        config: 'scss/.csscomb.json'
      },
      css: {
        files: {
          'style.css': 'style.css'
        }
      }
    }
  });

  // Load Plugins
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-csscomb');

  // Default task(s).
  grunt.registerTask('default', ['csscomb', 'watch']);

};