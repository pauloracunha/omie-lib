<?php

namespace OmieLib\Produtos\Notaentrada;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Notaentrada\Request\NeAlterarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeConsultarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeExcluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeIncluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeListarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeStatusRequest;
use OmieLib\Produtos\Notaentrada\Response\NeAlterarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeConsultarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeExcluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeIncluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeListarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeStatusResponse;

/**
 * Informações sobre o CBS.
 *
 * @pw_element decimal $nAliqCbs Alíquota da CBS.
 * @pw_element decimal $nPercDiferimentoCbs Percentual do diferimento - CBS.
 * @pw_element decimal $nPercReducaoCbs Percentual da redução de alíquota - CBS.
 * @pw_element decimal $nValDiferimentoCbs Valor do diferimento - CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será calculado automaticamente.
 * @pw_element decimal $nValCbs Valor da CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será calculado automaticamente.
 * @pw_complex CBS
 */
class CBS{
	/**
	 * Alíquota da CBS.
	 *
	 * @var decimal
	 */
	public float $nAliqCbs;
	/**
	 * Percentual do diferimento - CBS.
	 *
	 * @var decimal
	 */
	public float $nPercDiferimentoCbs;
	/**
	 * Percentual da redução de alíquota - CBS.
	 *
	 * @var decimal
	 */
	public float $nPercReducaoCbs;
	/**
	 * Valor do diferimento - CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será calculado automaticamente.
	 *
	 * @var decimal
	 */
	public float $nValDiferimentoCbs;
	/**
	 * Valor da CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será calculado automaticamente.
	 *
	 * @var decimal
	 */
	public float $nValCbs;
}
