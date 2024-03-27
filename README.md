# Tracker Api
<p align="center">
    <img src="https://user-images.githubusercontent.com/35098175/145682384-0f531ede-96e0-44c3-a35e-32494bd9af42.png" alt="docker-laravel">
</p>

[Project](https://github.com/spektr08/tracker/blob/main/Task%20Tracker%20API%20ProjectReq.pdf)

### How install
Set up env file then run commands:
```bash
$ make docker-up
$ make install
```
### APi endpoints
Show all tasks GET:
```bash
https://localhost/api/tasks
```
Response 
```bash
{
    "succes": true,
    "data": [
        {
            "id": 2,
            "name": "test"
        },
        {
            "id": 3,
            "name": "test"
        },
        {
            "id": 4,
            "name": "test"
        },
        {
            "id": 5,
            "name": "test"
        },
        {
            "id": 6,
            "name": "test"
        },
        {
            "id": 7,
            "name": "test"
        },
        {
            "id": 8,
            "name": "test"
        },
        {
            "id": 9,
            "name": "test"
        },
        {
            "id": 10,
            "name": "test"
        },
        {
            "id": 11,
            "name": "test"
        },
        {
            "id": 12,
            "name": "test"
        },
        {
            "id": 13,
            "name": "test"
        },
        {
            "id": 14,
            "name": "test"
        },
        {
            "id": 15,
            "name": "test"
        },
        {
            "id": 16,
            "name": "test"
        }
    ],
    "links": {
        "first": "https://localhost/api/tasks?page=1",
        "last": "https://localhost/api/tasks?page=2",
        "prev": null,
        "next": "https://localhost/api/tasks?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 2,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "https://localhost/api/tasks?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": "https://localhost/api/tasks?page=2",
                "label": "2",
                "active": false
            },
            {
                "url": "https://localhost/api/tasks?page=2",
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "https://localhost/api/tasks",
        "per_page": 15,
        "to": 15,
        "total": 25
    }
}
```
Add new task POST:
```bash
https://localhost/api/tasks
payload
{ name: required, description: required }
```
Response 
```bash
{
    "success": true,
    "data": {
        "id": 26,
        "name": "dima",
        "description": "test",
        "created_at": "2023-08-15T15:31:20.000000Z",
        "updated_at": "2023-08-15T15:31:20.000000Z"
    }
}
```

Edit task PUT:
```bash
https://localhost/api/tasks/{taskID}
payload
{ name: required, description: required }
```
Response 
```bash
{
    "success": true,
    "data": {
        "id": 26,
        "name": "dima",
        "description": "test",
        "created_at": "2023-08-15T15:31:20.000000Z",
        "updated_at": "2023-08-15T15:31:20.000000Z"
    }
}
```

Show task GET:
```bash
https://localhost/api/tasks/{taskID}
```
Response 
```bash
{
    "success": true,
    "data": {
        "id": 26,
        "name": "dima",
        "description": "test",
        "created_at": "2023-08-15T15:31:20.000000Z",
        "updated_at": "2023-08-15T15:31:20.000000Z"
    }
}
```

DELETE task DELETE:
```bash
https://localhost/api/tasks/{taskID}
```
Response 
```bash
{
    "success": true,
    "data": {
        "id": 26,
        "name": "dima",
        "description": "test",
        "created_at": "2023-08-15T15:31:20.000000Z",
        "updated_at": "2023-08-15T15:31:20.000000Z"
    }
}
```
