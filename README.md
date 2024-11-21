# API Documentation: Books API

This API provides functionality to manage (CRUD) books.



## Base URL
https://ppw22023-online.preview-domain.com/fagan/public/
---

## Endpoints

### 1. **GET** `/api/books`
Retrieve a list of all books. 

**Response**
```http
[
  {
    "id": 35,
    "title": "5 Minute to Learn Go",
    "author": "Sundar Pichai",
    "published_at": "2023-10-25",
    "created_at": "2024-11-20T03:05:09.000000Z",
    "updated_at": "2024-11-20T03:05:09.000000Z"
  },
  {
    "id": 36,
    "title": "5 Minute to Learn Go",
    "author": "Sundar Pichai",
    "published_at": "2023-10-25",
    "created_at": "2024-11-20T03:05:09.000000Z",
    "updated_at": "2024-11-20T03:05:09.000000Z"
  }
]
```
## 2. POST /api/books
Create a new book.

**Response**
```http
{
    "message": "Book created successfully",
    "data": {
        "title": "5 Minute to Learn Go",
        "author": "Sundar Pichai",
        "published_at": "2023-10-25",
        "updated_at": "2024-11-21T15:44:38.000000Z",
        "created_at": "2024-11-21T15:44:38.000000Z",
        "id": 56
    }
}
```

## 3. GET /api/books/{id}
Retrieve details of a specific book.

**Response**
```http
[
    {
        "id": 35,
        "title": "5 Minute to Learn Go",
        "author": "Sundar Pichai",
        "published_at": "2023-10-25",
        "created_at": "2024-11-20T03:05:09.000000Z",
        "updated_at": "2024-11-20T03:05:09.000000Z"
    }
]
```

## 4. PUT /api/books/{id}
Update details of a specific book.

Step : 
1. Open Postman
2. Change HTTP Request into PUT
3. add Base URL (top of this readme)
4. add "/api/books/{id}"

-- current base id is 35

**Response**
```http
{
    "message": "Book updated successfully",
    "data": {
        "id": 2,
        "title": "Updated Title",
        "author": "Sundar Pichai",
        "published_at": "2023-10-25",
        "created_at": "2024-10-25T13:36:09.000000Z",
        "updated_at": "2024-10-25T13:36:47.000000Z"
    }
}
```
## 5. GET /api/books/{id}
Not found book.

**Response**
```http
{
    "message": "Book not found"
}
```
