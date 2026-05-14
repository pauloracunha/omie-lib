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
 * Informações unificadas sobre o IBS e CBS.
 *
 * @pw_element string $cCstIbsCbs Código de Situação Tributária do IBS e CBS.
 * @pw_element string $cClassTrib Código de Classificação Tributária do IBS e CBS.
 * @pw_element decimal $nBaseIbsCbs Base de cálculo do IBS e CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será calculado automaticamente.
 * @pw_complex IBS_CBS
 */
class IBS_CBS{
	/**
	 * Código de Situação Tributária do IBS e CBS.
	 *
	 * @var string
	 */
	public string $cCstIbsCbs;
	/**
	 * Código de Classificação Tributária do IBS e CBS.
	 *
	 * @var string
	 */
	public string $cClassTrib;
	/**
	 * Base de cálculo do IBS e CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será calculado automaticamente.
	 *
	 * @var decimal
	 */
	public float $nBaseIbsCbs;
}
