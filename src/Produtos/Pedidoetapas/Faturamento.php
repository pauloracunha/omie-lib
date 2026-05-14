<?php

namespace OmieLib\Produtos\Pedidoetapas;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedidoetapas\Request\PEtapaListarRequest;
use OmieLib\Produtos\Pedidoetapas\Response\PEtapaListarResponse;

/**
 * Dados do faturamento
 *
 * @pw_element string $cFaturado Pedido de Vendas foi faturado (S/N)?
 * @pw_element string $dDtFat Data de Faturamento do Pedido.<BR>No formato dd/mm/aaaa.
 * @pw_element string $cHrFat Hora do Faturamento do Pedido.<BR>No formato hh:mm:ss.
 * @pw_element string $cUsDev Usuário que realizou o faturamento do pedido.
 * @pw_element string $cAutorizado NFE foi autorizada (S/N)?
 * @pw_element string $cDenegado NFE foi denegada (S/N)?
 * @pw_element string $cDANFE DANFE foi gerado (S/N)?
 * @pw_element string $cAmbiente Ambiente em que a NF-e foi gerada.<BR>Pode ser:<BR>H - Homologação.<BR>P - Produção.
 * @pw_element string $cChaveNFE Chave da NF-e gerada.
 * @pw_element string $cNumNFE Número da NF-e Gerada.
 * @pw_element string $cSerieNFE Série da NF-e gerada.&nbsp;
 * @pw_element string $dDtSainda Data de Saída da NF-e.
 * @pw_element string $cHrSaida Hora de Saída da NF-e&nbsp;
 * @pw_complex faturamento
 */
class Faturamento{
	/**
	 * Pedido de Vendas foi faturado (S/N)?
	 *
	 * @var string
	 */
	public string $cFaturado;
	/**
	 * Data de Faturamento do Pedido.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtFat;
	/**
	 * Hora do Faturamento do Pedido.<BR>No formato hh:mm:ss.
	 *
	 * @var string
	 */
	public string $cHrFat;
	/**
	 * Usuário que realizou o faturamento do pedido.
	 *
	 * @var string
	 */
	public string $cUsDev;
	/**
	 * NFE foi autorizada (S/N)?
	 *
	 * @var string
	 */
	public string $cAutorizado;
	/**
	 * NFE foi denegada (S/N)?
	 *
	 * @var string
	 */
	public string $cDenegado;
	/**
	 * DANFE foi gerado (S/N)?
	 *
	 * @var string
	 */
	public string $cDANFE;
	/**
	 * Ambiente em que a NF-e foi gerada.<BR>Pode ser:<BR>H - Homologação.<BR>P - Produção.
	 *
	 * @var string
	 */
	public string $cAmbiente;
	/**
	 * Chave da NF-e gerada.
	 *
	 * @var string
	 */
	public string $cChaveNFE;
	/**
	 * Número da NF-e Gerada.
	 *
	 * @var string
	 */
	public string $cNumNFE;
	/**
	 * Série da NF-e gerada.&nbsp;
	 *
	 * @var string
	 */
	public string $cSerieNFE;
	/**
	 * Data de Saída da NF-e.
	 *
	 * @var string
	 */
	public string $dDtSainda;
	/**
	 * Hora de Saída da NF-e&nbsp;
	 *
	 * @var string
	 */
	public string $cHrSaida;
}
