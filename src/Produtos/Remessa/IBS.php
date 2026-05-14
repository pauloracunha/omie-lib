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
 * Informações sobre o IBS.
 *
 * @pw_element decimal $nAliqIbsUf Alíquota do IBS de competência das UF.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído.<BR>
 * @pw_element decimal $nPercDiferimentoIbsUf Percentual do Diferimento - IBS UF.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído.
 * @pw_element decimal $nPercReducaoIbsUf Percentual da redução de alíquota - IBS UF.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campos disponíveis apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esses campos serão alimentados conforme cenário fiscal.
 * @pw_element decimal $nValDiferimentoIbsUf Valor do Diferimento - IBS UF.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
 * @pw_element decimal $nValIbsUf Valor do IBS de competência da UF.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal..
 * @pw_element decimal $nAliqIbsMun Alíquota do IBS de competência do Município.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
 * @pw_element decimal $nPercDiferimentoIbsMun Percentual do diferimento - UBS Município.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
 * @pw_element decimal $nPercReducaoIbsMun Percentual da redução de alíquota - IBS Município.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
 * @pw_element decimal $nValDiferimentoIbsMun Valor do Diferimento - IBS Município.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
 * @pw_element decimal $nValIbsMun Valor do IBS de competência do Município.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.<BR>
 * @pw_element decimal $nValIbs Valor total do IBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
 * @pw_complex IBS
 */
class IBS{
	/**
	 * Alíquota do IBS de competência das UF.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído.<BR>
	 *
	 * @var decimal
	 */
	public float $nAliqIbsUf;
	/**
	 * Percentual do Diferimento - IBS UF.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal atribuído.
	 *
	 * @var decimal
	 */
	public float $nPercDiferimentoIbsUf;
	/**
	 * Percentual da redução de alíquota - IBS UF.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campos disponíveis apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esses campos serão alimentados conforme cenário fiscal.
	 *
	 * @var decimal
	 */
	public float $nPercReducaoIbsUf;
	/**
	 * Valor do Diferimento - IBS UF.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
	 *
	 * @var decimal
	 */
	public float $nValDiferimentoIbsUf;
	/**
	 * Valor do IBS de competência da UF.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal..
	 *
	 * @var decimal
	 */
	public float $nValIbsUf;
	/**
	 * Alíquota do IBS de competência do Município.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
	 *
	 * @var decimal
	 */
	public float $nAliqIbsMun;
	/**
	 * Percentual do diferimento - UBS Município.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
	 *
	 * @var decimal
	 */
	public float $nPercDiferimentoIbsMun;
	/**
	 * Percentual da redução de alíquota - IBS Município.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
	 *
	 * @var decimal
	 */
	public float $nPercReducaoIbsMun;
	/**
	 * Valor do Diferimento - IBS Município.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
	 *
	 * @var decimal
	 */
	public float $nValDiferimentoIbsMun;
	/**
	 * Valor do IBS de competência do Município.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.<BR>
	 *
	 * @var decimal
	 */
	public float $nValIbsMun;
	/**
	 * Valor total do IBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
	 *
	 * @var decimal
	 */
	public float $nValIbs;
}
