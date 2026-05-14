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
 * Informações unificadas sobre o IBS e CBS.
 *
 * @pw_element string $cst_ibs_cbs Código de Situação Tributária do IBS e CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
 * @pw_element string $class_trib Código de Classificação Tributária do IBS e CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
 * @pw_element decimal $base_ibs_cbs Base de cálculo do IBS e CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
 * @pw_complex ibs_cbs
 */
class Ibs_cbs{
	/**
	 * Código de Situação Tributária do IBS e CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
	 *
	 * @var string
	 */
	public string $cst_ibs_cbs;
	/**
	 * Código de Classificação Tributária do IBS e CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
	 *
	 * @var string
	 */
	public string $class_trib;
	/**
	 * Base de cálculo do IBS e CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
	 *
	 * @var decimal
	 */
	public float $base_ibs_cbs;
}
