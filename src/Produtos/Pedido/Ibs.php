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
 * Informações sobre o IBS.
 *
 * @pw_element decimal $aliquota_ibs_uf Alíquota do IBS de competência das UF.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.<BR>
 * @pw_element decimal $perc_dif_ibs_uf Percentual do Diferimento - IBS UF.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
 * @pw_element decimal $perc_red_ibs_uf Percentual da redução de alíquota - IBS UF.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campos disponíveis apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esses campos serão alimentados conforme o cenário fiscal.
 * @pw_element decimal $valor_dif_ibs_uf Valor do Diferimento - IBS UF.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
 * @pw_element decimal $valor_ibs_uf Valor do IBS de competência da UF.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
 * @pw_element decimal $aliquota_ibs_mu Alíquota do IBS de competência do Município.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
 * @pw_element decimal $perc_dif_ibs_mu Percentual do diferimento - UBS Município.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
 * @pw_element decimal $perc_red_ibs_mu Percentual da redução de alíquota - IBS Município.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
 * @pw_element decimal $valor_dif_ibs_mu Valor do Diferimento - IBS Município.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
 * @pw_element decimal $valor_ibs_mu Valor do IBS de competência do Município.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.<BR>
 * @pw_element decimal $valor_ibs Valor total do IBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
 * @pw_complex ibs
 */
class Ibs{
	/**
	 * Alíquota do IBS de competência das UF.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.<BR>
	 *
	 * @var decimal
	 */
	public float $aliquota_ibs_uf;
	/**
	 * Percentual do Diferimento - IBS UF.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
	 *
	 * @var decimal
	 */
	public float $perc_dif_ibs_uf;
	/**
	 * Percentual da redução de alíquota - IBS UF.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campos disponíveis apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esses campos serão alimentados conforme o cenário fiscal.
	 *
	 * @var decimal
	 */
	public float $perc_red_ibs_uf;
	/**
	 * Valor do Diferimento - IBS UF.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
	 *
	 * @var decimal
	 */
	public float $valor_dif_ibs_uf;
	/**
	 * Valor do IBS de competência da UF.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
	 *
	 * @var decimal
	 */
	public float $valor_ibs_uf;
	/**
	 * Alíquota do IBS de competência do Município.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
	 *
	 * @var decimal
	 */
	public float $aliquota_ibs_mu;
	/**
	 * Percentual do diferimento - UBS Município.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
	 *
	 * @var decimal
	 */
	public float $perc_dif_ibs_mu;
	/**
	 * Percentual da redução de alíquota - IBS Município.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
	 *
	 * @var decimal
	 */
	public float $perc_red_ibs_mu;
	/**
	 * Valor do Diferimento - IBS Município.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
	 *
	 * @var decimal
	 */
	public float $valor_dif_ibs_mu;
	/**
	 * Valor do IBS de competência do Município.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.<BR>
	 *
	 * @var decimal
	 */
	public float $valor_ibs_mu;
	/**
	 * Valor total do IBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído ao pedido.
	 *
	 * @var decimal
	 */
	public float $valor_ibs;
}
