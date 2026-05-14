<?php

namespace OmieLib\Produtos\Formaspagvendas;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Formaspagvendas\Request\VenparListarRequest;
use OmieLib\Produtos\Formaspagvendas\Response\VenparListarResponse;

/**
 * Lista os CESTs encontrados.
 *
 * @pw_element string $cCodigo Código da forma de pagamento.
 * @pw_element integer $nQtdeParc Quantidade de parcelas.
 * @pw_element string $cDescricao Descrição da forma de pagamento.
 * @pw_element string $cListaParc Lista de dias de vencimentos.
 * @pw_element integer $nDiasParc Dias de deslocamento para geração da parcela.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código da forma de pagamento.
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * Quantidade de parcelas.
	 *
	 * @var integer
	 */
	public int $nQtdeParc;
	/**
	 * Descrição da forma de pagamento.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Lista de dias de vencimentos.
	 *
	 * @var string
	 */
	public string $cListaParc;
	/**
	 * Dias de deslocamento para geração da parcela.
	 *
	 * @var integer
	 */
	public int $nDiasParc;
}
