# api_helpers

#### Installation
`composer require yarull/api_helpers`

#### Add this line to your conf/app.php file

`'JSONResponse' => Yarull\ApiHelpers\Facades\JSONResponse::class in config/app.php`

##### Usage
```
\JSONResponse::ok([$array_data])
Return 200 status and an array called data with $array_data value.

\JSONResponse($error_code,$error_message);
Return an error response with the specified code and message

\JSONResponse::exist($obj,$obj_name);
$obj_name is not required
If $obj is null stop and return an error 404

```


