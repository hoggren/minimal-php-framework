# minimal-php-framework
Super duper minimal php web framework!

## Usage
`Router::view('viewname')`  
Load view with name 'viewname.html' in *Views*-directory.

`Router::json($object)`  
Load json representation of `$object`.

`Router::text('Hello world')`  
Load pure text, strips html tags.

`Router::render()`  
Render loaded data (i.e. run last).
