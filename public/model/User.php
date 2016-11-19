<?php

// __DIR__ is a *magic constant* with the directory path containing this file.
// This allows us to correctly require_once Model.php, no matter where this file is being required from.
require_once __DIR__ . '/Model.php';

class User extends Model
{
    protected static $table = 'users';
    /** Insert a new entry into the database */
    protected function insert()
    {
        // @TODO: Use prepared statements to ensure data security
        $query = "INSERT INTO " . self::$table . "(name, email, password) VALUES (:name, :email, :password)";
        $stmt = self::$dbc->prepare($query);
        // @TODO: You will need to iterate through all the attributes to build the prepared query
        $stmt->bindValue(':name', $this->attributes['name'], PDO::PARAM_STR);
        $stmt->bindValue(':email', $this->attributes['email'], PDO::PARAM_STR);
        $stmt->bindValue(':password', $this->attributes['password'], PDO::PARAM_STR);
        $stmt->execute();
        // below is how to loop through them and bind through iteration

        // foreach ($this->attributes as $column => $value) {
        //     $stmt->bindValue(':' . $column, $value, PDO::PARAM_STR);
        // }


        // @TODO: After the insert, add the id back to the attributes array
        //        so the object properly represents a DB record
        $id = self::$dbc->lastInsertId();
        $this->attributes['id'] = $id;
            // OR
        // $this->attributes['id'] = self::$dbc->lastInsertId();
    }

    /** Update existing entry in the database */
    protected function update()
    {
        // @TODO: Use prepared statements to ensure data security
        $query = self::$dbc->prepare("UPDATE " . self::$table . " SET name = :name, email = :email, password = :password WHERE id = :id");
        // @TODO: You will need to iterate through all the attributes to build the prepared query
        foreach ($this->attributes as $key => $attribute) {
            $query->bindValue(":{$key}", $this->attributes["{$key}"], PDO::PARAM_STR);
        }
        $query->execute();
    }

    /**
     * Find a single record in the DB based on its id
     *
     * @param int $id id of the user entry in the database
     *
     * @return User An instance of the User class with attributes array set to values from the database
     */
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        // @TODO: Create select statement using prepared statements
        $query = self::$dbc->prepare('SELECT * FROM ' . self::$table . ' WHERE id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        // @TODO: Store the result in a variable named $result
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;
        if ($result) {
            $instance = new static($result);
        }
        return $instance;
    }

    /**
     * Find all records in a table
     *
     * @return User[] Array of instances of the User class with attributes set to values from database
     */
    public static function all()
    {
        self::dbConnect();

        // @TODO: Learning from the find method, return all the matching records
        $query = self::$dbc->prepare('SELECT * FROM ' . self::$table);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        $instance = null;
        if ($result) {
            $instance = new static($result);
        }
        return $instance;
    }

    public static function delete($id) {
        self::dbConnect();

        $query = self::$dbc->prepare('DELETE FROM ' . self::$table . ' WHERE id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
    }
}


$user = new User();







