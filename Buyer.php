<?php

class Buyer implements ArrayAccess, JsonSerializable
{
    private array $data;

    public function __construct()
    {
        $faker = \Faker\Factory::create();
        $this->data = [
            'firstName ' => $faker->firstName(),
            'lastName ' => $faker->lastName(),
            'email' => $faker->email,
            'phone' => $faker->phoneNumber,
        ];
    }

    public function offsetExists($offset)
    {
        return isset($this->data[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->data[$offset] ?? null;
    }

    public function offsetSet($offset, $value)
    {
        if (isset($offset)) {
            $this->data[$offset] = $value;
            return;
        }
        $this->data[] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->data[$offset]);
    }

    public function jsonSerialize()
    {
        return $this->data;
    }
}
