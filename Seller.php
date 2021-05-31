<?php

class Seller implements ArrayAccess, JsonSerializable
{
    private array $data;

    public function __construct()
    {
        $faker = \Faker\Factory::create();
        $this->data = [
            'name' => $faker->name,
            'website' => $faker->url,
            'email' => $faker->email,
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

    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }
}
