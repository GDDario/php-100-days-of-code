This is a basic blog application for studying some PHP concepts.

Basically, the project will have:
- User authentication;
- Posts controller;
- Comments system with reactions;

### Concepts
- **URI** (Universal Resouce Identifier): it is the web generic resource identifier. A *URI* can be a *URL*, a *URN* or both.
- **URL** (Universal Resouce Locator): is a specifc type of URI that indicates where a resource is located and how to access it.
    - Example: 'https://www.example.com/tests/123':
    - Protocol: https://;
    - Domain: www.example.com;
    - Path: /tests/123.
- URN (Uniform Resouce Name): it is another specific URI type wich identifies a resource in a unique way, but not necessarily how to locate it.
    - Example: 'urn:isbn:0451450523'.

On this project, we will use the term *URI* to refer the *URI* *path*, as the PHP uses the superglobal variable $_SERVER['REQUEST_URI'] to indicate it.