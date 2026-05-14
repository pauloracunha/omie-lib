<?php

namespace OmieLib\Produtos\Etapafat;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Etapafat\Request\EtaproListarRequest;
use OmieLib\Produtos\Etapafat\Response\EtaproListarResponse;

/**
 * Lista de etapas
 *
 * @pw_element string $cCodigo Código da etapa do processo de faturamento.
 * @pw_element string $cDescricao Descrição da etapa do processo de faturamento.
 * @pw_element string $cDescrPadrao Descrição padrão da etapa do processo de faturamento.
 * @pw_element string $cInativo Indica se a etapa do processo está Inativa<BR><BR>"S" = INATIVA<BR>"N" = ATIVA
 * @pw_complex etapas
 */
class Etapas{
	/**
	 * Código da etapa do processo de faturamento.
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * Descrição da etapa do processo de faturamento.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Descrição padrão da etapa do processo de faturamento.
	 *
	 * @var string
	 */
	public string $cDescrPadrao;
	/**
	 * Indica se a etapa do processo está Inativa<BR><BR>"S" = INATIVA<BR>"N" = ATIVA
	 *
	 * @var string
	 */
	public string $cInativo;
}
