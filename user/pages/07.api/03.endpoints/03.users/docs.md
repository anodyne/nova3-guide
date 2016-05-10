---
title: User Endpoints
taxonomy:
    category: docs
---

! The user API requires authentication to reach any endpoint. Additionally, users must be authorized to take the action they're taking when creating, editing, and removing users. Without those permissions, an error will be returned.

#### `GET api/users`

Returns all users in the system.

#### `GET api/users/status/{status}`

Returns all users in the system of a specific status.

#### `GET api/users/{id}`

Return the information about a user with the specified ID.

```json
{
  "data": {
    "id": 1,
    "name": "John Doe",
    "nickname": "JohnnyD",
    "displayName": "JohnnyD",
    "email": "john.doe@example.com",
    "status": "active",
    "links": {
      "edit": "http://nova3.dev/admin/users/1/edit"
    },
    "characters": [
      {
        "id": 1,
        "user_id": 1,
        "first_name": "James",
        "middle_name": "Tiberius",
        "last_name": "Kirk"
      }
    ]
  }
}
```

#### `POST api/users`

Create a user.

#### `PUT api/users/{id}`

Update a user.

#### `DELETE api/users/{id}`

Delete a user.