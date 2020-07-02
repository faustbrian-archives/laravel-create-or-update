<?php

namespace KodeKeep\CreateOrUpdate;

trait CreateOrUpdate
{
    public static function createOrUpdate(array $attributes, array $values = []): self
    {
        $model = static::where($attributes)->first();

        if ($model) {
            $model->update(array_merge($attributes, $values));
        } else {
            $model = static::create(array_merge($attributes, $values));
        }

        return $model->fresh();
    }
}
