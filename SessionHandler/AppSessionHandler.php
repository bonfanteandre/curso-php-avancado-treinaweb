<?php

class AppSessionHandler implements SessionHandlerInterface
{
    protected $pdo;

    public function __construct(\PDO $con)
    {
        $this->pdo = $con;
    }

    public function execute($sql, $params = [])
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    public function close ()
    {
        return true;
    }

    public function destroy ($session_id)
    {
        $this->execute("DELETE FROM sessoes WHERE id = ?", [$session_id]);
        return true;
    }

    public function gc ($maxlifetime)
    {
        $sql = 'DELETE FROM sessoes '
             . 'WHERE ultimo_acesso < '
             . "DATE_SUB(NOW(), INTERVAL $maxlifetime SECOND)";

        $this->execute($sql);
    }

    public function open ($save_path , $session_name)
    {
        return true;
    }

    public function read ($session_id)
    {
        $res = $this->execute('SELECT conteudo FROM sessoes WHERE id = ?', [$session_id]);
        return $res->rowCount() ?
                        $res->fetch(\PDO::FETCH_OBJ)->conteudo :
                        '';
    }

    public function write ($session_id, $session_data)
    {
        $this->execute('REPLACE INTO sessoes VALUES (?, ?, NULL)', [
            $session_id,
            $session_data
        ]);

        return true;
    }
}

$pdo = new PDO('mysql:dbname=sessoes', 'root', '');

$app = new AppSessionHandler($pdo);

session_set_save_handler($app, true);

session_start();
// $_SESSION['app'] = 'teste';
// $_SESSION['nome'] = 'João';
// $_SESSION['email'] = 'joao@gmail.com';


// echo $_SESSION['app'] . '<br>';
// echo $_SESSION['nome'] . '<br>';
// echo $_SESSION['email'] . '<br>';

// session_destroy();