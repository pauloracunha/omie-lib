<?php

namespace OmieLib\Crm\OportunidadesResumo;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\OportunidadesResumo\Request\ObterListaOpRequest;
use OmieLib\Crm\OportunidadesResumo\Request\ObterResumoOpRequest;
use OmieLib\Crm\OportunidadesResumo\Response\ObterListaOpResponse;
use OmieLib\Crm\OportunidadesResumo\Response\ObterResumoOpResponse;

/**
 * Lista de oportunidades.
 *
 * @pw_element integer $nIdOportunidade ID da Oportunidade.
 * @pw_element string $cDescricao Descrição da Oportunidade.
 * @pw_element integer $nIdConta Id da Conta.
 * @pw_element string $cNomeConta Nome da Conta.
 * @pw_element integer $nIdContato ID do Contato.
 * @pw_element string $cNomeContato Nome do Contato.
 * @pw_element integer $nIdVendedor Id do Vendedor.
 * @pw_element string $cNomeVendedor Nome do vendedor.
 * @pw_element string $cNomeSolucao Nome da Solução.
 * @pw_element integer $nTemperatura Temperatura da Oportunidade. (°C)
 * @pw_element string $cSituacao Situação da Oportunidade.<BR>Indica se a Oportunidade está como Previsão,Atrasada ou Concluída.
 * @pw_element string $cIcone Unicode do Ícone.
 * @pw_element string $cCor Hexadecimal da cor.
 * @pw_element decimal $vTicket Valor do Ticket Calculado da Oportunidade.
 * @pw_complex listaDetalhesOp
 */
class ListaDetalhesOp{
	/**
	 * ID da Oportunidade.
	 *
	 * @var integer
	 */
	public int $nIdOportunidade;
	/**
	 * Descrição da Oportunidade.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Id da Conta.
	 *
	 * @var integer
	 */
	public int $nIdConta;
	/**
	 * Nome da Conta.
	 *
	 * @var string
	 */
	public string $cNomeConta;
	/**
	 * ID do Contato.
	 *
	 * @var integer
	 */
	public int $nIdContato;
	/**
	 * Nome do Contato.
	 *
	 * @var string
	 */
	public string $cNomeContato;
	/**
	 * Id do Vendedor.
	 *
	 * @var integer
	 */
	public int $nIdVendedor;
	/**
	 * Nome do vendedor.
	 *
	 * @var string
	 */
	public string $cNomeVendedor;
	/**
	 * Nome da Solução.
	 *
	 * @var string
	 */
	public string $cNomeSolucao;
	/**
	 * Temperatura da Oportunidade. (°C)
	 *
	 * @var integer
	 */
	public int $nTemperatura;
	/**
	 * Situação da Oportunidade.<BR>Indica se a Oportunidade está como Previsão,Atrasada ou Concluída.
	 *
	 * @var string
	 */
	public string $cSituacao;
	/**
	 * Unicode do Ícone.
	 *
	 * @var string
	 */
	public string $cIcone;
	/**
	 * Hexadecimal da cor.
	 *
	 * @var string
	 */
	public string $cCor;
	/**
	 * Valor do Ticket Calculado da Oportunidade.
	 *
	 * @var decimal
	 */
	public float $vTicket;
}
