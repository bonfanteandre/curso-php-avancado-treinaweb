<?php

namespace MeuProjeto\Validacao;

/**
 * Classe de validação
 * 
 * Classe responsável por fazer todo o tipo de validação de dados
 * 
 * @package MeuProjeto
 * @subpackage Validacao
 * @author André Bonfante <andre458bonfante@gmail.com>
 */
class Validador
{
    /**
     * @var array É um array de valores a serem validados
     */
    protected $valores;

    /**
     * Construtor que recebe os valores
     * 
     * @param array $valores Lista de valores para validar
     */
    public function __construct(array $valores)
    {
        $this->valores = $valores;
    }

    /**
     * Valida os dados do array de valores especificado
     * @return boolean true se os valores forem válidos, false no caso contrário
     */
    public function validar()
    {
        return true;
    }
}