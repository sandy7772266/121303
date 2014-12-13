todoApp.factory('ApiSrv', ['$rootScope', '$resource', function ($rootScope, $resource) {
	
	var res = $resource(
		'http://127.0.0.1/test1/public/api/todos/:id:action',
		{id: '@id'},
		{ 
		 	'update': {method: 'PUT'},
		 	'clean': {method: 'DELETE'}
		}
	);

	return res;
}]);


/*

https://code.angularjs.org/1.2.26/docs/api/ngResource/service/$resource

{ 'get':    {method:'GET'},
  'save':   {method:'POST'},
  'query':  {method:'GET', isArray:true},
  'remove': {method:'DELETE'},
  'delete': {method:'DELETE'} };

HTTP GET "class" actions: Resource.action([parameters], [success], [error])
non-GET "class" actions: Resource.action([parameters], postData, [success], [error])
non-GET instance actions: instance.$action([parameters], [success], [error])

*/