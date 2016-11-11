# minimal-php-framework
Super duper minimal php web framework!

## Usage
`Router::view('/path/u/want', 'viewname')`  
Load view with name 'viewname.html' in *Views*-directory.

`Router::json('/dog/such/wow', $object)`  
Load json representation of `$object`.

`Router::text('/wow/such/no/html', 'Hello world')`  
Load pure text, strips html tags.

`Router::render()`  
Render loaded data (i.e. run last).
