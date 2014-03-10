
module.exports = function(grunt) {

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-compass');

  // Project configuration.
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    watch: {
      compass: {
        files: ['**/*.{scss,sass,css}'],
        tasks: ['compass:dev']
      }
    },

    compass: {
      dev: {
        options: {
          sassDir: ['assets/css/sass'],
          cssDir: ['assets/css'],
          environment: 'development'
        }
      },
      prod: {
        options: {
          sassDir: ['assets/css/sass'],
          cssDir: ['assets/css'],
          environment: 'production'
        }
      }
    }

  });

  grunt.registerTask('default', ['watch', 'compass:dev']);

};