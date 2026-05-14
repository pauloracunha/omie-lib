<?php

namespace OmieLib\Produtos\Remessa;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Remessa\Request\RemessaDevolverRequest;
use OmieLib\Produtos\Remessa\Request\RemessaListarRequest;
use OmieLib\Produtos\Remessa\Request\RemessaStatusRequest;
use OmieLib\Produtos\Remessa\Response\RemessaDevolverResponse;
use OmieLib\Produtos\Remessa\Response\RemessaListarResponse;
use OmieLib\Produtos\Remessa\Response\RemessaStatusResponse;

/**
 * Cabeçalho da Remessa de Produtos
 *
 * @pw_element integer $nCodRem Código da Remessa no Omie
 * @pw_element string $cCodIntRem Código de Integração da Remessa
 * @pw_element integer $nCodCli Código do Cliente
 * @pw_element string $cCodIntCli Código de Integração do Cliente
 * @pw_element string $dPrevisao Data da Previsão
 * @pw_element integer $nCodVend Código do Vendedor
 * @pw_element string $cNumeroRemessa Número da Remessa exibido na tela.
 * @pw_element integer $codigo_cenario_impostos Código do cenário de impostos.<BR><BR>Se não informado, será assumido o cenário padrão.
 * @pw_element string $cCancelado Indica se a remessa está cancelada (S/N).<BR><BR>Utilizado apenas nos métodos de Consulta/Listagem.
 * @pw_complex cabec
 */
class Cabec{
	/**
	 * Código da Remessa no Omie
	 *
	 * @var integer
	 */
	public int $nCodRem;
	/**
	 * Código de Integração da Remessa
	 *
	 * @var string
	 */
	public string $cCodIntRem;
	/**
	 * Código do Cliente
	 *
	 * @var integer
	 */
	public int $nCodCli;
	/**
	 * Código de Integração do Cliente
	 *
	 * @var string
	 */
	public string $cCodIntCli;
	/**
	 * Data da Previsão
	 *
	 * @var string
	 */
	public string $dPrevisao;
	/**
	 * Código do Vendedor
	 *
	 * @var integer
	 */
	public int $nCodVend;
	/**
	 * Número da Remessa exibido na tela.
	 *
	 * @var string
	 */
	public string $cNumeroRemessa;
	/**
	 * Código do cenário de impostos.<BR><BR>Se não informado, será assumido o cenário padrão.
	 *
	 * @var integer
	 */
	public int $codigo_cenario_impostos;
	/**
	 * Indica se a remessa está cancelada (S/N).<BR><BR>Utilizado apenas nos métodos de Consulta/Listagem.
	 *
	 * @var string
	 */
	public string $cCancelado;
}
