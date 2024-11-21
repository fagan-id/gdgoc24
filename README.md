# API Documentation: Books API

This API provides functionality to manage books.



## Base URL
https://ppw22023-online.preview-domain.com/fagan/public/
---

## Endpoints

### 1. **GET** `/api/books`
Retrieve a list of all books.

**Request**
```http
GET /api/books 
Host: [yourdomain.com](https://ppw22023-online.preview-domain.com/fagan/public/)

Response :
- 200 OK
- Returns a list of books.

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

## 2. POST /api/books
Create a new book.

POST /api/books HTTP/1.1
Host: yourdomain.com
Content-Type: application/json
