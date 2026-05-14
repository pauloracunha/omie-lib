<?php

namespace OmieLib\Geral\Parcelas;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Parcelas\Request\ParcelaIncluirRequest;
use OmieLib\Geral\Parcelas\Request\ParcelaListarRequest;
use OmieLib\Geral\Parcelas\Response\ParcelaIncluirResponse;
use OmieLib\Geral\Parcelas\Response\ParcelaListarResponse;

/**
 * Lista os cadastros encontrados.
 *
 * @pw_element string $nCodigo Código da parcela.
 * @pw_element string $cDescricao Descrição da parcela.
 * @pw_element integer $nParcelas Número de parcelas.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código da parcela.
	 *
	 * @var string
	 */
	public string $nCodigo;
	/**
	 * Descrição da parcela.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Número de parcelas.
	 *
	 * @var integer
	 */
	public int $nParcelas;
}
