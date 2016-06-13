angular.module('ionicApp', ['ionic'])

.config(function($stateProvider, $urlRouterProvider) {

  $stateProvider
    .state('signin', {
      url: '/sign-in',
      templateUrl: 'templates/sign-in.html',
      controller: 'SignInCtrl'
    })
    .state('forgotpassword', {
      url: '/forgot-password',
      templateUrl: 'templates/forgot-password.html'
    })
    .state('tabs', {
      url: '/tab',
      abstract: true,
      templateUrl: 'templates/tabs.html'
    })
    .state('tabs.home', {
      url: '/home',
      views: {
        'home-tab': {
          templateUrl: 'templates/home.html',
          controller: 'HomeTabCtrl'
        }
      }
    })
    .state('tabs.facts', {
      url: '/facts',
      views: {
        'home-tab': {
          templateUrl: 'templates/facts.html'
        }
      }
    })
    .state('tabs.facts2', {
      url: '/facts2',
      views: {
        'home-tab': {
          templateUrl: 'templates/facts2.html'
        }
      }
    })
    .state('tabs.about', {
      url: '/about',
      views: {
        'about-tab': {
          templateUrl: 'templates/about.html'
        }
      }
    })
    .state('tabs.navstack', {
      url: '/navstack',
      views: {
        'about-tab': {
          templateUrl: 'templates/nav-stack.html'
        }
      }
    })
    .state('tabs.contact', {
      url: '/contact',
      views: {
        'contact-tab': {
          templateUrl: 'templates/contact.html'
        }
      }
    });


   $urlRouterProvider.otherwise('/sign-in');

})

.controller('SignInCtrl', function($scope, $state, $http ) {

  $scope.signIn = function(user) {
    console.log('Sign-In', user);

    //alert(user.username);

    $http.get("http://200.23.113.50/myproject/query1.php?username="+user.username+"&password="+user.password).then(function (response) {

      if(response.data == "OK"){
        $state.go('tabs.home');
      }
      else{
          alert("Usuario o contraseña no válidos");
      }

    });


    /*$http.get("http://localhost/myproject/query2.php")
	.success(function (response) {$scope.names = response.records;});*/

  };

})

.controller('HomeTabCtrl', function($scope, $http) {

  $http.get("http://200.23.113.50/myproject/query2.php")
    .success(function (response) {$scope.names = response.records;});

    console.log('HomeTabCtrl');
});

/*.controller('customersCtrl', function($scope, $http) {

  $http.get("http://localhost/myproject/query2.php")
.success(function (response) {$scope.names = response.records;});
});*/
