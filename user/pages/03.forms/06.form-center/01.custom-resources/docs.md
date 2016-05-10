---
title: Custom Resources
taxonomy:
    category: docs
---

In some cases, you may want to change how a form inserts, updates, or removes entries.

## Creation Resource

1. Create a new extension to hold your controller (or use an existing extension you have).
2. Create your controller and method.
3. Write the code to handle the creation of the form entry.
4. Create a new advanced page that points to your controller method and has an HTTP verb of `POST`.
5. Select your resource from the Creation Resource dropdown when creating/editing your form.

## Update Resource

1. Create a new extension to hold your controller (or use an existing extension you have).
2. Create your controller and method.
3. Write the code to handle the update of a form entry.
4. Create a new advanced page that points to your controller method and has an HTTP verb of `PUT`.
5. Select your resource from the Update Resource dropdown when creating/editing your form.

## Delete Resource

1. Create a new extension to hold your controller (or use an existing extension you have).
2. Create your controller and method.
3. Write the code to handle the deletion of a form entry.
4. Create a new advanced page that points to your controller method and has an HTTP verb of `DELETE`.
5. Select your resource from the Delete Resource dropdown when creating/editing your form.