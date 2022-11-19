<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'conectar.php';
require_once 'conexao.php';



class FerramentaDAO {
    public $pdo = null;

    public function __construct()
    {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllFerramenta()
    {
        try {
            $sql = "SELECT * FROM tb_ferramenta";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $ferramenta = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $ferramenta;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvarFerramenta(ferramentaDTO $ferramentaDTO)
    {
        try {
            $sql = "INSERT INTO tb_ferramentas (nome_ferramenta,marca_ferramenta) 
                    VALUES (?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ferramentaDTO->getCod_ferramenta());
            $stmt->bindValue(2, $ferramentaDTO->getNome());
            $stmt->bindValue(3, $ferramentaDTO->getMarca());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function excluirFerramenta($cod_ferramenta)
    {
        try {
            $sql = "DELETE FROM tb_ferramenta 
                   WHERE cod_ferramenta=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1,$cod_ferramenta);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            
             
        }
    }

    public function getFerramentaById($cod_ferramenta)
    {
        try {
            $sql = "SELECT * FROM tb_ferramenta WHERE cod_ferramenta= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $cod_ferramenta);
            $stmt->execute();
            $cod_ferramenta = $stmt->fetch(PDO::FETCH_ASSOC);
            return $cod_ferramenta;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function serchFerramenta($where = array())
    {
        try {
            $cod_ferramenta = getPost('cod_ferramenta');
            $nome_ferramenta = getPost('nome_ferramenta');
            $marca_ferramenta = getPost('marca_ferramenta');
            if ($cod_ferramenta) {
                $where[] = " `cod_ferramenta` = '{$cod_ferramenta}'";
            }
            if ($nome_ferramenta) {
                $where[] = " `nome_ferramenta` = '{$nome_ferramenta}'";
            }
            if ($marca_ferramenta) {
                $where[] = " `marca_ferramenta` = '{$marca_ferramenta}'";
            }
            $sql = "SELECT * FROM tb_ferramenta WHERE cod_ferramenta, nome_ferramenta, marca_ferramenta  ";
            if (sizeof($where)) {
                $sql .= ' WHERE ' . implode(' AND ', $where);
                echo $sql;
            }
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $cod_ferramenta);
            $stmt->bindValue(2, $nome_ferramenta);
            $stmt->bindValue(3, $marca_ferramenta);
            $stmt->execute();
            $ferramenta = $stmt->fetch(PDO::FETCH_ASSOC);
            return $ferramenta;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updateFerramentaById(ferramentaDTO $ferramentaDTO)
    {
        try {
            $sql = "UPDATE tb_ferramenta SET nome_ferramenta=?,marca_ferramenta=? WHERE cod_ferramenta= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ferramentaDTO->getCod_ferramenta());
            $stmt->bindValue(2, $ferramentaDTO->getNome());
            $stmt->bindValue(3, $ferramentaDTO->getMarca());
            $stmt->execute(); 

            
        } catch (PDOException $exc) {
            echo $exc->getMessage();

            
            
        }
    }
}
?>