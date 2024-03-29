module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    compass: {
      scss: {
        options: {
          config: 'config.rb'
        }
      }
    },
    watch: {
      css: {
        files: '**/*.scss',
        tasks: ['compass']
      }
    },
    // csscomb: {
    //   options: {
    //     config: 'scss/.csscomb.json'
    //   },
    //   css: {
    //     files: {
    //       'css/style.css': 'css/style.css'
    //     }
    //   }
    // }
  });

  // Load Plugins
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  // grunt.loadNpmTasks('grunt-csscomb');

  // Task(s).
  grunt.registerTask('default', ['watch']);

};