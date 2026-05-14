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
 * Informações sobre a Tributação Regular do IBS e CBS.
 *
 * @pw_element string $cCstIbsCbsReg Código da Situação Tributária do IBS e CBS (Tributação Regular).
 * @pw_element string $cClassTribReg Código de Classificação Tributária do IBS e CBS (Tributação Regular).
 * @pw_element decimal $nAliqIbsUfReg Valor da alíquota do IBS da UF na tributação regular.
 * @pw_element decimal $nAliqIbsMunReg Valor da alíquota do IBS do Município na tributação regular.
 * @pw_element decimal $nAliqCbsReg Valor da alíquota da CBS na tributação regular.
 * @pw_element decimal $nValIbsUfReg Valor do Tributo do IBS da UF na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será calculado automaticamente.
 * @pw_element decimal $nValIbsMunReg Valor do Tributo do IBS do Município na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será calculado automaticamente.
 * @pw_element decimal $nValCbsReg Valor do Tributo da CBS na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será calculado automaticamente.
 * @pw_complex TRIB_REG
 */
class TRIB_REG{
	/**
	 * Código da Situação Tributária do IBS e CBS (Tributação Regular).
	 *
	 * @var string
	 */
	public string $cCstIbsCbsReg;
	/**
	 * Código de Classificação Tributária do IBS e CBS (Tributação Regular).
	 *
	 * @var string
	 */
	public string $cClassTribReg;
	/**
	 * Valor da alíquota do IBS da UF na tributação regular.
	 *
	 * @var decimal
	 */
	public float $nAliqIbsUfReg;
	/**
	 * Valor da alíquota do IBS do Município na tributação regular.
	 *
	 * @var decimal
	 */
	public float $nAliqIbsMunReg;
	/**
	 * Valor da alíquota da CBS na tributação regular.
	 *
	 * @var decimal
	 */
	public float $nAliqCbsReg;
	/**
	 * Valor do Tributo do IBS da UF na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será calculado automaticamente.
	 *
	 * @var decimal
	 */
	public float $nValIbsUfReg;
	/**
	 * Valor do Tributo do IBS do Município na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será calculado automaticamente.
	 *
	 * @var decimal
	 */
	public float $nValIbsMunReg;
	/**
	 * Valor do Tributo da CBS na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será calculado automaticamente.
	 *
	 * @var decimal
	 */
	public float $nValCbsReg;
}
