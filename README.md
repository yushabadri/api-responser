# API Response Handler

Your package description goes here.

## Installation

You can install this package via Composer. Run the following command in your terminal:

```bash
composer require yusha/api-responser
```

## Usage

### Using the handle Method

To use the `Responser` in your controllers or other classes, simply call the `handle` method:

```php
use Yusha\ApiResponder\Services\Responser;

class SomeController extends Controller
{
    public function someMethod()
    {
        return Responser::handle(Response::HTTP_OK, $data, 'Data successfully returned.');
    }
}
```

### handle Method Parameters
The handle method accepts three parameters:

- Status Code: This is the HTTP status code that will be returned in the response. It indicates the status of the request. For example, Response::HTTP_OK represents a successful response (status code 200).

- Data: This parameter is optional and represents any additional data that you want to include in the response. It can be an array, object, or any other data structure that you want to return along with the response.

- Message: This is an optional parameter that allows you to include a message in the response. It can be used to provide additional information about the response, such as a success message or an error message.
Here's an example of how you can use the handle method:

```
   return Responser::handle(Response::HTTP_OK, $data, 'Data successfully returned.');
```

In this example, the handle method is used to create a JSON response with a status code of 200 (OK), the $propertiesData as the data, and the message 'Properties data successfully returned.'.


### Customization

You can customize the behavior of the `Responser` by extending it and overriding its methods in your own class.

## Configuration

This package does not require any additional configuration.

## Testing

You can run the package's tests using PHPUnit. Run the following command in your terminal:

```bash
composer test
```

## License

This package is open-source software licensed under the [MIT license](LICENSE).
