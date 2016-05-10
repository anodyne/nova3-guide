---
title: Field Types
taxonomy:
    category: docs
---

## Text Field

## Text Block

## Dropdown Menu

## Radio Buttons

## Custom Field Types

Nova's form system is built to allow developers to create custom field types and have them be usable in all of Nova's forms. To create a custom field type, you'll need to create a new extension.

```bash
php artisan nova:make:extension Acme ColorFieldType --no-controllers --no-views
```

!!! You don't have to use the Artisan command to create the extension. If you don't want to use the command though, you'll need to create the extension manually. You can see more information about that in the Extension section of the user guide.

### The Field Type Class

```php
<?php namespace Extensions\Acme\ColorFieldType;

use Form, HTML;
use Nova\Core\Forms\Services\FieldTypes\FieldTypeInterface;

class ColorField implements FieldTypeInterface {

	public function info()
	{
		return [
			'name' => "Color picker",
			'value' => 'color',
			'hasValues' => false,
			'values' => [],
			'attributes' => [
				['name' => 'class', 'value' => 'form-control input-lg'],
			],
			'baseHTML' => 'color',
			'fieldContainerSize' => 'col-md-2',
			'labelContainerSize' => 'col-md-2',
		];
	}

	public function render($state, $name, $values, $data, array $attributes)
	{
		if ($state == 'view')
		{
			return $this->renderStatic($data);
		}

		return $this->renderEditable($state, $name, $values, $data, $attributes);
	}

	protected function renderEditable($state, $name, $values, $data, array $attributes)
	{
		return Form::color($name, $data, $attributes);
	}

	protected function renderStatic($data)
	{
        return HTML::tag('p', $data, ['class' => 'form-control-static']);
	}

}
```

To start, we've created a new PHP class in the root of our extension called `ColorField`. In order for everything to work as we expect, we have to implement the `FieldTypeInterface`. You'll need to import that class from the Nova core. We're also using the `Form` and `HTML` aliases so we don't have to hard-code a bunch of HTML right in the class.

The `info` method simply returns an array of items that are essential configuration items for the field management screens.

The `render` method handles rendering the field to the browser. For the built-in field types, we use the `$state` parameter to direct to another method to keep it cleaner, especially if there's more processing involved.

### Service Provider

With the class built, we can now turn our attention to registering our color picker with the field type manager. To do that, we'll need a service provider. The `nova:make:extension` command created one of those for us, so let's look at what the final service provider will look like:

```php
<?php namespace Extensions\Acme\ColorFieldType;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider {

	public function boot()
	{
        // Register the new field type
		$this->app['nova.forms.fields']->registerFieldType('color', new ColorField);
	}

	public function register()
	{
		$extension = new \Extensions\Acme\ColorFieldType\Extension('Acme/ColorFieldType', $this->app);

		// Register a singleton for the extension class
		$this->app->singleton('extension.acme.colorfieldtype', $extension);
	}

}
```

The only thing we've done here is add a line to the `boot` method.

```php
$this->app['nova.forms.fields']->registerFieldType('color', new ColorField);
```

We're grabbing the `nova.forms.fields` item out of the application container (the field type manager) and registering our field type. We'll set an alias of `color` for our field type and then create a new instance of the `ColorField` class we just created. And that's it.

! In this instance, since the service provider and class are in the same namespace, we don't have to worry about importing either class. If you use a different folder structure, you'll need to take the namespaces into account.

Now, when you go to create a field, you'll see a Color Picker option in the field type dropdown.
