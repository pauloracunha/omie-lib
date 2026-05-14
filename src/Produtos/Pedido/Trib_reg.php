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
 * Informações sobre a Tributação Regular do IBS e CBS.
 *
 * @pw_element string $cst_reg_ibs_cst Código da Situação Tributária do IBS e CBS (Tributação Regular).<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
 * @pw_element string $class_trib_reg Código de Classificação Tributária do IBS e CBS (Tributação Regular).<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
 * @pw_element decimal $aliquota_reg_ibs_uf Valor da alíquota do IBS da UF na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
 * @pw_element decimal $aliquota_reg_ibs_mu Valor da alíquota do IBS do Município na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
 * @pw_element decimal $aliquota_reg_cbs Valor da alíquota da CBS na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
 * @pw_element decimal $valor_reg_ibs_uf Valor do Tributo do IBS da UF na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
 * @pw_element decimal $valor_reg_ibs_mu Valor do Tributo do IBS do Município na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
 * @pw_element decimal $valor_reg_cbs Valor do Tributo da CBS na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
 * @pw_complex trib_reg
 */
class Trib_reg{
	/**
	 * Código da Situação Tributária do IBS e CBS (Tributação Regular).<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
	 *
	 * @var string
	 */
	public string $cst_reg_ibs_cst;
	/**
	 * Código de Classificação Tributária do IBS e CBS (Tributação Regular).<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
	 *
	 * @var string
	 */
	public string $class_trib_reg;
	/**
	 * Valor da alíquota do IBS da UF na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
	 *
	 * @var decimal
	 */
	public float $aliquota_reg_ibs_uf;
	/**
	 * Valor da alíquota do IBS do Município na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
	 *
	 * @var decimal
	 */
	public float $aliquota_reg_ibs_mu;
	/**
	 * Valor da alíquota da CBS na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
	 *
	 * @var decimal
	 */
	public float $aliquota_reg_cbs;
	/**
	 * Valor do Tributo do IBS da UF na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
	 *
	 * @var decimal
	 */
	public float $valor_reg_ibs_uf;
	/**
	 * Valor do Tributo do IBS do Município na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
	 *
	 * @var decimal
	 */
	public float $valor_reg_ibs_mu;
	/**
	 * Valor do Tributo da CBS na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
	 *
	 * @var decimal
	 */
	public float $valor_reg_cbs;
}
