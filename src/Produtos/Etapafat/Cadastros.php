<?php

namespace OmieLib\Produtos\Etapafat;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Etapafat\Request\EtaproListarRequest;
use OmieLib\Produtos\Etapafat\Response\EtaproListarResponse;

/**
 * Lista de etapas do processo de faturamento.
 *
 * @pw_element string $cCodOperacao Código da Operação de faturamento.
 * @pw_element string $cDescOperacao Descrição da Operação de faturamento.
 * @pw_element etapasArray $etapas Lista de etapas
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código da Operação de faturamento.
	 *
	 * @var string
	 */
	public string $cCodOperacao;
	/**
	 * Descrição da Operação de faturamento.
	 *
	 * @var string
	 */
	public string $cDescOperacao;
	/**
	 * Lista de etapas
	 *
	 * @var Etapas[]
	 */
	public array $etapas;
}
