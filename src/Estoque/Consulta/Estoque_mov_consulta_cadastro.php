<?php

namespace OmieLib\Estoque\Consulta;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Consulta\Request\EstoqueMovimentoRequest;
use OmieLib\Estoque\Consulta\Request\ListarEstPosRequest;
use OmieLib\Estoque\Consulta\Request\ListarMovEstoqueRequest;
use OmieLib\Estoque\Consulta\Response\EstoqueMovimentoResponse;
use OmieLib\Estoque\Consulta\Response\ListarEstPosResponse;
use OmieLib\Estoque\Consulta\Response\ListarMovEstoqueResponse;

/**
 * Registro de Consulta de Estoque
 *
 * @pw_element integer $codigo_local_estoque Código do local do estoque.
 * @pw_element integer $id_prod Código do Produto.
 * @pw_element string $cod_int Código de Integração do Produto.<BR><BR>Preenchimento opcional.<BR><BR>Preencher esse campo apenas se não tiver informado o campo "id_prod".<BR>
 * @pw_element string $data Data da Consulta de Estoque.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $apenas_saldo Exibir apenas saldo em estoque (S/N).<BR><BR>Obs: Se preenchido com "S" será exibido somente saldo em estoque.<BR>Informações como CMC, pedido de vendas em aberto e estoque mínimo não serão apresentados.<BR><BR>Padrão: "N"
 * @pw_complex estoque_mov_consulta_cadastro
 */
class Estoque_mov_consulta_cadastro{
	/**
	 * Código do local do estoque.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Código do Produto.
	 *
	 * @var integer
	 */
	public int $id_prod;
	/**
	 * Código de Integração do Produto.<BR><BR>Preenchimento opcional.<BR><BR>Preencher esse campo apenas se não tiver informado o campo "id_prod".<BR>
	 *
	 * @var string
	 */
	public string $cod_int;
	/**
	 * Data da Consulta de Estoque.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $data;
	/**
	 * Exibir apenas saldo em estoque (S/N).<BR><BR>Obs: Se preenchido com "S" será exibido somente saldo em estoque.<BR>Informações como CMC, pedido de vendas em aberto e estoque mínimo não serão apresentados.<BR><BR>Padrão: "N"
	 *
	 * @var string
	 */
	public string $apenas_saldo;
}
