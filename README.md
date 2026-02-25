Yii2 Sum Even API

Instructions:

`git clone git@github.com:dk-napster/yii2-php-api-sum-even-app.git`

`cd yii2-php-api-sum-even-app`

`cp .env.example .env`

In .env file put your own GITHUB_TOKEN.
This is required to avoid hitting GitHub API rate limits during testing.

Preparation :

## Build
`make build`

## Up
`make up`

## Init
`make init`

## Request example

curl -X POST http://localhost/api/get-sum-even -H "X-Login: admin" -H "X-Password: topsecret" -H "Content-Type: application/json" -d '{"numbers": [1,2,3,4,5,6]}'

## Response example

{
    "sum": 12
}

## Tests

`make test`

## Structure

- dto – data transfer objects
- services – business logic
- models – validation
- controllers – REST layer
- config – configuration files