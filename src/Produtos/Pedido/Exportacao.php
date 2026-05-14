<?php

namespace OmieLib\Produtos\Pedido;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedido\Request\PvpAlterarPedFatRequest;
use OmieLib\Produtos\Pedido\Request\PvpConsultarRequest;
use OmieLib\Produtos\Pedido\Request\PvpDevolverRequest;
use OmieLib\Produtos\Pedido\Request\PvpExcluirRequest;
use OmieLib\Produtos\Pedido\Request\PvpListarRequest;
use OmieLib\Produtos\Pedido\Request\PvpSimularImpRequest;
use OmieLib\Produtos\Pedido\Request\PvpStatusRequest;
use OmieLib\Produtos\Pedido\Request\PvpTrocarEtapaRequest;
use OmieLib\Produtos\Pedido\Response\PvpAlterarPedFatResponse;
use OmieLib\Produtos\Pedido\Response\PvpConsultarResponse;
use OmieLib\Produtos\Pedido\Response\PvpDevolverResponse;
use OmieLib\Produtos\Pedido\Response\PvpExcluirResponse;
use OmieLib\Produtos\Pedido\Response\PvpListarResponse;
use OmieLib\Produtos\Pedido\Response\PvpSimularImpResponse;
use OmieLib\Produtos\Pedido\Response\PvpStatusResponse;
use OmieLib\Produtos\Pedido\Response\PvpTrocarEtapaResponse;

/**
 * Dados da exportacao
 *
 * @pw_element string $nao_exportacao O cliente é estrangeiro, mas na verdade não se trata de uma exportação
 * @pw_element string $local_embarque Local de Embarque (ou de transposição de fronteira)
 * @pw_element string $uf_embarque UF do Local de Embarque
 * @pw_element string $local_despacho Local de Despacho
 * @pw_complex exportacao
 */
class Exportacao{
	/**
	 * O cliente é estrangeiro, mas na verdade não se trata de uma exportação
	 *
	 * @var string
	 */
	public string $nao_exportacao;
	/**
	 * Local de Embarque (ou de transposição de fronteira)
	 *
	 * @var string
	 */
	public string $local_embarque;
	/**
	 * UF do Local de Embarque
	 *
	 * @var string
	 */
	public string $uf_embarque;
	/**
	 * Local de Despacho
	 *
	 * @var string
	 */
	public string $local_despacho;
}
