Yii2 Sum Even API

In .env file put your own GITHUB_TOKEN.
This is required to avoid hitting GitHub API rate limits during testing.

Preparation :

## Build
make build

## Up
make up

## Request example

curl -X POST http://localhost/api/get-sum-even -H "X-Login: admin" -H "X-Password: topsecret" -H "Content-Type: application/json" -d '{"numbers": [1,2,3,4,5,6]}'

## Response example

{
    "sum": 12
}

## Tests

make test

## Structure

- dto – data transfer objects
- services – business logic
- models – validation
- controllers – REST layer