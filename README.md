# RLogin
A clean PHP/JQuery based login implementation

Information on RESTful web service and HTTP methods.

Statelessness means that every HTTP request happens in complete isolation. The server did not store the session state. ST in REST comes from, State Transfer. The state is transferred the around instead of having the server store it. This helps to scale to millions of concurrent users, easier caching, and also benefits to easily distribute a stateless application across load-balanced servers. The focus of a RESTful service is on resources and how to provide access to these resources.

HTTP defines a set of request methods to indicate the desired action to be performed for a given resource. A few of these methods share some common features such as a request method can be safe, idempotent, or cacheable.
GET and POST are usually the two most popular HTTP methods. GET method add data to URL and allows parameters to remain in browser history. There is however restriction on maximum URL length - 2048 characters.
All the HTTP methods are listed below.
GET - Requests a representation of the specified resource. Requests using GET should only retrieve data.
HEAD - Asks for a response identical to that of a GET request, but without the response body.

POST - Is used to submit an entity to the specified resource, often causing a change in state or side effects on the server

PUT -  Similar to POST, but PUT method replaces all current representations of the target resource with the request payload.

DELETE -  Deletes the specified resource.

CONNECT- Establishes a tunnel to the server identified by the target resource.

OPTIONS-IS usually used to describe the communication options for the target resource.
TRACE - Performs a message loop-back test along the path to the target resource.

PATCH - Is used to apply partial modifications to a resource.
