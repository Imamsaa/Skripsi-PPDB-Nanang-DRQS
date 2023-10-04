<?php
require_once __DIR__."/config.php";

function insert(string $table,array $data) : bool
{
    $conn = getConn();
    $keys = implode(",", array_keys($data));
    $values = implode("','", array_values($data)); 
    $sql = "INSERT INTO {$table}($keys) VALUES('$values');";

    try {
        $conn-> exec($sql);
        return true;
        $conn = null;
    } catch (PDOException $exception) {
        echo "Gagal ".$exception->getMessage();
        return false;
    }
}

function delete(string $table, int $id) : bool
{
    $conn = getConn();
    $sql = "DELETE FROM $table WHERE id=$id;";

    try {
        if ($conn-> exec($sql) > 0) {
            // echo "Succes menghapus data";
            return true;
        }else{
            // echo "gagal";
            return false;
        }
        $conn = null;
    } catch (PDOException $exception) {
        // echo "Gagal ".$exception->getMessage();
        return false;
    }
}

function edit(string $table,array $data,array $insearch) : bool
{
    $conn = getConn();
    try {
        foreach ($data as $key => $value) {
            $sql = "UPDATE {$table} SET $key='$value' WHERE $insearch[0]=$insearch[1];";
            $conn-> exec($sql);
        }
        // echo "Succes Mengedit data";
        return true;
        $conn = null;
    } catch (PDOException $exception) {
         echo "Gagal ".$exception->getMessage();
        return false;
    }
}

function selectSpecific(?array $row = null, string $table,array $insearch) : PDOStatement | bool
{
    $conn = getConn();

    if (is_null($row)) {
        $all = "*";
    }else{
        $all = implode(",", array_keys($row));
    }
    $sql = "SELECT $all FROM $table WHERE $insearch[0]=$insearch[1]";
    try {
        $steatment = $conn -> query($sql);
        return $steatment;
        $conn = null;
    } catch (PDOException $exception) {
        // echo "Gagal".$exception->getMessage();
        return false;
    }
    
}

function select(?array $row = null, string $table): PDOStatement | bool
{
    $conn = getConn();

    if (is_null($row)) {
        $all = "*";
    }else{
        $all = implode(",", array_keys($row));
    }
    $sql = "SELECT $all FROM $table";

    try {
        $steatment = $conn -> query($sql);
        return $steatment;

        $conn = null;
    } catch (PDOException $exception) {
        // echo "Gagal : ". $exception->getMessage();
        return false;
    }
    
}

function selectJoin(?array $row = null, string $table, string $tablejoin, array $idjoin) : PDOStatement | bool
{
    $conn = getConn();

    if (is_null($row)) {
        $all = "*";
    }else{
        $all = implode(",", $row);
    }

    foreach ($idjoin as $key => $value) {

        $valuejoin[] = "$key.$value";
    }
    $sql = "SELECT $all FROM $table INNER JOIN $tablejoin ON $valuejoin[0]=$valuejoin[1]";

    try {
        $steatment = $conn -> query($sql);
        return $steatment;

        $conn = null;
    } catch (PDOException $exception) {
        // echo "Gagal : ". $exception->getMessage();
        return false;
    }
    
}

function selectJoinSpecific(?array $row = null, string $table, string $tablejoin, array $idjoin, array $insearch) : PDOStatement | bool
{
    $conn = getConn();

    if (is_null($row)) {
        $all = "*";
    }else{
        $all = implode(",", $row);
    }

    foreach ($idjoin as $key => $value) {

        $valuejoin[] = "$key.$value";
    }
    $sql = "SELECT $all FROM $table INNER JOIN $tablejoin ON $valuejoin[0]=$valuejoin[1] WHERE $table.$insearch[0]=$insearch[1]";
    
    try {
        $steatment = $conn -> query($sql);
        return $steatment;

        $conn = null;
    } catch (PDOException $exception) {
        // echo "Gagal : ". $exception->getMessage();
        return false;
    }
}

function selectCustom(string $sql, string $indicator, ?string $value) : PDOStatement | bool
{
    $conn = getConn();

    $join = $sql." WHERE ".$indicator."='".$value."'";
    
    try {
        $steatment = $conn -> query($join);
        return $steatment;

        $conn = null;
    } catch (PDOException $exception) {
        // echo "Gagal : ". $exception->getMessage();
        return false;
    }
}

function selectSimple(string $sql) : PDOStatement | bool
{
    $conn = getConn();
    
    try {
        $steatment = $conn -> query($sql);
        return $steatment;

        $conn = null;
    } catch (PDOException $exception) {
        // echo "Gagal : ". $exception->getMessage();
        return false;
    }
}
?>