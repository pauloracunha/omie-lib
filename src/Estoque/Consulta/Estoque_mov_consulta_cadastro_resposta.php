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
 * Status de Resposta da Consulta de Estoque
 *
 * @pw_element string $codigo_status Código de Resposta do Status da Consulta de Estoque
 * @pw_element string $descricao_status Descrição de Resposta do Status da Consulta de Estoque
 * @pw_element decimal $saldo Saldo de Estoque da Consulta
 * @pw_element decimal $cmc Valor do CMC da Consulta de Estoque.
 * @pw_element decimal $pendente Saldo pendente em pedidos de venda em aberto (não faturados) e não cancelados.
 * @pw_element decimal $estoque_minimo Estoque mínimo para o produto.
 * @pw_element integer $codigo_local_estoque Código do local do estoque.
 * @pw_element decimal $reservado Indica a quantidade reservada do estoque para o produto.
 * @pw_element decimal $fisico Indica a quantidade física em estoque para o produto.
 * @pw_complex estoque_mov_consulta_cadastro_resposta
 */
class Estoque_mov_consulta_cadastro_resposta{
	/**
	 * Código de Resposta do Status da Consulta de Estoque
	 *
	 * @var string
	 */
	public string $codigo_status;
	/**
	 * Descrição de Resposta do Status da Consulta de Estoque
	 *
	 * @var string
	 */
	public string $descricao_status;
	/**
	 * Saldo de Estoque da Consulta
	 *
	 * @var decimal
	 */
	public float $saldo;
	/**
	 * Valor do CMC da Consulta de Estoque.
	 *
	 * @var decimal
	 */
	public float $cmc;
	/**
	 * Saldo pendente em pedidos de venda em aberto (não faturados) e não cancelados.
	 *
	 * @var decimal
	 */
	public float $pendente;
	/**
	 * Estoque mínimo para o produto.
	 *
	 * @var decimal
	 */
	public float $estoque_minimo;
	/**
	 * Código do local do estoque.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Indica a quantidade reservada do estoque para o produto.
	 *
	 * @var decimal
	 */
	public float $reservado;
	/**
	 * Indica a quantidade física em estoque para o produto.
	 *
	 * @var decimal
	 */
	public float $fisico;
}
