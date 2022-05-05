module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
      pkg: grunt.file.readJSON('package.json'),
      uglify: {
        options: {
          banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
        },
        build: {
          //src: 'public/js/*',
          src : ['public/js/jquery.min.js', 'public/js/jquery.magnific-popup.min.js', 'public/js/jquery.isotope.min.js','public/js/owl.carousel.min.js','public/js/easypiechart.min.js','public/js/jquery.countdown.min.js','public/js/scripts.js','public/js/header-mobile.js','public/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js','public/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js','public/plugins/revolution/revolution/js/extensions/revolution-plugin.js','public/js/rev-script-2.js','public/js/royal_preloader.min.js'],
          dest: 'public/scripts/all-scripts<%= grunt.template.today("yyyy-mm-dd-hh-MM-ss-tt") %>.min.js'
        }
      }
    });
  
    // Load the plugin that provides the "uglify" task.
    grunt.loadNpmTasks('grunt-contrib-uglify');
  
    // Default task(s).
    grunt.registerTask('default', ['uglify']);
  
  };