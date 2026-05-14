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
 * Informações sobre o CBS.
 *
 * @pw_element decimal $nAliqCbs Alíquota da CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
 * @pw_element decimal $nPercDiferimentoCbs Percentual do diferimento - CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
 * @pw_element decimal $nPercReducaoCbs Percentual da redução de alíquota - CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal .
 * @pw_element decimal $nValDiferimentoCbs Valor do diferimento - CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
 * @pw_element decimal $nValCbs Valor da CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
 * @pw_complex CBS
 */
class CBS{
	/**
	 * Alíquota da CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
	 *
	 * @var decimal
	 */
	public float $nAliqCbs;
	/**
	 * Percentual do diferimento - CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
	 *
	 * @var decimal
	 */
	public float $nPercDiferimentoCbs;
	/**
	 * Percentual da redução de alíquota - CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal .
	 *
	 * @var decimal
	 */
	public float $nPercReducaoCbs;
	/**
	 * Valor do diferimento - CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
	 *
	 * @var decimal
	 */
	public float $nValDiferimentoCbs;
	/**
	 * Valor da CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
	 *
	 * @var decimal
	 */
	public float $nValCbs;
}
