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
 * Informações sobre o IBS.
 *
 * @pw_element decimal $nAliqIbsUf Alíquota do IBS de competência das UF.<BR><BR>
 * @pw_element decimal $nPercDiferimentoIbsUf Percentual do Diferimento - IBS UF.
 * @pw_element decimal $nPercReducaoIbsUf Percentual da redução de alíquota - IBS UF.<BR>
 * @pw_element decimal $nValDiferimentoIbsUf Valor do Diferimento - IBS UF.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será calculado automaticamente.
 * @pw_element decimal $nValIbsUf Valor do IBS de competência da UF.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será calculado automaticamente.
 * @pw_element decimal $nAliqIbsMun Alíquota do IBS de competência do Município.
 * @pw_element decimal $nPercDiferimentoIbsMun Percentual do diferimento - UBS Município.<BR>
 * @pw_element decimal $nPercReducaoIbsMun Percentual da redução de alíquota - IBS Município.
 * @pw_element decimal $nValDiferimentoIbsMun Valor do Diferimento - IBS Município.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será calculado automaticamente.
 * @pw_element decimal $nValIbsMun Valor do IBS de competência do Município.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será calculado automaticamente.<BR>
 * @pw_element decimal $nValIbs Valor total do IBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será calculado automaticamente.
 * @pw_complex IBS
 */
class IBS{
	/**
	 * Alíquota do IBS de competência das UF.<BR><BR>
	 *
	 * @var decimal
	 */
	public float $nAliqIbsUf;
	/**
	 * Percentual do Diferimento - IBS UF.
	 *
	 * @var decimal
	 */
	public float $nPercDiferimentoIbsUf;
	/**
	 * Percentual da redução de alíquota - IBS UF.<BR>
	 *
	 * @var decimal
	 */
	public float $nPercReducaoIbsUf;
	/**
	 * Valor do Diferimento - IBS UF.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será calculado automaticamente.
	 *
	 * @var decimal
	 */
	public float $nValDiferimentoIbsUf;
	/**
	 * Valor do IBS de competência da UF.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será calculado automaticamente.
	 *
	 * @var decimal
	 */
	public float $nValIbsUf;
	/**
	 * Alíquota do IBS de competência do Município.
	 *
	 * @var decimal
	 */
	public float $nAliqIbsMun;
	/**
	 * Percentual do diferimento - UBS Município.<BR>
	 *
	 * @var decimal
	 */
	public float $nPercDiferimentoIbsMun;
	/**
	 * Percentual da redução de alíquota - IBS Município.
	 *
	 * @var decimal
	 */
	public float $nPercReducaoIbsMun;
	/**
	 * Valor do Diferimento - IBS Município.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será calculado automaticamente.
	 *
	 * @var decimal
	 */
	public float $nValDiferimentoIbsMun;
	/**
	 * Valor do IBS de competência do Município.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será calculado automaticamente.<BR>
	 *
	 * @var decimal
	 */
	public float $nValIbsMun;
	/**
	 * Valor total do IBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será calculado automaticamente.
	 *
	 * @var decimal
	 */
	public float $nValIbs;
}
