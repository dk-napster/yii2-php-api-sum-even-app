<?php

namespace api\models;

use yii\web\IdentityInterface;

class ApiUser implements IdentityInterface
{
    private int $id;
    private string $username;

    public function __construct(int $id, string $username)
    {
        $this->id = $id;
        $this->username = $username;
    }

    /**
     * @param $id
     * @return self|null
     */
    public static function findIdentity($id): ?self
    {
        return null;
    }

    /**
     * @param $token
     * @param $type
     * @return self|null
     */
    public static function findIdentityByAccessToken($token, $type = null): ?self
    {
        return null;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getAuthKey(): ?string
    {
        return null;
    }

    /**
     * @param $authKey
     * @return bool
     */
    public function validateAuthKey($authKey): bool
    {
        return false;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
}
