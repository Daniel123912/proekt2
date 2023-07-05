<?php

namespace Database;

/**
 * Управление PDO
 */
class DB
{
    /**
     * Подключение к базе данных
     * @var \PDO
     */
    private $db;
    /**
     * Подгодотовленный запрос к выполнению
     * @var \PDOStatement
     */
    private $prepare;


    public function __construct()
    {
        $this->connectDB();
    }

    /**
     * Подключение к базе данных
     * @return void
     */
    private function connectDB()
    {
        $config = require_once('configDB.php');

        $host = $config['host'];
        $dbname = $config['dbname'];

        try {
            $this->db = new \PDO("mysql:host=$host;dbname=$dbname", $config['user'], $config['password']);

            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    /**
     * Определяет тип данных параметра и связывает параметр с заданным значением если они есть
     * @param string $query - SQL запрос
     * @param array $parameters - параметры для запроса
     * @return void
     */
    private function init(string $query, array $parameters)
    {
        try {
            $this->prepare = $this->db->prepare($query);

            if (!empty($parameters)) {
                foreach ($parameters as $id => $parameter) {
                    switch ($parameter) {
                        case is_int($parameter):
                            $type = \PDO::PARAM_INT;
                            break;
                        case is_bool($parameter):
                            $type = \PDO::PARAM_BOOL;
                            break;
                        case is_string($parameter):
                            $type = \PDO::PARAM_STR;
                            break;
                        case is_null($parameter):
                            $type = \PDO::PARAM_NULL;
                            break;
                    }

                    $this->prepare->bindValue($id, $parameter, $type);
                }
            }
        
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    /**
     * Выбирает оставшиеся строки из набора результатов или запускает подготовленный запрос на выполнение
     * @param string $query - SQL запрос
     * @param array $parameters - параметры для запроса
     * @return array|int Возварщает массив из набора данных при 
     * "SELECT" или затронутое число строк при "INSERT", "UPDATE" или "DELETE"
     */
    public function query(string $query, array $parameters = [])
    {
        $queryWords = explode(' ', $query);
        $action = '';

        $this->init($query, $parameters);

        switch (mb_strtolower($queryWords[0])) {
            case 'select':
                $action = 'select';
                break;
            case 'insert':
                $action = 'insert';
                break;
            case 'update':
                $action = 'update';
                break;
            case 'delete':
                $action = 'delete';
                break;
        }

        try {
            $this->prepare->execute();

            if ($action == 'select')
                return $this->prepare->fetchAll(\PDO::FETCH_ASSOC);
            else
                return $this->prepare->rowCount();

        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
}

?>