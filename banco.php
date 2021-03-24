<?php
//Antes de iniciar a utilização do PDO habilite as linhas abaixo no seu arquivo php.ini, geralmente eles estão comentados.
//Habilitando PDO no Linux

extension=pdo.so
extension=pdo_mysql.so
extension=pdo_pgsql.so
extension=pdo_sqlite.so

//Habilitando PDO no Windows
extension=php_pdo.dll
extension=php_pdo_mysql.dll
extension=php_pdo_pgsql.dll
extension=php_pdo_sqlite.dll

//padrão de projeto chamado MVC (Model View Controller), que prima pela separação da camada de apresentação (view), camada de controle/regra de negócios (controller) e camada de dados (model, onde ficam os comandos SQL).
//Vamos criar um arquivo de conexão com o banco em PDO, ele será o ponto de conexão central da nossa aplicação com o banco, se mudarmos ele, toda nossa aplicação deve estar pronta para mudar junto.
class Conexao {
    public static $instance;
    private function __construct() {
        //
    }
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new PDO('mysql:host=localhost;
            dbname=minhabasededados', 'root', 'vertrigo',
 array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            self::$instance->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS,
            PDO::NULL_EMPTY_STRING);
        }
        return self::$instance;
    }
}

//criar agora o nosso POJO, que nada mais é do que o “espelho” da sua tabela em objetos. Este POJO irá conter um a definição da nossa tabela USUARIO com os campos: cod_usuario, nome, email, senha, ativo e perfil (este campo é um objeto referenciando outro POJO).

class PojoUsuario {
    private $cod_usuario;
    private $nome;
    private $email;
    private $senha;
    private $ativo;
    private $perfil;

    public function getCod_usuario() {
        return $this->cod_usuario;
    }

    public function setCod_usuario($cod_usuario) {
        $this->cod_usuario = $cod_usuario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = strtolower($email);
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = strtolower($senha);
    }

    public function getAtivo() {
        return $this->ativo;
    }

    public function setAtivo($ativo) {
        $this->ativo = strtolower($ativo);
    }

    public function getPerfil() {
        return $this->perfil;
    }

    public function setPerfil($perfil) {
        $this->perfil = $perfil;
    }
}

//criamos uma classe DAO que será responsável por realizar as consultas, inserções, deleções e edições no banco. O DAO é responsável por realizar processos no banco e retornar POJOs (se necessários) para a camada de controle. O nosso DAO implementa um padrão de projetos chamado Singleton, que em resumo faz que com que o objeto seja criado apenas uma vez na memória. Como nosso foco aqui não é ensinar padrão de projetos (e não muitos) iremos nos focar na utilização do PDO.

require_once CAMINHO_RAIZ . "admin/conexao.php";
require_once CAMINHO_RAIZ . "admin/geralog.php";
require_once CAMINHO_RAIZ . "admin/entity/perfil/
controller_perfil.php";
require_once "pojo_usuario.php";

class DaoUsuario {
    public static $instance;
    private function __construct() {
        //
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new DaoUsuario();

        return self::$instance;
    }

    public function Inserir(PojoUsuario $usuario) {
        try {
            $sql = "INSERT INTO usuario (
                nome,
                email,
                senha,
                ativo,
                cod_perfil)
                VALUES (
                :nome,
                :email,
                :senha,
                :ativo,
                :cod_perfil)";

            $p_sql = Conexao::getInstance()->prepare($sql);

            $p_sql->bindValue(":nome", $usuario->getNome());
            $p_sql->bindValue(":email", $usuario->getEmail());
            $p_sql->bindValue(":senha", $usuario->getSenha());
            $p_sql->bindValue(":ativo", $usuario->getAtivo());
            $p_sql->bindValue(":cod_perfil",
            $usuario->getPerfil()->getCod_perfil());


            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.";
            GeraLog::getInstance()->inserirLog("Erro: Código: " .
$e->getCode() . " Mensagem: " . $e->getMessage());
        }
    }

    public function Editar(PojoUsuario $usuario) {
        try {
            $sql = "UPDATE usuario set
		nome = :nome,
                email = :email,
                senha = :senha,
                ativo = :ativo,
                cod_perfil = :cod_perfil WHERE cod_usuario = :cod_usuario";

            $p_sql = Conexao::getInstance()->prepare($sql);

            $p_sql->bindValue(":nome", $usuario->getNome());
            $p_sql->bindValue(":email", $usuario->getEmail());
            $p_sql->bindValue(":senha", $usuario->getSenha());
            $p_sql->bindValue(":ativo", $usuario->getAtivo());
            $p_sql->bindValue(":cod_perfil", $usuario->getPerfil()->
getCod_perfil());
            $p_sql->bindValue(":cod_usuario", $usuario->getCod_usuario());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.";
            GeraLog::getInstance()->inserirLog("Erro: Código: " . $e->
getCode() . " Mensagem: " . $e->getMessage());
        }
    }

    public function Deletar($cod) {
        try {
            $sql = "DELETE FROM usuario WHERE cod_usuario = :cod";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":cod", $cod);

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.";
            GeraLog::getInstance()->inserirLog("Erro: Código: " . $e->
getCode() . " Mensagem: " . $e->getMessage());
        }
    }

    public function BuscarPorCOD($cod) {
        try {
            $sql = "SELECT * FROM usuario WHERE cod_usuario = :cod";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":cod", $cod);
            $p_sql->execute();
            return $this->populaUsuario($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.";
            GeraLog::getInstance()->inserirLog("Erro: Código: " . $e->
getCode() . " Mensagem: " . $e->getMessage());
        }
    }
private function populaUsuario($row) {
        $pojo = new PojoUsuario;
        $pojo->setCod_usuario($row['cod_usuario']);
        $pojo->setNome($row['nome']);
        $pojo->setEmail($row['email']);
        $pojo->setSenha($row['senha']);
        $pojo->setAtivo($row['ativo']);
        $pojo->setPerfil(ControllerPerfil::getInstance()-
        >BuscarPorCOD($row['cod_perfil']));
        return $pojo;
    }

}


?>