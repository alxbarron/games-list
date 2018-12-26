# Laravel Game List API Spec

## JSON Objects returned by API:

Make sure the right content type like `Content-Type: application/json; charset=utf-8` is correctly returned.

### Single Game

```JSON
{
  "data": {
    "id": 1,
    "game_type": "multiplayer",
    "name": "rerum",
    "gender": "shooter",
    "launch_year": 1999,
    "developer": "Mr. Claud Beatty Sr.",
    "price": "69.12",
    "qty": 9,
    "cover": "/img/covers/default.jpg",
    "created_at": "2018-12-26 12:56:52",
    "updated_at": "2018-12-26 12:56:52"
  }
}
```

### Multiple Games

```JSON
{
    "data":[{
        "id":1,"game_type":"multiplayer",
        "name":"rerum",
        "gender":"shooter",
        "launch_year":1999,
        "developer":"Mr. Claud Beatty Sr.",
        "price":"69.12",
        "qty":9,
        "cover":"\/img\/covers\/default.jpg",
        "created_at":"2018-12-26 12:56:52",
        "updated_at":"2018-12-26 12:56:52"
    }, {
    "id":2,
    "game_type":"multiplayer",
    "name":"est",
    "gender":"shooter",
    "launch_year":2001,
    "developer":"August Leannon",
    "price":"75.66",
    "qty":3,
    "cover":"\/img\/covers\/default.jpg",
    "created_at":"2018-12-26 12:56:52",
    "updated_at":"2018-12-26 12:56:52"
    }]
}
```

## Endpoints:

### List Games

`GET /api/games`

No authentication required, will return [multiple games](#multiple-games)

### Get Game

`GET /api/game/:id`

No authentication required, will return [single game](#single-game)

### Create Article

`POST /api/game/new`

Example request body:

```JSON
{
  "game": {
    "game_type": "Single player | Multiplayer",
    "name": "Game name",
    "gender": "Shooter | Platform | Rol | Simulator | Sports",
    "launch_year": 2018,
    "developer": "Developer name",
    "price": 20.99,
    "qty": 5,
    "cover": "image-url"
  }
}
```
No authentication required, will return [single game](#single-game)
Required fields: `game_type`, `name`, `gender`, `launch_year`, `developer`, `price`, `qty`

Optional fields: `cover`
