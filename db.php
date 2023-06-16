<?php

interface IDB
{
    public function connect(string $host, string $username, string $password, string $database): ?static;
    public function select(string $query): array;
    public function insert(string $table, array $data): bool;
    public function update(string $table, int $id, array $data): bool;
    public function delete(string $table, int $id): bool;
}

class MySQL implements IDB
{
    private $connection;

    public function connect(
        string $host = "",
        string $username = "",
        string $password = "",
        string $database = ""
    ): ?static {
        $this->connection = mysqli_connect($host, $username, $password, $database);

        if (!$this->connection) {
            return null;
        }

        return $this;
    }

    public function select(string $query): array {
        $result = mysqli_query($this->connection, $query);

        if (!$result) {
            return [];
        }

        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function insert(string $table, array $data): bool {
        $keys = implode(", ", array_keys($data));
        $values = "'" . implode("', '", array_values($data)) . "'";

        $query = "INSERT INTO $table ($keys) VALUES ($values)";
        $result = mysqli_query($this->connection, $query);

        return $result;
    }

    public function update(string $table, int $id, array $data): bool {
        $set = "";

        foreach ($data as $key => $value) {
            $set .= "$key = '$value', ";
        }

        $set = rtrim($set, ", ");

        $query = "UPDATE $table SET $set WHERE id = $id";
        $result = mysqli_query($this->connection, $query);

        return $result;
    }

    public function delete(string $table, int $id): bool {
        $query = "DELETE FROM $table WHERE id = $id";
        $result = mysqli_query($this->connection, $query);

        return $result;
    }
}

?>
