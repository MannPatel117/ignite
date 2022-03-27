(function() {
    angular.module('app', []);
    angular.module('app').controller('demoController', demoController);

    demoController.$inject = ['$scope']; 
    function demoController($scope) {
      var vm = this;
      vm.tomorrow = new Date();
      vm.tomorrow.setHours(24,0,0,0); // midnignt tomorrow

      vm.xmas = new Date();
      vm.xmas.setMonth(11);
      vm.xmas.setDate(25);
      vm.xmas.setHours(0,0,0,0); // midnignt
      
      vm.expired = {};
      
      vm.expiring = new Date();
      vm.expiring.setTime(vm.expiring.getTime() + 1000 * 10); // expiring in 10 seconds
      
      $scope.$on('countdown-expired', function(event, exp) {
        vm.expired[exp.name] = true;
      });
    }

    angular.module('app').controller('countdownController', countdownController);
    countdownController.$inject = ['$interval', '$scope']; 
    
    function countdownController($interval, $scope) {
      /* jshint validthis:true */
      var vm = this;
      vm.targetDate;  // targetDate is bound via the directive
      vm.countdownTitle; // title is bound via the directive
      vm.countdownId; // countdownId is bound via the directive
      vm.countdownTitleDisplay = vm.countdownTitle;

      if (vm.targetDate == '') {
        vm.targetDate = null;
      }

      vm.hasDate = !!vm.targetDate;
      if (!vm.hasDate) {
        vm.countdownTitleDisplay = vm.countdownTitle.replace("Coming In", '');
        return;
      }

      var endDate = new Date(vm.targetDate);

      vm.days;
      vm.hours;
      vm.minutes;
      vm.seconds;

      var msPerSecond = 1000;
      var msPerMinute = 60 * msPerSecond;
      var msPerHour = msPerMinute * 60;
      var msPerDay = msPerHour * 24;
      var stop;

      activate();

      function activate() {
        var timeDiff = endDate.getTime() - new Date().getTime();
        if (timeDiff <= 0) {
          vm.days = vm.hours = vm.minutes = vm.seconds = 0;
          stop && $interval.cancel(stop);
          stop = undefined;
          $scope.$emit('countdown-expired', { name: vm.countdownId });
          return;
        }

        vm.days = Math.floor(timeDiff / msPerDay);
        timeDiff -= vm.days * msPerDay;
        vm.hours = Math.floor(timeDiff / msPerHour);
        timeDiff -= vm.hours * msPerHour;
        vm.minutes = Math.floor(timeDiff / msPerMinute);
        timeDiff -= vm.minutes * msPerMinute;
        vm.seconds = Math.floor(timeDiff / msPerSecond);
      }

      stop = $interval(activate, msPerSecond);
    }
    
    angular.module('app').directive('countdown', countdown);
    countdown.$inject = [];
    
    function countdown () {
      // Usage:
      //     <countdown></countdown>
      // Creates:
      // 
      return {
        restrict: 'E',
        templateUrl: 'index.html',
        controller: 'countdownController',
        controllerAs: 'vm',
        scope: {
          targetDate: '=',
          countdownTitle: '@',
          countdownId: '@'
        },
        bindToController: true
      };
    }
})();