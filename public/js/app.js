/**
 * Created by ergo on 7/25/2015.
 */
var app = angular.module('app', ['ngRoute']);

app.controller('TabController', function($scope, $location){
    this.tab = 0;

    this.setTab = function(newTab){
        this.tab = newTab;
    };
    this.isSet = function(route){
        return route === $location.path();
    };

    this.updateUrl = function(){
        $scope.$apply(function(){
           $location.path('/experience')
        });
    }
    var self = this;
    this.transend = function(){

        $('#center-content').addClass('fadeaway');
        $('#title-description').addClass('fadeaway');
        $('#explore').addClass('fadeaway');
        $('#background').css({"top":"0%", "opacity": "1"});
        $("#center-content").on('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd',
            function() {
      /*          $('#center-content').css({
                    "position": "relative",
                    "top": "0%",
                    "transform": "translate(0%,0%)",
                    "left": "0%",
                    "margin": "0px auto",
                    "transition": "none"
                }); */
                $('#center-content').remove();
                $('#explore').remove();
                $('#title-description').remove();
              //  $('#nav-bar').css('opacity', '1');
                $('.ngview').css({
                  "position": "absolute",
                  "top": "45%",
                  "left": "50%",
                  "transform": "translate(-50%, -50%)",
                  "display": "table",
                  "margin": "20px auto 0px auto",
                  "opacity": "1",
                });
                $('body').css('overflow-y', 'auto');
                self.updateUrl();
            });
    }
});

app.controller('ideController', function(){
    var editor = ace.edit('monokai');
    editor.setTheme("ace/theme/monokai");
    editor.getSession().setUseWrapMode(true);
    editor.session.setMode('ace/mode/javascript');
    editor.$blockScrolling = Infinity;
});

app.controller('SkillsController', function(){
   this.name = "Angular";
    this.setSkill = function(newskill){
        this.name = newskill;
    }
});

app.config(function($routeProvider, $locationProvider) {
    $routeProvider

        // route for the home page
        .when('/', {
            controller: 'HomeController',
            controllerAs: 'home'
        })

        .when('/welcome', {
            templateUrl : 'partials/ide-section.html',
            controller: 'ideController',
            controllerAs: 'ide'
        })

        // route for the about page
        .when('/skills', {
            templateUrl : 'partials/skills-section.html'
        })

        // route for the contact page
        .when('/experience', {
            templateUrl : 'partials/experience-section.html'
        });
    $locationProvider.html5Mode(true).hashPrefix('!');
});

(function() {

  'use strict';

  document.querySelector('.material-design-hamburger__icon').addEventListener(
    'click',
    function() {
      var child;

      document.body.classList.toggle('background--blur');
      this.parentNode.nextElementSibling.classList.toggle('menu--on');

      child = this.childNodes[1].classList;

      if (child.contains('material-design-hamburger__icon--to-arrow')) {
        child.remove('material-design-hamburger__icon--to-arrow');
        child.add('material-design-hamburger__icon--from-arrow');
      } else {
        child.remove('material-design-hamburger__icon--from-arrow');
        child.add('material-design-hamburger__icon--to-arrow');
      }

    });

})();
