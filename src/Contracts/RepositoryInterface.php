<?php

namespace Avengers\Repository\Contracts;

use Illuminate\Support\Collection;

/**
 * Interface RepositoryInterface
 * @package Avengers\Repository\Contracts
 */
interface RepositoryInterface
{
    /**
     * Retrieve all data
     *
     * @param array $columns
     * @return mixed
     */
    public function all($columns = ['*']);

    /**
     * Save a new entity in repository
     *
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes);

    /**
     * Delete a entity in repository by model
     *
     * @param  $id
     * @return bool|null
     * @throws \Exception
     */
    public function delete($id);

    /**
     * Find data by id
     *
     * @param       $id
     * @param array $columns
     * @return mixed
     */
    public function find($id, $columns = ['*']);

    /**
     * Find data by field and value
     *
     * @param       $field
     * @param       $value
     * @param array $columns
     * @return mixed
     */
    public function firstByField($field, $value, $columns = ['*']);

    /**
     * Find data by multiple fields
     *
     * @param array $where
     * @param array $columns
     * @return mixed
     */
    public function firstWhere(array $where, $columns = ['*']);

    /**
     * Retrieve first data of repository, or create new Entity
     *
     * @param array $attributes
     * @return mixed
     */
    public function firstOrCreate(array $attributes = []);

    /**
     * Insert new record into database
     *
     * @param  array  $attributes
     * @return bool
     */
    public function insert($attributes);

    /**
     * Update a entity in repository by model
     *
     * @param $id
     * @param array $attributes
     * @return mixed
     */
    public function update($id, array $attributes);

    /**
     * Create or update a record matching the attributes, and fill it with values.
     *
     * @param array $attributes
     * @param array $values
     * @return mixed
     */
    public function updateOrCreate(array $attributes, array $values = []);

    /**
     * Get an array with the values of a given column.
     *
     * @param string      $column
     * @param string|null $key
     * @return mixed
     */
    public function pluck($column, $key = null);

    /**
     * Retrieve all data of repository, paginated
     *
     * @param null  $limit
     * @param array $columns
     * @return mixed
     */
    public function paginate($limit = null, $columns = ['*']);
}
