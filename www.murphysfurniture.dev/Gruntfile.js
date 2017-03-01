module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({

    uglify: {
      my_target: {
        files: {
          'dist/output.min.js': ['js/script.js']
        }
      }
    },
     sass: {
        options: {
			sourcemap: false
		},
        dist: {
            files: {
                'wp-content/themes/murpheys/css/styles.min.css': 'wp-content/themes/murpheys/css/styles.scss'
            }
        }
    },
      cssmin: { // Begin CSS Minify Plugin
      target: {
        files: [{
          expand: true,
          cwd: 'css',
          src: ['*.css', '!*.min.css'],
          dest: 'css',
          ext: '.min.css'
    }]
      }
    },
    
    watch: {
        css: {
            files: '**/*.scss',
            tasks: ['sass']
        },
        files: ['js/*.js'],
        tasks: ['uglify']
    }
    
    
});

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');    


  // Default task(s).
  grunt.registerTask('default', ['sass', 'watch', 'uglify']);

};