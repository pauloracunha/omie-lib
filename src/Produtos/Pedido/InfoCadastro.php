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
 * Informações complementares do pedido.
 *
 * @pw_element string $dInc Data da Inclusão.<BR>Preenchimento automático - Não informar.
 * @pw_element string $hInc Hora da Inclusão.<BR>Preenchimento automático - Não informar.
 * @pw_element string $uInc Usuário da Inclusão.<BR>Preenchimento automático - Não informar.
 * @pw_element string $dAlt Data da Alteração.<BR>Preenchimento automático - Não informar.
 * @pw_element string $hAlt Hora da Alteração.<BR>Preenchimento automático - Não informar.
 * @pw_element string $uAlt Usuário da Alteração.<BR>Preenchimento automático - Não informar.
 * @pw_element string $dCan Data da Cancelamento.<BR>Preenchimento automático - Não informar.
 * @pw_element string $hCan Hora da Cancelamento.<BR>Preenchimento automático - Não informar.
 * @pw_element string $uCan Usuário da Cancelamento.<BR>Preenchimento automático - Não informar.
 * @pw_element string $cancelado Indica se o pedido foi cancelado.<BR>Preenchimento automático - Não informar.
 * @pw_element string $dFat Data de Faturamento.<BR>Preenchimento automático - Não informar.
 * @pw_element string $hFat Hora de faturamento.<BR>Preenchimento automático - Não informar.
 * @pw_element string $uFat Usuário que realizou o faturamento.<BR>Preenchimento automático - Não informar.
 * @pw_element string $faturado Indica se o pedido está faturado.<BR>Preenchimento automático - Não informar.
 * @pw_element string $denegado Indica se o pedido foi denegado.<BR>Preenchimento automático - Não informar.
 * @pw_element string $autorizado Indica se o pedido foi autorizado
 * @pw_element string $devolvido Indica se o pedido foi devolvido.<BR>Preenchimento automático - Não informar.
 * @pw_element string $devolvido_parcial Indica se o pedido foi devolvido parcialmente.<BR>Preenchimento automático - Não informar.
 * @pw_element string $cImpAPI Importado pela API.<BR>Preenchimento automático - Não informar.
 * @pw_complex infoCadastro
 */
class InfoCadastro{
	/**
	 * Data da Inclusão.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $dInc;
	/**
	 * Hora da Inclusão.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $hInc;
	/**
	 * Usuário da Inclusão.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $uInc;
	/**
	 * Data da Alteração.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $dAlt;
	/**
	 * Hora da Alteração.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $hAlt;
	/**
	 * Usuário da Alteração.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $uAlt;
	/**
	 * Data da Cancelamento.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $dCan;
	/**
	 * Hora da Cancelamento.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $hCan;
	/**
	 * Usuário da Cancelamento.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $uCan;
	/**
	 * Indica se o pedido foi cancelado.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $cancelado;
	/**
	 * Data de Faturamento.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $dFat;
	/**
	 * Hora de faturamento.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $hFat;
	/**
	 * Usuário que realizou o faturamento.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $uFat;
	/**
	 * Indica se o pedido está faturado.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $faturado;
	/**
	 * Indica se o pedido foi denegado.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $denegado;
	/**
	 * Indica se o pedido foi autorizado
	 *
	 * @var string
	 */
	public string $autorizado;
	/**
	 * Indica se o pedido foi devolvido.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $devolvido;
	/**
	 * Indica se o pedido foi devolvido parcialmente.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $devolvido_parcial;
	/**
	 * Importado pela API.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $cImpAPI;
}
