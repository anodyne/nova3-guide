---
title: Using Forms
taxonomy:
    category: docs
---

## In Basic Pages

When it comes to using your forms in pages, you can easily use the built-in form helper to embed your form within a basic page.

If you want to show a form for people to fill out on a specific page, you can simply call the following code in the content of your basic page:

```
{% form:myform:new %}
```

That's it. Nova will take care of the rest, including handling how the form inserts records into the database.

If you want to show a form for people to edit (though we don't recommend that unless you know what you're doing), you can simply call the following code in the content of your basic page:

```
{% form:myform:edit:$id %}
```

This will show the edit form and pull an ID value out of the URI to use for populating the data. Nova will take care of handling how the form updates the record in the database.

! There is no access control around editing a form in this way, so anyone would be able to edit any record in the database. Instead of using the edit control, we recommend using the Form Viewer feature for editing form records.

## In Advanced Pages

If you want to use forms in your advanced pages, the process is similarly easy, though you will need to go through a few more steps.

```php
public function myform()
{
    $this->view = 'path/to/my/view';

    // Get the form
    $this->data->form = app('FormRepository')->getByKey('my-form-key');
}
```

Now in your view file, you'll just render the form:

```php
{!! $form->present()->renderNewForm !!}
```
