var $base_element = angular.element('base_url');
var base_url = $base_element.attr('value');

window.base_url = base_url;

angular.module('app_fashon').constant('CONFIG', {
    base_url: base_url
});