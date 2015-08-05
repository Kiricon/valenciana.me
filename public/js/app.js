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
           $location.path('/welcome')
        });
    }
    var self = this;
    this.transend = function(){

        $('#center-content').addClass('restcenter');
        $('#title-description').addClass('fadeaway');
        $('#explore').addClass('fadeaway');
        $("#center-content").on('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd',
            function() {
                $('#center-content').css({
                    "position": "relative",
                    "top": "0%",
                    "transform": "translate(0%,0%)",
                    "left": "0%",
                    "margin": "0px auto",
                    "transition": "none"
                });
                $('#explore').remove();
                $('#title-description').remove();
                $('#nav-bar').css('opacity', '1');
                $('.ngview').css('opacity', '1');
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


app.directive('ideSection', function(){
   return {
       restrict: 'E',
       templateUrl: 'partials/ide-section.html',
       link: function(scope, element){
           var editor = ace.edit('monokai');
           editor.setTheme("ace/theme/monokai");
           editor.getSession().setUseWrapMode(true);
           editor.session.setMode('ace/mode/javascript');
           editor.$blockScrolling = Infinity;
       }
   }
});

app.directive('experienceSection', function(){
   return {
       restrict: 'E',
       templateUrl: 'partials/experience-section.html'
   }
});

app.directive('skillsSection', function(){
   return {
       restrict: 'E',
       templateUrl: 'partials/skills.old.html'
   }
});
//commit this son
